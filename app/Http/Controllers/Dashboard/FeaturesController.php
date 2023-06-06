<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FeaturesController extends Controller
{

    public function index()
    {
        $data = Feature::select('id', 'name', 'type_of', 'icon')->get();
        return view('dashboard.features.index', compact('data'));
    }


    public function create()
    {
        return view('dashboard.features.create');
    }
    public function store(FeatureRequest $request)
    {
//        return  $request;
        try {
            $filename = "";
            if ($request->hasFile('icon')) {
                $filename = \General::uploadImage('features', $request->icon);
            }
            DB::beginTransaction();
            Feature::create([
                'name' => $request->name,
                'icon' => $filename,
                'type_of' => $request->type_of,
            ]);

            DB::commit();
            return redirect()->route('features.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function edit($id)
    {
        $data = Feature::find($id);
        if ($data) {
            return view('dashboard.features.edit', compact('data'));

        } else {
            return redirect()->route('features.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(FeatureRequest $request, $id)
    {
        try {
//            return $request;
            $data = Feature::find($id);


            DB::beginTransaction();

            $filename = "";
            if ($request->hasFile('icon')) {
                if (File::exists(public_path('uploads/features/' . $data->icon))) {
                    File::delete(public_path('uploads/features/' . $data->icon));
                }
                $filename = \General::uploadImage('features', $request->icon);
                $data->update(['icon' => $filename]);
            }
            $data->update($request->except('id', '_token', 'icon'));
            DB::commit();
            return redirect()->route('features.index')->with(['success' => __('messages.success_updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = Feature::find($id);
        if ($data) {

            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('features.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
