<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OurProgramme;
use Illuminate\Http\Request;

class ProgramController extends Controller
{

    public function index(){
        $programmes = OurProgramme::with('city', 'features')->get();
        return view('front.pages.programs.index', compact('programmes'));
    }

    public function show(){
          return view('front.pages.programs.show');
    }

}
