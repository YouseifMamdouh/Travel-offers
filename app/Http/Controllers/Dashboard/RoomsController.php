<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRoomImagesRequest;
use App\Http\Requests\RoomRequest;
use App\Models\Feature;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RoomsController extends Controller
{
    public function index()
    {
        $data = Room::with('hotel', 'roomImages', 'features')
            ->select('id', 'title', 'description', 'type_of', 'hotel_id',
                'price')->get();
//        return $data;
        $hotels = Hotel::get();
        $features = Feature::where('type_of', 'hotels')->get();
        return view('dashboard.rooms.index', compact('data', 'hotels', 'features'));
    }

    public function store(RoomRequest $request)
    {
//        return  $request;
        try {

            DB::beginTransaction();
            $room = Room::create([
                'title' => $request->title,
                'description' => $request->description,
                'hotel_id' => $request->hotel_id,
                'type_of' => $request->type_of,
                'price' => $request->price,
            ]);
            if ($room) {
                $room->features()->attach($request->features);
            }

            DB::commit();
            return redirect()->route('rooms.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function show($id)
    {
        $data = Room::with('hotel', 'roomImages', 'features')
            ->select('id', 'title', 'description', 'type_of', 'hotel_id',
                'price')->find($id);
        if ($data) {
            return view('dashboard.rooms.view', compact('data'));

        } else {
            return redirect()->route('rooms.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function addImages($id)
    {
        $data = Room::with('hotel', 'roomImages', 'features')
            ->select('id', 'title', 'description', 'type_of', 'hotel_id',
                'price')->find($id);
        if ($data) {
            return view('dashboard.rooms.postImages', compact('data'));

        } else {
            return redirect()->route('rooms.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function postImages(PostRoomImagesRequest $request, $id)
    {
//        return  $request;
        try {

            if ($request->hasFile('room_images')) {
                foreach ($request->room_images as $item) {
                    $fileName = \General::uploadImage('rooms', $item);
//                    return $fileName;
                    DB::beginTransaction();
                    RoomImage::create([
                        'image' => $fileName,
                        'room_id' => $id,
                    ]);
                    DB::commit();
                }
            }
            return redirect()->route('rooms.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }


    public function deleteImage(Request $request, $id)
    {
        $data = RoomImage::find($id);
        if ($data) {

            if (File::exists(public_path('uploads/rooms/' . $data->image))) {
                File::delete(public_path('uploads/rooms/' . $data->image));
            }

            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('rooms.index')->with(['error' => __('messages.error_general')]);
        }
    }


    public function edit($id)
    {
        $data = Room::with('hotel', 'roomImages', 'features')
            ->select('id', 'title', 'description', 'type_of', 'hotel_id',
                'price')->find($id);
        $hotels = Hotel::get();
        $features = Feature::where('type_of', 'hotels')->get();
        if ($data) {
            return view('dashboard.rooms.edit', compact('data', 'hotels', 'features'));

        } else {
            return redirect()->route('rooms.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(RoomRequest $request, $id)
    {
        try {
//            return $request;
            $data = Room::find($id);
            DB::beginTransaction();

            $data->update([
                'title' => $request->title,
                'description' => $request->description,
                'hotel_id' => $request->hotel_id,
                'type_of' => $request->type_of,
                'price' => $request->price,
            ]);
            $data->features()->sync($request->features);
            DB::commit();
            return redirect()->route('rooms.index')->with(['success' => __('messages.success_updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = Room::find($id);
        if ($data) {
            $images = RoomImage::where('room_id', $id)->get();
            if ($images->count() > 0) {
                foreach ($images as $image) {
                    if (File::exists(public_path('uploads/rooms/' . $image->image))) {
                        File::delete(public_path('uploads/rooms/' . $image->image));
                    }
                }
            }
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('rooms.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
