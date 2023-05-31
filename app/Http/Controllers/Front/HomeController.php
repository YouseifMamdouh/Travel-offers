<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostContactRequest;
use App\Models\AboutUs;
use App\Models\AboutUsDetail;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\ContactUsMessage;

class HomeController extends Controller
{
    public function index(){
        $banners = Banner::get();
        $blogs = Blog::get();
        return view('front.index', compact('banners', 'blogs'));
    }

    public function contact(){
        $contact = Contact::first();
         return view('front.contact', compact('contact'));
    }
    public function postContact(PostContactRequest $request) {
        $message = ContactUsMessage::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        if ($message) {
            return redirect()->back()->with(['success' => 'Message Submitted Successfully .. we will Contact with you ']);
        } else {
            return redirect()->back()->with(['error' => 'Some Error Happened, Please Try Again Later']);
        }
    }
    public function about(){
        $images = AboutUs::get();
        $details = AboutUsDetail::first();
//        return $images;
         return view('front.about', compact('images', 'details'));
    }
}
