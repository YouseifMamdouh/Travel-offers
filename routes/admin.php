<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['namespace' => 'App\Http\Controllers\Dashboard',
    'middleware' => ['checkAdmin']], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::post('get-cities-from-country/{id}', 'CitiesController@getCitiesFromCountry')->name('get.country.cities');

    Route::group(['prefix' => 'admins'], function () {
        Route::get('/', 'AdminsController@index')->name('admins.index');
        Route::get('/create', 'AdminsController@create')->name('admins.create');
        Route::post('/store', 'AdminsController@store')->name('admins.store');
        Route::get('/edit/{id}', 'AdminsController@edit')->name('admins.edit');
        Route::post('/update/{id}', 'AdminsController@update')->name('admins.update');
        Route::delete('delete/{id}', 'AdminsController@destroy')->name('admins.destroy');
    });

    Route::group(['prefix' => 'cities'], function () {
        Route::get('/', 'CitiesController@index')->name('cities.index');
        Route::get('/show/{id}', 'CitiesController@show')->name('cities.show');
        Route::get('/create', 'CitiesController@create')->name('cities.create');
        Route::post('/store', 'CitiesController@store')->name('cities.store');
        Route::get('/edit/{id}', 'CitiesController@edit')->name('cities.edit');
        Route::post('/update/{id}', 'CitiesController@update')->name('cities.update');
        Route::delete('delete/{id}', 'CitiesController@destroy')->name('cities.destroy');
    });

    Route::group(['prefix' => 'countries'], function () {
        Route::get('/', 'CountriesController@index')->name('countries.index');
        Route::get('/show/{id}', 'CountriesController@show')->name('countries.show');
        Route::get('/create', 'CountriesController@create')->name('countries.create');
        Route::post('/store', 'CountriesController@store')->name('countries.store');
        Route::get('/edit/{id}', 'CountriesController@edit')->name('countries.edit');
        Route::post('/update/{id}', 'CountriesController@update')->name('countries.update');
        Route::delete('delete/{id}', 'CountriesController@destroy')->name('countries.destroy');
    });

    Route::group(['prefix' => 'contact_messages'], function () {
        Route::get('/', 'ContactUsMessageController@index')->name('contact_messages.index');
        Route::get('/show/{id}', 'ContactUsMessageController@show')->name('contact_messages.show');
        Route::delete('delete/{id}', 'ContactUsMessageController@destroy')->name('contact_messages.destroy');
    });
    Route::group(['prefix' => 'bookings'], function () {
        Route::get('/', 'ServiceBookingController@index')->name('bookings.index');
        Route::get('/show/{id}', 'ServiceBookingController@show')->name('bookings.show');
        Route::delete('delete/{id}', 'ServiceBookingController@destroy')->name('bookings.destroy');
    });

    Route::group(['prefix' => 'banners'], function () {
        Route::get('/', 'BannersController@index')->name('banners.index');
        Route::get('/create', 'BannersController@create')->name('banners.create');
        Route::get('/show/{id}', 'BannersController@show')->name('banners.show');
        Route::post('/store', 'BannersController@store')->name('banners.store');
        Route::get('/edit/{id}', 'BannersController@edit')->name('banners.edit');
        Route::post('/update/{id}', 'BannersController@update')->name('banners.update');
        Route::delete('delete/{id}', 'BannersController@destroy')->name('banners.destroy');
    });

    Route::group(['prefix' => 'about-us'], function () {
        Route::get('/', 'AboutUsController@index')->name('aboutus.index');
        Route::get('/show/{id}', 'AboutUsController@show')->name('aboutus.show');
        Route::post('/store', 'AboutUsController@store')->name('aboutus.store');
        Route::get('/edit/{id}', 'AboutUsController@edit')->name('aboutus.edit');
        Route::post('/update/{id}', 'AboutUsController@update')->name('aboutus.update');
        Route::delete('delete/{id}', 'AboutUsController@destroy')->name('aboutus.destroy');
    });
    Route::group(['prefix' => 'aboutus_details'], function () {
        Route::get('/', 'AboutUsDetailsController@index')->name('aboutus_details.index');
        Route::get('/edit/{id}', 'AboutUsDetailsController@edit')->name('aboutus_details.edit');
        Route::get('/show/{id}', 'AboutUsDetailsController@show')->name('aboutus_details.show');
        Route::post('/update/{id}', 'AboutUsDetailsController@update')->name('aboutus_details.update');
    });

    Route::group(['prefix' => 'contact-us'], function () {
        Route::get('/', 'ContactController@index')->name('contacts.index');
        Route::get('/show/{id}', 'ContactController@show')->name('contacts.show');
        Route::post('/store', 'ContactController@store')->name('contacts.store');
        Route::get('/edit/{id}', 'ContactController@edit')->name('contacts.edit');
        Route::post('/update/{id}', 'ContactController@update')->name('contacts.update');
        Route::delete('delete/{id}', 'ContactController@destroy')->name('contacts.destroy');
    });

    Route::group(['prefix' => 'hotels'], function () {
        Route::get('/', 'HotelsController@index')->name('hotels.index');
        Route::get('/create', 'HotelsController@create')->name('hotels.create');
        Route::get('show/{id}', 'HotelsController@show')->name('hotels.show');
        Route::get('show-rooms/{id}', 'HotelsController@showRooms')->name('hotels.show_rooms');
        Route::post('/store', 'HotelsController@store')->name('hotels.store');
        Route::get('/edit/{id}', 'HotelsController@edit')->name('hotels.edit');
        Route::post('/update/{id}', 'HotelsController@update')->name('hotels.update');
        Route::delete('delete/{id}', 'HotelsController@destroy')->name('hotels.destroy');

        Route::get('add-images/{id}', 'HotelsController@addImages')->name('hotels.addImages');
        Route::post('post-images/{id}', 'HotelsController@postImages')->name('hotels.postImages');
        Route::delete('delete-images/{id}', 'HotelsController@deleteImage')->name('hotels.deleteImage');
    });




    Route::group(['prefix' => 'rooms'], function () {
        Route::get('/', 'RoomsController@index')->name('rooms.index');
        Route::get('/create', 'RoomsController@create')->name('rooms.create');
        Route::get('/show/{id}', 'RoomsController@show')->name('rooms.show');
        Route::post('/store', 'RoomsController@store')->name('rooms.store');
        Route::get('/edit/{id}', 'RoomsController@edit')->name('rooms.edit');
        Route::post('/update/{id}', 'RoomsController@update')->name('rooms.update');
        Route::delete('delete/{id}', 'RoomsController@destroy')->name('rooms.destroy');

        Route::get('add-images/{id}', 'RoomsController@addImages')->name('rooms.addImages');
        Route::post('post-images/{id}', 'RoomsController@postImages')->name('rooms.postImages');
        Route::delete('delete-images/{id}', 'RoomsController@deleteImage')->name('rooms.deleteImage');
    });



    Route::group(['prefix' => 'blogs'], function () {
        Route::get('/', 'BlogsController@index')->name('blogs.index');
        Route::get('/create', 'BlogsController@create')->name('blogs.create');
        Route::get('/show/{id}', 'BlogsController@show')->name('blogs.show');
        Route::post('/store', 'BlogsController@store')->name('blogs.store');
        Route::get('/edit/{id}', 'BlogsController@edit')->name('blogs.edit');
        Route::post('/update/{id}', 'BlogsController@update')->name('blogs.update');
        Route::delete('delete/{id}', 'BlogsController@destroy')->name('blogs.destroy');
    });


    Route::group(['prefix' => 'services'], function () {
        Route::get('/', 'ServicesController@index')->name('services.index');
        Route::get('/create', 'ServicesController@create')->name('services.create');
        Route::get('/show/{id}', 'ServicesController@show')->name('services.show');
        Route::post('/store', 'ServicesController@store')->name('services.store');
        Route::get('/edit/{id}', 'ServicesController@edit')->name('services.edit');
        Route::post('/update/{id}', 'ServicesController@update')->name('services.update');
        Route::delete('delete/{id}', 'ServicesController@destroy')->name('services.destroy');
    });
    Route::group(['prefix' => 'programmes'], function () {
        Route::get('/', 'ProgrammesController@index')->name('programmes.index');
        Route::get('/create', 'ProgrammesController@create')->name('programmes.create');
        Route::get('show/{id}', 'ProgrammesController@show')->name('programmes.show');
        Route::post('/store', 'ProgrammesController@store')->name('programmes.store');
        Route::get('/edit/{id}', 'ProgrammesController@edit')->name('programmes.edit');
        Route::post('/update/{id}', 'ProgrammesController@update')->name('programmes.update');
        Route::delete('delete/{id}', 'ProgrammesController@destroy')->name('programmes.destroy');

        Route::get('add-images/{id}', 'ProgrammesController@addImages')->name('programmes.addImages');
        Route::post('post-images/{id}', 'ProgrammesController@postImages')->name('programmes.postImages');
        Route::delete('delete-images/{id}', 'ProgrammesController@deleteImage')->name('programmes.deleteImage');
    });



    Route::group(['prefix' => 'features'], function () {
        Route::get('/', 'FeaturesController@index')->name('features.index');
        Route::get('/create', 'FeaturesController@create')->name('features.create');
        Route::post('/store', 'FeaturesController@store')->name('features.store');
        Route::get('/edit/{id}', 'FeaturesController@edit')->name('features.edit');
        Route::post('/update/{id}', 'FeaturesController@update')->name('features.update');
        Route::delete('delete/{id}', 'FeaturesController@destroy')->name('features.destroy');
    });

//    Route::group(['prefix' => 'messages'], function () {
//        Route::get('/', 'MessagesController@index')->name('messages.index');
//    });

















//
//
//    Route::group(['prefix' => 'terms'], function () {
//        Route::get('/', 'TermsController@index')->name('terms.index')->middleware('permission:terms.list');
//        Route::get('/show/{id}', 'TermsController@show')->name('terms.show')->middleware('permission:terms.show');
//
//        Route::get('/edit/{id}', 'TermsController@edit')->name('terms.edit')->middleware('permission:terms.edit');
//        Route::post('/update/{id}', 'TermsController@update')->name('terms.update')->middleware('permission:terms.edit');
//    });
//
//
//    Route::group(['prefix' => 'web-locale'], function () {
//        Route::get('/', 'WebLocaleController@index')->name('web.locale.index')->middleware('permission:locale.list');
//        Route::post('/store', 'WebLocaleController@store')->name('web.locale.store')->middleware('permission:locale.add');
//        Route::get('/edit/{id}', 'WebLocaleController@edit')->name('web.locale.edit')->middleware('permission:locale.edit');
//        Route::post('/update/{id}', 'WebLocaleController@update')->name('web.locale.update')->middleware('permission:locale.edit');
//        Route::delete('delete/{id}', 'WebLocaleController@destroy')->name('web.locale.destroy')->middleware('permission:locale.delete');
//    });
//    Route::group(['prefix' => 'moshaf'], function () {
//        Route::get('/', 'MoshafsController@index')->name('moshaf.index')->middleware('permission:moshaf.list');
//        Route::get('/show/{id}', 'MoshafsController@show')->name('moshaf.show')->middleware('permission:moshaf.show');
//        Route::post('/store', 'MoshafsController@store')->name('moshaf.store')->middleware('permission:moshaf.add');
//        Route::get('/edit/{id}', 'MoshafsController@edit')->name('moshaf.edit')->middleware('permission:moshaf.edit');
//        Route::post('/update/{id}', 'MoshafsController@update')->name('moshaf.update')->middleware('permission:moshaf.edit');
//        Route::delete('delete/{id}', 'MoshafsController@destroy')->name('moshaf.destroy')->middleware('permission:moshaf.delete');
//    });
//
//    Route::group(['prefix' => 'moshaf-images'], function () {
//        Route::get('/create/{moshaf_id}', 'MoshafImagesController@create')->name('moshaf.images.create')->middleware('permission:moshaf_image.add');
//        Route::post('/store/{moshaf_id}', 'MoshafImagesController@store')->name('moshaf.images.store')->middleware('permission:moshaf_image.add');
//        Route::delete('/delete/{id}', 'MoshafImagesController@destroy')->name('moshaf.images.destroy')->middleware('permission:moshaf.edit');
//    });
//    Route::group(['prefix' => 'admins'], function () {
//        Route::get('/', 'AdminsController@index')->name('admins.index')->middleware('permission:user.list');
////        Route::get('/show/{id}', 'AdminsController@show')->name('admins.show');
//        Route::post('/store/', 'AdminsController@store')->name('admins.store')->middleware('permission:user.add');
//        Route::get('/edit/{id}', 'AdminsController@edit')->name('admins.edit')->middleware('permission:user.edit');
//        Route::post('/update/{id}', 'AdminsController@update')->name('admins.update')->middleware('permission:user.edit');
//        Route::delete('/{id}', 'AdminsController@destroy')->name('admins.destroy')->middleware('permission:user.delete');
//    });

});


require __DIR__.'/auth.php';
