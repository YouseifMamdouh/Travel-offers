<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::paginate(6);
        return view('front.pages.blog.index', compact('blogs'));
    }

    public function show($id){
        $blog = Blog::find($id);
          return view('front.pages.blog.show', compact('blog'));
    }
}
