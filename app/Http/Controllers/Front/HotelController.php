<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Hotel;
use App\Models\RoomImage;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::with('hotelImages')->paginate(9);

        return view('front.pages.hotels.index', compact('hotels'));
    }

    public function show($id)
    {
        $hotel = Hotel::with(['city', 'hotelImages' => function($q) {
            $q->limit(5);
        }, 'rooms' => function($q) {
            $q->with('roomImages', 'features');
        }])->find($id);
        $all_features_in_hotel = Feature::whereHas('rooms', function ($q) use ($id) {
            $q->where('hotel_id', $id);
        })->get();
        $images = RoomImage::whereHas('room', function ($q) use ($id) {
            $q->where('hotel_id',$id);
        })->get();
        $related_hotels = Hotel::with(['city', 'hotelImages', 'rooms' => function($q) {
            $q->with('roomImages', 'features');
        }])->where('id', '!=', $id)->get();
//        return $hotel->rooms;
        return view('front.pages.hotels.show', compact('hotel', 'all_features_in_hotel', 'images', 'related_hotels'));
    }

    public function applyForm($id)
    {
        return view('front.pages.hotels.form');
    }
}
