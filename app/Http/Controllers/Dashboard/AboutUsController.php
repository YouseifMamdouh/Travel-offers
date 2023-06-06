<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsRequest;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    public function index()
    {
        $data = AboutUs::select('id', 'title', 'image', 'description')->get();
        return view('dashboard.aboutus.index', compact('data'));
    }

    public function show($id)
    {
        $data = AboutUs::find($id);
        return view('dashboard.aboutus.show', compact('data'));
    }
    public function store(AboutUsRequest $request)
    {
//        return  $request;
        try {
            $filename = "";
            if ($request->hasFile('image')) {
                $filename = \General::uploadImage('aboutus', $request->image);
            }
            DB::beginTransaction();
            AboutUs::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
            ]);

            DB::commit();
            return redirect()->route('aboutus.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function edit($id)
    {
        $data = AboutUs::find($id);
        if ($data) {
            return view('dashboard.aboutus.edit', compact('data'));

        } else {
            return redirect()->route('aboutus.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(AboutUsRequest $request, $id)
    {
        try {
//            return $request;
            $data = AboutUs::find($id);
            DB::beginTransaction();

            $filename = "";
            if ($request->hasFile('image')) {
                if (File::exists(public_path('uploads/aboutus/' . $data->image))) {
                    File::delete(public_path('uploads/aboutus/' . $data->image));
                }

                $filename = \General::uploadImage('aboutus', $request->image);
                $data->update(['image' => $filename]);
            }

            $data->update($request->except('id', '_token', 'image'));
            DB::commit();
            return redirect()->route('aboutus.index')->with(['success' => __('messages.success_updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = AboutUs::find($id);
        if ($data) {
            if (File::exists(public_path('uploads/aboutus/' . $data->image))) {
                File::delete(public_path('uploads/aboutus/' . $data->image));
            }
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('aboutus.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
