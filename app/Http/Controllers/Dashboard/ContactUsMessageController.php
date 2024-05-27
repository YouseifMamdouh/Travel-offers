<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactUsMessage;
use Illuminate\Http\Request;

class ContactUsMessageController extends Controller
{
    public function index()
    {
        $data = ContactUsMessage::get();
        return view('dashboard.contact_messages.index', compact('data'));
    }

    public function show($id)
    {
        $data = ContactUsMessage::find($id);
        return view('dashboard.contact_messages.show', compact('data'));
    }


    public function destroy(Request $request, $id)
    {
        $data = ContactUsMessage::find($id);
        if ($data) {
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('contact_messages.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
