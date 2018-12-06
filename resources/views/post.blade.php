@extends('layout.app')

@section('content')
<h1>Post</h1>
{!! Form::open(['url' => 'post/submit']) !!}
    <div class="form-group">
    	{{Form::label('title', 'Title')}}
    	{{Form::text('title','',['class'=>'form-control','placeholder'=> 'Enter Title'])}}
    </div>
   
    <div class="form-group">
    	{{Form::label('body', 'Body')}}
    	{{Form::textarea('body', '',['class'=>'form-control','placeholder'=> 'Enter Text'])}}
    </div>
    <div>
    	{{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection