@extends('layout.app')

@section('content')
<h1>about</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
@endsection
@section('sidebar')
   @parent
   <h3>profile</h3>
    <p><img src="design/tmp_photo.jpg" id="me" alt="Yeah, it´s me!" height="80" width="80" /><br>
               <strong>Sadi Rahman</strong><br />
              Age: 22<br />
              B.Sc in software engineer,DIU<br />
              <a href="https://www.facebook.com/Sadi.rahman13">Profile on facebook</a></p>


@endsection