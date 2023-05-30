<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;
use App\Http\Requests\PostImagesRequest;
use App\Models\City;
use App\Models\Hotel;
use App\Models\HotelImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HotelsController extends Controller
{
    public function index()
    {
        $data = Hotel::with('city', 'hotelImages')
            ->select('id', 'title', 'city_id', 'location',
                'address', 'rooms_num', 'description')->get();
        $cities = City::get();
        return view('dashboard.hotels.index', compact('data', 'cities'));
    }

    public function store(HotelRequest $request)
    {
//        return  $request;
        try {

            DB::beginTransaction();
            Hotel::create([
                'title' => $request->title,
                'description' => $request->description,
                'city_id' => $request->city_id,
                'location' => $request->location,
                'address' => $request->address,
                'rooms_num' => $request->rooms_num,
            ]);

            DB::commit();
            return redirect()->route('hotels.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function show($id)
    {
        $data = Hotel::with('city', 'hotelImages')
            ->select('id', 'title', 'city_id', 'location',
                'address', 'rooms_num', 'description')->find($id);
        if ($data) {
            return view('dashboard.hotels.view', compact('data'));

        } else {
            return redirect()->route('hotels.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function addImages($id)
    {
        $data = Hotel::with('city', 'hotelImages')
            ->select('id', 'title', 'city_id', 'location',
                'address', 'rooms_num', 'description')->find($id);
        if ($data) {
            return view('dashboard.hotels.postImages', compact('data'));

        } else {
            return redirect()->route('hotels.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function postImages(PostImagesRequest $request, $id)
    {
//        return  $request;
        try {

            if ($request->hasFile('hotel_images')) {
                foreach ($request->hotel_images as $item) {
                    $fileName = \General::uploadImage('hotels', $item);
//                    return $fileName;
                    DB::beginTransaction();
                    HotelImage::create([
                        'image' => $fileName,
                        'hotel_id' => $id,
                    ]);
                    DB::commit();
                }
            }
            return redirect()->route('hotels.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }


    public function deleteImage(Request $request, $id)
    {
        $data = HotelImage::find($id);
        if ($data) {

            if (File::exists(public_path('uploads/hotels/' . $data->image))) {
                File::delete(public_path('uploads/hotels/' . $data->image));
            }

            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('hotels.index')->with(['error' => __('messages.error_general')]);
        }
    }


    public function edit($id)
    {
        $data = Hotel::find($id);
        if ($data) {
            return view('dashboard.hotels.edit', compact('data'));

        } else {
            return redirect()->route('hotels.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(HotelRequest $request, $id)
    {
        try {
//            return $request;
            $data = Hotel::find($id);
            DB::beginTransaction();

            $data->update($request->except('id', '_token'));
            DB::commit();
            return redirect()->route('hotels.index')->with(['success' => __('messages.success_updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = Hotel::find($id);
        if ($data) {
            $images = HotelImage::where('hotel_id', $id)->get();
            if ($images->count() > 0) {
                foreach ($images as $image) {
                    if (File::exists(public_path('uploads/hotels/' . $image->image))) {
                        File::delete(public_path('uploads/hotels/' . $image->image));
                    }
                }
            }
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('hotels.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
