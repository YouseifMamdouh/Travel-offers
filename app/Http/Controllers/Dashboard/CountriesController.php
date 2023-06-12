<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CountriesController extends Controller
{
    public function index()
    {
        $data = Country::select('id', 'title', 'image')->get();
        return view('dashboard.countries.index', compact('data'));
    }


    public function show($id)
    {
        $data = Country::find($id);
        return view('dashboard.countries.show', compact('data'));
    }
    public function create()
    {
        return view('dashboard.countries.create');
    }
    public function store(CountryRequest $request)
    {
//        return  $request;
        try {
            $filename = "";
            if ($request->hasFile('image')) {
                $filename = \General::uploadImage('countries', $request->image);
            }
            DB::beginTransaction();
            Country::create([
                'title' => $request->title,
                'summary' => $request->summary,
                'image' => $filename,
            ]);

            DB::commit();
            return redirect()->route('countries.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function edit($id)
    {
        $data = Country::find($id);
        if ($data) {
            return view('dashboard.countries.edit', compact('data'));

        } else {
            return redirect()->route('countries.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(CountryRequest $request, $id)
    {
        try {
//            return $request;
            $data = Country::find($id);
            DB::beginTransaction();

            $filename = "";
            if ($request->hasFile('image')) {
                if (File::exists(public_path('uploads/countries/' . $data->image))) {
                    File::delete(public_path('uploads/countries/' . $data->image));
                }

                $filename = \General::uploadImage('countries', $request->image);
                $data->update(['image' => $filename]);
            }

            $data->update($request->except('id', '_token', 'image'));
            DB::commit();
            return redirect()->route('countries.index')->with(['success' => __('messages.success_updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = Country::find($id);
        if ($data) {
            if (File::exists(public_path('uploads/countries/' . $data->image))) {
                File::delete(public_path('uploads/countries/' . $data->image));
            }
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('countries.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
