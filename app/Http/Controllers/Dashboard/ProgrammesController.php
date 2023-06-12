<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgrammeImagesRequest;
use App\Http\Requests\ProgrammeRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Feature;
use App\Models\OurProgramme;
use App\Models\ProgrammeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProgrammesController extends Controller
{
    public function index()
    {
        $data = OurProgramme::with('progImages')->get();
        $cities = City::get();
        $countries = Country::get();
        $features = Feature::where('type_of', 'programmes')->get();

        return view('dashboard.programmes.index', compact('data', 'cities','countries', 'features'));
    }


    public function create()
    {
        $cities = City::get();
        $countries = Country::get();
        $features = Feature::where('type_of', 'programmes')->get();
        return view('dashboard.programmes.create', compact('cities','countries', 'features'));
    }
    public function store(ProgrammeRequest $request)
    {
//        return  $request;
        try {
            $filename = "";
            if ($request->hasFile('cover')) {
                $filename = \General::uploadImage('programmes', $request->cover);
            }
            DB::beginTransaction();
            $programme = OurProgramme::create([
                'name' => $request->name,
                'title' => $request->title,
                'price' => $request->price,
                'plan' => $request->plan,
                'discount' => $request->discount,
                'description' => $request->description,
                'cover' => $filename,
                'city_id' => $request->city_id,
                'country_id' => $request->country_id,

            ]);
            if ($programme) {
                $programme->features()->attach($request->features);
            }

            DB::commit();
            return redirect()->route('programmes.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function show($id)
    {
        $data = OurProgramme::with('progImages', 'country','city', 'features')->find($id);
        if ($data) {
            return view('dashboard.programmes.show', compact('data'));

        } else {
            return redirect()->route('programmes.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function addImages($id)
    {
        $data = OurProgramme::with('progImages', 'country','city', 'features')->find($id);
        if ($data) {
            return view('dashboard.programmes.postImages', compact('data'));

        } else {
            return redirect()->route('programmes.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function postImages(ProgrammeImagesRequest $request, $id)
    {
//        return  $request;
        try {

            if ($request->hasFile('programme_images')) {
                foreach ($request->programme_images as $item) {
                    $fileName = \General::uploadImage('programmes', $item);
//                    return $fileName;
                    DB::beginTransaction();
                    ProgrammeImage::create([
                        'image' => $fileName,
                        'programme_id' => $id,
                    ]);
                    DB::commit();
                }
            }
            return redirect()->route('programmes.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }


    public function deleteImage(Request $request, $id)
    {
        $data = ProgrammeImage::find($id);
        if ($data) {
            if (File::exists(public_path('uploads/programmes/' . $data->image))) {
                File::delete(public_path('uploads/programmes/' . $data->image));
            }
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('programmes.index')->with(['error' => __('messages.error_general')]);
        }
    }


    public function edit($id)
    {
        $data = OurProgramme::with('progImages', 'country','city', 'features')->find($id);
        $cities = City::get();
        $countries = Country::get();
        $features = Feature::where('type_of', 'programmes')->get();


        if ($data) {
            return view('dashboard.programmes.edit', compact('data', 'cities','countries', 'features'));

        } else {
            return redirect()->route('programmes.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(ProgrammeRequest $request, $id)
    {
        try {
//            return $request;
            $data = OurProgramme::find($id);
            DB::beginTransaction();


            $filename = "";
            if ($request->hasFile('cover')) {
                if (File::exists(public_path('uploads/programmes/' . $data->cover))) {
                    File::delete(public_path('uploads/programmes/' . $data->cover));
                }

                $filename = \General::uploadImage('programmes', $request->cover);
                $data->update(['cover' => $filename]);
            }

            $data->update($request->except('id', '_token', 'cover'));
            $data->features()->sync($request->features);

            DB::commit();
            return redirect()->route('programmes.index')->with(['success' => __('messages.success_updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = OurProgramme::find($id);
        if ($data) {
            $images = ProgrammeImage::where('programme_id', $id)->get();
            if ($images->count() > 0) {
                foreach ($images as $image) {
                    if (File::exists(public_path('uploads/programmes/' . $image->image))) {
                        File::delete(public_path('uploads/programmes/' . $image->image));
                    }
                }
            }
            if (File::exists(public_path('uploads/programmes/' . $data->cover))) {
                File::delete(public_path('uploads/programmes/' . $data->cover));
            }
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('programmes.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
