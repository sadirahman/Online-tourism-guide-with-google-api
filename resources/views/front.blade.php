@extends('layouts.master')

@section('content')

<div class="container">
   <center><h1>google map hotel place</h1></center>
	<div id="map">

		
	</div>
	</br>
     {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('Division', 'Division')}}
      {{Form::select('district', ['L' => 'Dhaka', 'S' => 'komilla'], 'S')}}
    </div>
    <div class="form-group">
      {{Form::label('district', 'district')}}
      {{Form::text('distric', '',['class'=>'form-control','placeholder'=> 'Enter district'])}}
    </div>
    
    <div>
      {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
</br>
	
</div>

@endsection