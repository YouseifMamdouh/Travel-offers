<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        return view('front.pages.hotels.index');
    }

    public function show($id){
          return view('front.pages.hotels.show');
    }

    public function applyForm($id){
          return view('front.pages.hotels.form');
    }
}
