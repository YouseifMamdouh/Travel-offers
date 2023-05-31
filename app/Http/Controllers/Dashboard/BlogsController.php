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
//        for($i=0; $i<10; $i++) {
//            $crea = Blog::create([
//                'title' => 'Twice profit than before you. ',
//                'sub_title' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.",
//                'description' => "<p>Hola Espana! The vibrant country of Spain beckons for an adventure that lets us explore the sights 'n' sounds of this remarkable destination. Visit architechturally brilliant and culture-rich cities of Madrid, Seville, Barcelona, Cordoba, Valencia on this tour and have the experience of a lifetime!<\/p><h3>a road rip along spain's mediterranean coast<\/h3><p>A road trip along Spain\u2019s Mediterranean coast is a guarantee of sunshine, lovely beaches, and plenty of destinations with things to see and do. We suggest following the coastline at your own pace, without a fixed timetable and with room to improvise.We choose Barcelona as a starting point because it\u2019s a huge transport hub. You might fancy heading north for a couple of days to see the Costa Brava (Girona): beautiful bays like Roses, coves where the pine trees grow right to the shoreline, large seaside resorts and the fishing villages that once inspired Dal\u00ed.<\/p><h3>the history of spain's great civilisations<\/h3><p>In Spain, you can get a history lesson while you enjoy your holiday. Let us show you places to visit where you can discover milestones of human development, like the earliest humans, the birth of art, and the power of the great civilisations.<\/p><h3>foodies, prepare to be enthused<\/h3><p>From tasty tapas to superb seafood and traditional roasts, food in Spain is all about making the most of the best local produce.Whether you're on a city break in Barcelona or Madrid, or you've plumped for a countryside or coastal retreat, Spanish food is full of flavour and character.<\/p>",
//                'created_at' => date(now()),
//                'image' => 'BUDGE4go67yICPdqq66isiLFaaaGieKG74oDkdhh.jpg',
//            ]);
//        }

        $data = Blog::select('id', 'title','sub_title', 'description', 'image', 'created_at')->get();
        return view('dashboard.blogs.index', compact('data'));
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
