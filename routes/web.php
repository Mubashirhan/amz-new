<?php

use Illuminate\Support\Facades\Route;


// Routes by Mubashir Khan  //

// index route or home page route
Route::get('/', 'App\Http\Controllers\Amzapp\SiteController@index')->name('index');

//portfolio route
Route::get('/portfolio', 'App\Http\Controllers\Amzapp\SiteController@portfolio')->name('portfolio');

// About us route
Route::get('/aboutus', 'App\Http\Controllers\Amzapp\SiteController@aboutus')->name('aboutus');

// Contact us route
Route::get('/contact', 'App\Http\Controllers\Amzapp\SiteController@contact')->name('contact');
Route::post('/contact', 'App\Http\Controllers\Amzapp\SiteController@_contact')->name('contact');

// Blog Route
Route::get('/blog', 'App\Http\Controllers\Amzapp\SiteController@blog')->name('blog');


//service routes started
Route::group(['prefix' => 'services'], function() {

    // photography route
    Route::get('/amazon-product-photography', 'App\Http\Controllers\Amzapp\ServiceController@photography')->name('photography');

    // optimization route
    Route::get('/amazon-listing-optimization', 'App\Http\Controllers\Amzapp\ServiceController@optimization')->name('optimization');

    // ppc route
    Route::get('/amazon-ppc-service', 'App\Http\Controllers\Amzapp\ServiceController@ppc')->name('ppc');

    // ebc route
    Route::get('/amazon-enhanced-brand-content-service', 'App\Http\Controllers\Amzapp\ServiceController@ebc')->name('ebc');

    // videography route
    Route::get('/amazon-product-video-services', 'App\Http\Controllers\Amzapp\ServiceController@videography')->name('videography');

    // account management route
    Route::get('/amazon-account-management', 'App\Http\Controllers\Amzapp\ServiceController@account_management')->name('account_management');

    // package design route
    Route::get('/product-packaging-design', 'App\Http\Controllers\Amzapp\ServiceController@package_design')->name('package_design');

    // rendering route
    Route::get('/product-3d-rendering', 'App\Http\Controllers\Amzapp\ServiceController@rendering')->name('rendering');

    // ranking route
    Route::get('/amazon-product-ranking', 'App\Http\Controllers\Amzapp\ServiceController@ranking')->name('ranking');

});
//service routes ended


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

