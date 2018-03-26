@extends('adminlte::page')

@section('title', 'Reservation System')

@section('content_header')
@stop

<style>
	body{
		overflow: hidden;
	}
</style>

@section('content')
<body>	
	<br><br>
    <div class="container-fluid" style="text-align: center;">
		<img src="/bg.jpg" style="margin-top: -5%" height="55%" width="100%"><br>
		<h1><strong>Welcome {{ Auth::user()->user_name}} !</strong></h1>
		<em><strong><h3 style>Let's get Started</h3></strong></em><br>
		<a href="/set-reservation" class="btn btn-primary">Set Reservation</a>
	</div>
	<br><div><br></div>
</body>
@stop