<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BlogsController extends Controller
{
    public function index()
    {
        $data = Blog::select('id', 'title','sub_title', 'description', 'image', 'created_at')->get();
        return view('dashboard.blogs.index', compact('data'));
    }


    public function create()
    {
        return view('dashboard.blogs.create');
    }
    public function show($id)
    {
        $data = Blog::find($id);
        return view('dashboard.blogs.show', compact('data'));
    }

    public function store(BlogRequest $request)
    {
//        return  $request;
//        try {
            $filename = "";
            if ($request->hasFile('image')) {
                $filename = \General::uploadImage('blogs', $request->image);
            }
//            return $filename;
            DB::beginTransaction();
            Blog::create([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'created_at' => $request->created_at,
                'image' => $filename,
            ]);

            DB::commit();
            return redirect()->route('blogs.index')->with(['success' => __('messages.success_add')]);

//        } catch (\Exception $ex) {
//            DB::rollback();
//            return redirect()->back()->with(['error' => __('messages.error_general')]);
//        }
    }

    public function edit($id)
    {
        $data = Blog::find($id);
//        return date('m/d/Y', strtotime($data->created_at));
        if ($data) {
            return view('dashboard.blogs.edit', compact('data'));

        } else {
            return redirect()->route('blogs.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(BlogRequest $request, $id)
    {
        try {
//            return $request;
            $data = Blog::find($id);
            DB::beginTransaction();

            $filename = "";
            if ($request->hasFile('image')) {
                if (File::exists(public_path('uploads/blogs/' . $data->image))) {
                    File::delete(public_path('uploads/blogs/' . $data->image));
                }

                $filename = \General::uploadImage('blogs', $request->image);
                $data->update(['image' => $filename]);
            }
            if ($request->created_at != null) {
                $data->update(['created_at' => $request->created_at]);
            }

            $data->update($request->except('id', '_token', 'image', 'created_at'));
            DB::commit();
            return redirect()->route('blogs.index')->with(['success' => __('messages.success_updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $data = Blog::find($id);
        if ($data) {
            if (File::exists(public_path('uploads/blogs/' . $data->image))) {
                File::delete(public_path('uploads/blogs/' . $data->image));
            }
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('blogs.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
