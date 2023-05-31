<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Http\Requests\FrontServiceRequest;
use App\Models\FlightBook;
use App\Models\Service;
use App\Models\ServiceBook;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $flight_service = Service::where('type_of', 'flight_booking')->first();
//        return $flight_service;
        return view('front.pages.service.index', compact('flight_service'));
    }

    public function show($id){
        $service = Service::find($id);
//        return $flight_service;
        return view('front.pages.service.index', compact('service'));
    }

    public function bookService(FrontServiceRequest $request, $id) {
//        return $request;
        $book = ServiceBook::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'service_id' => $id,
        ]);
        if ($book) {
            return redirect()->back()->with(['success' => 'Reservation Submitted Successfully .. we will Contact with you ']);
        } else {
            return redirect()->back()->with(['error' => 'Some Error Happened, Please Try Again Later']);
        }
    }


}
