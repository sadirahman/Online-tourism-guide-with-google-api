<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;


class BookingController extends Controller
{
     public function submit(Request $request){
    	$this->validate($request,[
          'name'=>'required',
          'email'=>'required',
          'mobile'=>'required',
          'checkin'=>'required',
          'checkout'=>'required',
          'rooms'=>'required'

    	]);

    	//Create new message
    	$booking = new Booking;
    	$booking->name = $request->input('name');
    	$booking->email = $request->input('email');
    	$booking->mobile = $request->input('mobile');
    	$booking->checkin = $request->input('checkin');
    	$booking->checkout = $request->input('checkout');
    	$booking->rooms = $request->input('rooms');

    	//save massage
    	$booking->save();

    	//redirect
    	return redirect('/profile')->with('success','Room Booking Confirmed');
    }
}
