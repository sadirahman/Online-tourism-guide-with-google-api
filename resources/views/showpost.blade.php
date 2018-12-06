@extends('layout.app')

@section('content')
<h1>Post</h1>
   @if(count($posts)>0)
     @foreach($posts as $post)
       <ul class="list-group">
         <li class="list-group-item"i>Title:{{$post->title}}</li>
         <li class="list-group-item">Body:<br>{{$post->body}}</li>
       
       </ul>

     @endforeach
   @endif

@endsection

@section('sidebar')
   
   @parent
 

@endsection