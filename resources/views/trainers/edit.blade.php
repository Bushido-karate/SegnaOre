@extends('layout')

@section('title', 'Edit '. $trainer->name. ' '. $trainer->surname)

@section('content')

<h1>Edit {{$trainer->name}} {{$trainer->surname}}</h1>

<form action="{{route('trainers.update', [$trainer])}}" method="POST">
	@csrf
	@method('PUT')

	<label for="name">Name*</label>
	<input 
		type="text"
		name="name"
		id="name"
		value="{{old('name', $trainer->name)}}"
		class="@error('name') error-border @enderror"
	>
	@error('name')
		<div class="error">{{$message}}</div>
	@enderror

	<label for="surname">Surname*</label>
	<input 
		type="text"
		name="surname"
		id="surname"
		value="{{old('surname', $trainer->surname)}}"
		class="@error('surname') error-border @enderror"
	>
	@error('surname')
		<div class="error">{{$message}}</div>
	@enderror

	<button type="submit">Update</button>
</form>

@endsection