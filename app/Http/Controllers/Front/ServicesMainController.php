<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesMainController extends Controller
{
    public function index()
    {
        return view('front.serviesmain');
    }

    public function show($id)
    {
        return view('front.pages.serviesmain.show', compact('id'));
    }
}
