@extends('layout.app')

@section('content')
<h1>Hotels </h1>
{!! Form::open(['url' => 'hotelform/submit']) !!}
    <div class="form-group">
    	{{Form::label('name', 'Hotel Name')}}
    	{{Form::text('name','',['class'=>'form-control','placeholder'=> 'Enter hotel name'])}}
    </div>
    <div class="form-group">
        {{Form::label('address', 'Hotel Addres')}}
        {{Form::text('address','',['class'=>'form-control','placeholder'=> 'Enter address'])}}
    </div>
      <div class="form-group">
        {{Form::label('mobile', 'mobile no')}}
        {{Form::text('mobile','',['class'=>'form-control','placeholder'=> 'Enter mobile no'])}}
    </div>
    <div class="form-group">
    	{{Form::label('website', 'website Address')}}
    	{{Form::text('website', '',['class'=>'form-control','placeholder'=> 'Enter website'])}}
    </div>
    <div class="form-group">
    	{{Form::label('description', 'Description')}}
    	{{Form::textarea('description', '',['class'=>'form-control','placeholder'=> 'Enter Description'])}}
    </div>
    <div>
    	{{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
<br>
<br>
@endsection