<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\OurProgramme;
use Illuminate\Http\Request;

class ProgramController extends Controller
{

    public function index(){
        $programmes = OurProgramme::with('city', 'features')->paginate(6);
        return view('front.pages.programs.index', compact('programmes'));
    }

    public function show(){
          return view('front.pages.programs.show');
    }

    public function showPrograms($id) {
//        return redirect()->back();
        $country = Country::find($id);
        $programmes = OurProgramme::where('country_id', $id)->paginate(6);
        return view('front.pages.programs.inside_country', compact('country', 'programmes'));
    }

}
