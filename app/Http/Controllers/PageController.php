<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use app\Mailfile;

class PageController extends Controller
{
    public function getHome(){
    	return view('home');
    }

     public function getAbout(){
    	return view('about');
    }

     public function getContact(){
    	return view('contact');
    }

     public function getContactf(){
        return view('contactf');
    }

     public function getOurservice(){
    	return view('ourservice');
    }

     public function getInfrastructure(){
    	return view('Infrastructure');
    }

     public function getHotel(){
    	return view('hotel');
    }

     public function getBangladesh(){
    	return view('Bangladesh');
    }

     public function getTurism(){
    	return view('TurismX');
    }

    public function getPost(){
        return view('post');
    }

    public function getBooking(){
        return view('booking');
    }

     public function getHotelform(){
        return view('hotelform');
    }

    public function postcontact(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'message'=>'min:3'


        ]);
            $data =array(
            'email'=>$request->email,
            'bodyMassege'=>$request->message,
            'subject'=>$request->subject,
            'cover_image'=>$request->cover_image


         );

       

        Mail ::send('emails.contract',function($message)use($data){
            $message->to($data['email']);
            $message->subject($data['subject']);
            $message->from('sadi33@gmail.com');
            $message->attach($data['cover_image']->getRealpath(),array(
                'as'=>'cover_image.'.$data['cover_image']->getClientOriginalExtension(),
                'mime'=>$data['cover_image']->getMimeType()


            )
        );



        });

        session::flash('success',"Congrats! mail sent successfully");
        return Redirect::to ('/contactf');


    }


}
