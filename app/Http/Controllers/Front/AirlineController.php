<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class AirlineController extends Controller
{
    public function index()
    {
        return view('front.airlines');
    }
}
