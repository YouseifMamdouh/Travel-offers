<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsDetailsRequest;
use App\Models\AboutUsDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsDetailsController extends Controller
{
    public function index()
    {
        $data = AboutUsDetail::first();
        return view('dashboard.aboutus_details.index', compact('data'));
    }

    public function edit($id)
    {
        $data = AboutUsDetail::first();
        return view('dashboard.aboutus_details.edit', compact('data'));
    }
    public function show($id)
    {
        $data = AboutUsDetail::first();
        return view('dashboard.aboutus_details.show', compact('data'));
    }

    public function update(AboutUsDetailsRequest $request, $id)
    {
        try {
            $data = AboutUsDetail::first();
            DB::beginTransaction();

            $data->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
            DB::commit();

            return redirect()->route('aboutus_details.show', 1)->with(['success' => __('messages.success_updated')]);
//            return $request;


        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with(['error' => __('messages.error_general')]);
        }


    }

}
