<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::select('id', 'image', 'email','address','phone')->get();
        return view('dashboard.contacts.index', compact('data'));
    }


    public function edit($id)
    {
        $data = Contact::find($id);
        if ($data) {
            return view('dashboard.contacts.edit', compact('data'));

        } else {
            return redirect()->route('aboutus.index')->with(['error' => __('messages.error_general')]);
        }
    }

    public function update(ContactRequest $request, $id)
    {
//        try {
//            return $request;
            $data = Contact::find($id);
            DB::beginTransaction();

            $filename = "";
            if ($request->hasFile('image')) {
                if (File::exists(public_path('uploads/contacts/' . $data->image))) {
                    File::delete(public_path('uploads/contacts/' . $data->image));
                }

                $filename = \General::uploadImage('contacts', $request->image);
                $data->update(['image' => $filename]);
            }

            $data->update($request->except('id', '_token', 'image'));
            DB::commit();
            return redirect()->route('contacts.index')->with(['success' => __('messages.success_updated')]);

//        } catch (\Exception $ex) {
//            DB::rollback();
//            return redirect()->back()->with(['error' => __('messages.error_general')]);
//        }
    }
}
