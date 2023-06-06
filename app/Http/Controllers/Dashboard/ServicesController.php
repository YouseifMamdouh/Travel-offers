<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    public function index()
    {
        $data = Service::select('id', 'title', 'description', 'image')->get();
        return view('dashboard.services.index', compact('data'));
    }

    public function create()
    {
        return view('dashboard.services.create');
    }
    public function show($id)
    {
        $data = Service::find($id);
        return view('dashboard.services.show', compact('data'));
    }
    public function store(ServiceRequest $request)
    {
//        return  $request;
        try {
            $filename = "";
            if ($request->hasFile('image')) {
                $filename = \General::uploadImage('services', $request->image);
            }
            DB::beginTransaction();
            Service::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
            ]);

            DB::commit();
            return redirect()->route('services.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function edit($id)
    {
        $data = Service::find($id);
        if ($data) {
            return view('dashboard.services.edit', compact('data'));

        } else {
            return redirect()->route('services.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(ServiceRequest $request, $id)
    {
        try {
//            return $request;
            $data = Service::find($id);
            DB::beginTransaction();

            $filename = "";
            if ($request->hasFile('image')) {
                if (File::exists(public_path('uploads/services/' . $data->image))) {
                    File::delete(public_path('uploads/services/' . $data->image));
                }

                $filename = \General::uploadImage('services', $request->image);
                $data->update(['image' => $filename]);
            }

            $data->update($request->except('id', '_token', 'image'));
            DB::commit();
            return redirect()->route('services.index')->with(['success' => __('messages.success_updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = Service::find($id);
        if ($data) {
            if (File::exists(public_path('uploads/cities/' . $data->image))) {
                File::delete(public_path('uploads/cities/' . $data->image));
            }
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('services.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
