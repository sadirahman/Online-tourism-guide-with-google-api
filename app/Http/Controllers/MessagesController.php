<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Massage;
use App\post;
use Image;


class MessagesController extends Controller
{
     public function submit(Request $request){
    	$this->validate($request,[
          'name'=>'required',
          'email'=>'required',
          'cover_image'=>'image|nullable|max:1999'

    	]);

         
      if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }




    	//Create ne message
    	$message = new Massage;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');
        $message->cover_image=$fileNameToStore;

    	//save massage
    	$message->save();

    	//redirect
    	return redirect('/home')->with('success','Message Sent');
    }

      public function getMessages(){
        
        $messages=Massage::all();
        return view('messages')->with('messages',$messages);
    }
  
    
 }
