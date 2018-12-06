@extends('layout.app')

@section('content')
<h1>Messages</h1>
   @if(count($messages)>0)
     @foreach($messages as $message)
       <ul class="list-group">
         <li class="list-group-item">Name:{{$message->name}}</li>
         <li class="list-group-item">Email:{{$message->email}}</li>
         <li class="list-group-item">Message:{{$message->message}}</li>
         <li class="list-group-item">file:{{$message->cover_image}}</li>
       </ul>

     @endforeach
   @endif
<p><a class="pull-right btn btn-success btn-lg" href="/post" role="button">Create Post</a></p>
@endsection

@section('sidebar')
   
   @parent
 

@endsection