@extends('layout.app')

@section('content')
@if (session('Status'))
<div class="alert alert-success">
  {{session('status')}}
</div>
@endif

<!--/header-bottom--></header>
<!--/header-->

@endsection


