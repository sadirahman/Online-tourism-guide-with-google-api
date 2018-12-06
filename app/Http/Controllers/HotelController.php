<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request,[
          'name'=>'required',
          'address'=>'required',
          'mobile'=>'required',
          'website'=>'required'

    	]);

    	//Create new message
    	$hotel = new Hotel;
    	$hotel->name = $request->input('hotelname');
    	$hotel->address = $request->input('address');
    	$hotel->mobile = $request->input('mobile');
    	$hotel->website = $request->input('website');
    	$hotel->description = $request->input('Description');

    	//save massage
    	$hotel->save();

    	//redirect
    	return redirect('/home')->with('success','Message Sent');
    }

}
