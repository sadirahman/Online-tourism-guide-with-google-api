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


Route::get('/', 'PageController@getTurism' );

Route::get('/Bangladesh', 'PageController@getBangladesh' );

Route::get('/hotel', 'PageController@getHotel' );

Route::get('/infrastructure', 'PageController@getInfrastructure' );

Route::get('/ourservice', 'PageController@getOurservice' );

Route::get('/about', 'PageController@getAbout' );

Route::get('/contact', 'PageController@getContact' );
Route::get('/contactf', 'PageController@getContactf' );

Route::get('/messages', 'MessagesController@getMessages' );

Route::post('/contact/submit', 'MessagesController@submit' );
Route::post('contactf', 'PageController@postcontact' );

Route::get('/profile','UserController@profile');

Route::post('/profile','UserController@update_avatar');

Route::post('/post/submit', 'PostsController@submit' );

Route::post('/booking/submit', 'BookingController@Submit' );

Route::get('/showpost', 'PostsController@getPosts' );

Route::get('/post', 'PageController@getPost' );

Route::get('/booking', 'PageController@getBooking' );

Route::get('/hotelform','PageController@getHotelform');

Route::post('/hotelform/submit', 'HotelController@submit' );

Route::get('/front',function(){
     
     return view('front');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
