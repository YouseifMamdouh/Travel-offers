<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\AirlineController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\CarController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\ServicesController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\HotelController;
use App\Http\Controllers\Front\ProgramController;
use App\Http\Controllers\Front\ServicesMainController;
use App\Http\Controllers\Front\TravelOffersController;
use App\Http\Controllers\Front\serviesmain;

Route::name('user.')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/hotels-form', [HomeController::class, 'about'])->name('hotels.form');

    Route::get('/show-programs/{id}', [ProgramController::class, 'showPrograms'])->name('show.programs');

    Route::get('/airlines', [AirlineController::class, 'index'])->name('Airlines');

    Route::get('/services', [ServicesMainController::class, 'index'])->name('servicesmain');

    Route::get('/travel-offers', [TravelOffersController::class, 'index'])->name('traveloffers');
    Route::get('/traveloffers/{id}', [TravelOffersController::class, 'show'])->name('traveloffers.show');

Route::get('/services-main/{id}', [ServicesMainController::class, 'show'])->name('serviesmain.show');

    Route::resource('/checkout', CheckoutController::class);
    Route::resource('/hotels', HotelController::class);
    Route::resource('/cars', CarController::class);
    Route::resource('/programs', ProgramController::class);
    Route::resource('/blogs', BlogController::class);
});

Route::group(['namespace' => 'App\Http\Controllers\Front'], function () {
    Route::post('/book-service/{id}', 'ServicesController@bookService')->name('book.service');
    Route::get('/service/{id}', 'ServicesController@show')->name('service.show');
    Route::post('/post-contact', 'HomeController@postContact')->name('post.contact');
});
