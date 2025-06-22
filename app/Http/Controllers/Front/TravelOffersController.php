<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class TravelOffersController extends Controller
{
    public function index()
    {
        return view('front.travel_offers');
    }

    public function show($id)
    {
        $title = "عرض سفر رقم $id";

        $hotel = (object)[
            'title' => 'فندق الريان',
            'country' => (object)['title' => 'مصر'],
            'city' => (object)['title' => 'القاهرة'],
            'address' => 'شارع النيل',
            'rooms' => collect([
                (object)['price' => 150],
                (object)['price' => 200]
            ]),
        ];

        $related_hotels = collect([
            (object)[
                'id' => 1,
                'title' => 'فندق الأندلس',
                'country' => (object)['title' => 'السعودية'],
                'city' => (object)['title' => 'الرياض'],
                'address' => 'شارع العليا',
                'hotelImages' => collect([
                    (object)['image' => 'hotel1.jpg']
                ])
            ],
            (object)[
                'id' => 2,
                'title' => 'فندق النخيل',
                'country' => (object)['title' => 'الإمارات'],
                'city' => (object)['title' => 'دبي'],
                'address' => 'الجميرا',
                'hotelImages' => collect([
                    (object)['image' => 'hotel2.jpg']
                ])
            ]
        ]);

        return view('front.pages.traveloffers.show', compact('id', 'title', 'hotel', 'related_hotels'));
    }
}
