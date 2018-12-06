<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
   public function submit(Request $request){
    	$this->validate($request,[
          'title'=>'required',
          'body'=>'required'
          

    	]);

          

    	//Create ne message
    	$post = new Post;
    	$post->title = $request->input('title');
    	$post->body = $request->input('body');
      
    

    	//save massage
    	$post->save();

    	//redirect
    	return redirect('/home')->with('success','Post Upload ');

   
         }

     public function getPosts(){

        $posts=Post::all();
        return view('showpost')->with('posts',$posts);

    }

    
}
