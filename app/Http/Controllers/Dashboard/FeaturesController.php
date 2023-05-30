<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeaturesController extends Controller
{

    public function index()
    {
        $data = Feature::select('id', 'name', 'type_of')->get();
        return view('dashboard.features.index', compact('data'));
    }

    public function store(FeatureRequest $request)
    {
//        return  $request;
        try {
            DB::beginTransaction();
            Feature::create([
                'name' => $request->name,
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

            $data->update($request->except('id', '_token'));
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
