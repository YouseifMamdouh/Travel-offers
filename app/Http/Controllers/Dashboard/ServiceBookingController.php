<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ServiceBook;
use Illuminate\Http\Request;

class ServiceBookingController extends Controller
{
    public function index()
    {
        $data = ServiceBook::get();
        return view('dashboard.bookings.index', compact('data'));
    }

    public function show($id)
    {
        $data = ServiceBook::find($id);
        return view('dashboard.bookings.show', compact('data'));
    }


    public function destroy(Request $request, $id)
    {
        $data = ServiceBook::find($id);
        if ($data) {
            $data->delete();
            return response()->json(['status' => 1, 'msg' => __('messages.success_deleted')]);
        } else {
            return redirect()->route('bookings.index')->with(['error' => __('messages.error_general')]);
        }
    }
}
