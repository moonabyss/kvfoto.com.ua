<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    /* $images = [
        "http://farm8.staticflickr.com/7067/7038298347_0481d2a7e3_o.jpg",
        "http://farm8.staticflickr.com/7199/7038298927_bfc3993208_b.jpg",
        "http://farm8.staticflickr.com/7199/7038298927_bfc3993208_b.jpg"
    ]; */

    $images = array_diff(scandir('./images'), array('..', '.'));
    return view('gallery', compact('images'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
