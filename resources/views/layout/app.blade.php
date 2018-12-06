<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>TurismX</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"></link>
</head>
<body>
	<div id="app">
	@include('inc.navbar')
	<div class="container">
		@if(Request::is('/home'))
		@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
			
			@include('inc.messages')
				@yield('content')

			</div>
			<div class="col-md-4 col-lg-4">
				
				@include('inc.sidebar')
			</div>

		</div>
		


	</div>

	  <script crossorigin="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" src="https://code.jquery.com/jquery-3.1.0.min.js">
        </script>
        {{-- Google map api  --}}

        <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS5ZJpH6PwGg4hoRxIlZJbkWp-0_o0uog&libraries=places">
        </script>

        <script src="{{asset('js/script.js')}}"></script>
        <script src="{{asset('js/ajaxsearch.js')}}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  </div>

<footer id="footer" class="text-center">
<p id="copyright">&copy; 2017 <a href="#">Sadi Rahman</a> | TurismX by <a href="https://www.facebook.com/Sadi.rahman13">SADI</a> based entirely on <a href="http://127.0.0.1:8000/home">TurismX.com</a></p>
		
	</footer>

 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>