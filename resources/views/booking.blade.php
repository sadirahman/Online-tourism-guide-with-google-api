@extends('layout.app')

@section('content')
<h1>Hotel Booking</h1>
{!! Form::open(['url' => 'booking/submit']) !!}
    <div class="form-group">
    	{{Form::label('name', 'Name')}}
    	{{Form::text('name','',['class'=>'form-control','placeholder'=> 'Enter name'])}}
    </div>
    <div class="form-group">
    	{{Form::label('email', 'E-Mail Address')}}
    	{{Form::text('email', '',['class'=>'form-control','placeholder'=> 'Enter Email'])}}
    </div>
    <div class="form-group">
    	{{Form::label('mobile', 'mobile')}}
    	{{Form::text('mobile', '',['class'=>'form-control','placeholder'=> 'Enter mobile no'])}}
    </div>
     <div class="form-group">
    	{{Form::label('checkin', 'Check in')}}
    	{{Form::text('checkin', '',['class'=>'form-control','placeholder'=> 'Enter your date'])}}
    </div>
       <div class="form-group">
    	{{Form::label('checkout', 'Check out')}}
    	{{Form::text('checkout', '',['class'=>'form-control','placeholder'=> 'Enter your date'])}}
    </div>
    <div class="form-group">
    	{{Form::label('rooms', 'No of Rooms')}}
    	{{Form::text('rooms', '',['class'=>'form-control','placeholder'=> 'Enter your rooms'])}}
    </div>

    <div>
    	{{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}





@endsection