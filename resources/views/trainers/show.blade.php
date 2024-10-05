@extends('layout')

@section('title', 'Trainer')

@section('content')

<h1>Profile</h1>

<div>
	<div>
		<p>Name:</p>
		<p>{{$trainer->name}}</p>
	</div>
	<div>
		<p>Surname:</p>
		<p>{{$trainer->surname}}</p>
	</div>
	<div>
		<p>Role:</p>
		<p>{{$trainer->role}}</p>
	</div>
	<div>
		<p>Default Payment:</p>
		<p>{{$trainer->payment}}</p>
	</div>


</div>

@endsection