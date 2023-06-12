<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CitiesController extends Controller
{
    public function index()
    {
        $data = City::select('id', 'title', 'image', 'country_id')->get();
        return view('dashboard.cities.index', compact('data'));
    }


    public function show($id)
    {
        $data = City::find($id);
        return view('dashboard.cities.show', compact('data'));
    }
    public function create()
    {
        return view('dashboard.cities.create');
    }
    public function store(CityRequest $request)
    {
//        return  $request;
        try {
            $filename = "";
            if ($request->hasFile('image')) {
                $filename = \General::uploadImage('cities', $request->image);
            }
            DB::beginTransaction();
            City::create([
                'title' => $request->title,
                'summary' => $request->summary,
                'country_id' => $request->country_id,
                'image' => $filename,
            ]);

            DB::commit();
            return redirect()->route('cities.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function edit($id)
    {
        $data = City::find($id);
        if ($data) {
            return view('dashboard.cities.edit', compact('data'));

        } else {
            return redirect()->route('cities.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(CityRequest $request, $id)
    {
        try {
//            return $request;
            $data = City::find($id);
            DB::beginTransaction();

            $filename = "";
            if ($request->hasFile('image')) {
                if (File::exists(public_path('uploads/cities/' . $data->image))) {
                    File::delete(public_path('uploads/cities/' . $data->image));
                }

                $filename = \General::uploadImage('cities', $request->image);
                $data->update(['image' => $filename]);
            }

            $data->update($request->except('id', '_token', 'image'));
            DB::commit();
            return redirect()->route('cities.index')->with(['success' => __('messages.success_updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = City::find($id);
        if ($data) {
            if (File::exists(public_path('uploads/cities/' . $data->image))) {
                File::delete(public_path('uploads/cities/' . $data->image));
            }
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('cities.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function getCitiesFromCountry(Request $request, $id) {
//        return $id;
         $cities_inside = City::where('country_id', $id)->get();
         if ($cities_inside->count() > 0)
            return response()->json(['status'=> 1, 'msg' => 'Cities Inside Country', 'data' => $cities_inside]);
         return response()->json(['status'=> 0, 'msg' => 'No Cities Inside Country', 'data' => null]);
    }







}
