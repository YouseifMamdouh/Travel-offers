<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $car_service = Service::where('type_of', 'car_booking')->first();
//        return $flight_service;
        return view('front.pages.cars.index', compact('car_service'));
    }


}
