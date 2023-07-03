<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactUsMessage;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index() {
        return $data = ContactUsMessage::get();
        return view('dashboard.messages.index', compact('data'));
    }
}
