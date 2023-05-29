<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BannersController extends Controller
{
    public function index()
    {
        $data = Banner::select('id', 'title', 'image')->get();
        return view('dashboard.banners.index', compact('data'));
    }

    public function store(BannerRequest $request)
    {
//        return  $request;
        try {
            $filename = "";
            if ($request->hasFile('image')) {
                $filename = \General::uploadImage('banners', $request->image);
            }
            DB::beginTransaction();
            Banner::create([
                'title' => $request->title,
                'image' => $filename,
            ]);

            DB::commit();
            return redirect()->route('banners.index')->with(['success' => __('messages.success_add')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function edit($id)
    {
        $data = Banner::find($id);
        if ($data) {
            return view('dashboard.banners.edit', compact('data'));

        } else {
            return redirect()->route('banners.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(BannerRequest $request, $id)
    {
        try {
//            return $request;
            $data = Banner::find($id);
            DB::beginTransaction();

            $filename = "";
            if ($request->hasFile('image')) {
                if (File::exists(public_path('uploads/banners/' . $data->image))) {
                    File::delete(public_path('uploads/banners/' . $data->image));
                }

                $filename = \General::uploadImage('banners', $request->image);
                $data->update(['image' => $filename]);
            }

            $data->update($request->except('id', '_token', 'image'));
            DB::commit();
            return redirect()->route('banners.index')->with(['success' => __('messages.success_updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = Banner::find($id);
        if ($data) {
            if (File::exists(public_path('uploads/banners/' . $data->image))) {
                File::delete(public_path('uploads/banners/' . $data->image));
            }
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('banners.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
