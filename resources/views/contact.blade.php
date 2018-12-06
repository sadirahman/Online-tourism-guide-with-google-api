@extends('layout.app')

@section('content')
<h1>contact</h1>
{!! Form::open(['url' => 'contact/submit','method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
    	{{Form::label('name', 'Name')}}
    	{{Form::text('name','',['class'=>'form-control','placeholder'=> 'Enter name'])}}
    </div>
    <div class="form-group">
    	{{Form::label('email', 'E-Mail Address')}}
    	{{Form::text('email', '',['class'=>'form-control','placeholder'=> 'Enter Email'])}}
    </div>
    <div class="form-group">
    	{{Form::label('message', 'Message')}}
    	{{Form::textarea('message', '',['class'=>'form-control','placeholder'=> 'Enter message'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
        
    </div>
    <div>
    	{{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
<br>
<br>
<br>
<br>
<br>
<br>
@endsection