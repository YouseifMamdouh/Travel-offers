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
    'middleware' => 'auth'], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::group(['prefix' => 'cities'], function () {
        Route::get('/', 'CitiesController@index')->name('cities.index');
        Route::post('/store', 'CitiesController@store')->name('cities.store');
        Route::get('/edit/{id}', 'CitiesController@edit')->name('cities.edit');
        Route::post('/update/{id}', 'CitiesController@update')->name('cities.update');
        Route::delete('delete/{id}', 'CitiesController@destroy')->name('cities.destroy');
    });

    Route::group(['prefix' => 'banners'], function () {
        Route::get('/', 'BannersController@index')->name('banners.index');
        Route::post('/store', 'BannersController@store')->name('banners.store');
        Route::get('/edit/{id}', 'BannersController@edit')->name('banners.edit');
        Route::post('/update/{id}', 'BannersController@update')->name('banners.update');
        Route::delete('delete/{id}', 'BannersController@destroy')->name('banners.destroy');
    });

    Route::group(['prefix' => 'about-us'], function () {
        Route::get('/', 'AboutUsController@index')->name('aboutus.index');
        Route::post('/store', 'AboutUsController@store')->name('aboutus.store');
        Route::get('/edit/{id}', 'AboutUsController@edit')->name('aboutus.edit');
        Route::post('/update/{id}', 'AboutUsController@update')->name('aboutus.update');
        Route::delete('delete/{id}', 'AboutUsController@destroy')->name('aboutus.destroy');
    });

    Route::group(['prefix' => 'hotels'], function () {
        Route::get('/', 'HotelsController@index')->name('hotels.index');
        Route::get('/{id}', 'HotelsController@show')->name('hotels.show');
        Route::post('/store', 'HotelsController@store')->name('hotels.store');
        Route::get('/edit/{id}', 'HotelsController@edit')->name('hotels.edit');
        Route::post('/update/{id}', 'HotelsController@update')->name('hotels.update');
        Route::delete('delete/{id}', 'HotelsController@destroy')->name('hotels.destroy');

        Route::get('add-images/{id}', 'HotelsController@addImages')->name('hotels.addImages');
        Route::post('post-images/{id}', 'HotelsController@postImages')->name('hotels.postImages');
        Route::post('delete-images/{image-id}', 'HotelsController@deleteImage')->name('hotels.deleteImage');
    });
























    Route::group(['prefix' => 'terms'], function () {
        Route::get('/', 'TermsController@index')->name('terms.index')->middleware('permission:terms.list');
        Route::get('/show/{id}', 'TermsController@show')->name('terms.show')->middleware('permission:terms.show');

        Route::get('/edit/{id}', 'TermsController@edit')->name('terms.edit')->middleware('permission:terms.edit');
        Route::post('/update/{id}', 'TermsController@update')->name('terms.update')->middleware('permission:terms.edit');
    });


    Route::group(['prefix' => 'web-locale'], function () {
        Route::get('/', 'WebLocaleController@index')->name('web.locale.index')->middleware('permission:locale.list');
        Route::post('/store', 'WebLocaleController@store')->name('web.locale.store')->middleware('permission:locale.add');
        Route::get('/edit/{id}', 'WebLocaleController@edit')->name('web.locale.edit')->middleware('permission:locale.edit');
        Route::post('/update/{id}', 'WebLocaleController@update')->name('web.locale.update')->middleware('permission:locale.edit');
        Route::delete('delete/{id}', 'WebLocaleController@destroy')->name('web.locale.destroy')->middleware('permission:locale.delete');
    });
    Route::group(['prefix' => 'moshaf'], function () {
        Route::get('/', 'MoshafsController@index')->name('moshaf.index')->middleware('permission:moshaf.list');
        Route::get('/show/{id}', 'MoshafsController@show')->name('moshaf.show')->middleware('permission:moshaf.show');
        Route::post('/store', 'MoshafsController@store')->name('moshaf.store')->middleware('permission:moshaf.add');
        Route::get('/edit/{id}', 'MoshafsController@edit')->name('moshaf.edit')->middleware('permission:moshaf.edit');
        Route::post('/update/{id}', 'MoshafsController@update')->name('moshaf.update')->middleware('permission:moshaf.edit');
        Route::delete('delete/{id}', 'MoshafsController@destroy')->name('moshaf.destroy')->middleware('permission:moshaf.delete');
    });

    Route::group(['prefix' => 'moshaf-images'], function () {
        Route::get('/create/{moshaf_id}', 'MoshafImagesController@create')->name('moshaf.images.create')->middleware('permission:moshaf_image.add');
        Route::post('/store/{moshaf_id}', 'MoshafImagesController@store')->name('moshaf.images.store')->middleware('permission:moshaf_image.add');
        Route::delete('/delete/{id}', 'MoshafImagesController@destroy')->name('moshaf.images.destroy')->middleware('permission:moshaf.edit');
    });
    Route::group(['prefix' => 'admins'], function () {
        Route::get('/', 'AdminsController@index')->name('admins.index')->middleware('permission:user.list');
//        Route::get('/show/{id}', 'AdminsController@show')->name('admins.show');
        Route::post('/store/', 'AdminsController@store')->name('admins.store')->middleware('permission:user.add');
        Route::get('/edit/{id}', 'AdminsController@edit')->name('admins.edit')->middleware('permission:user.edit');
        Route::post('/update/{id}', 'AdminsController@update')->name('admins.update')->middleware('permission:user.edit');
        Route::delete('/{id}', 'AdminsController@destroy')->name('admins.destroy')->middleware('permission:user.delete');
    });

});


require __DIR__.'/auth.php';
