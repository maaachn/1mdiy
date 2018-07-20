@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="css/login_signup.css">
<script src="/login_signup.js"></script>

@section('content')
<div class="row">
	<div class="logsign">
		<h1>Signup</h1>
		
	{!!Form::open(['route' => 'signup.post']) !!}
		<form class="form">
			<input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
		<br>
			<input type="password" name="password" placeholder="Password" value="">
		<br>
		    <input type="password" name="password_confirmation" placeholder="Password(Confirm)" value="">
	    <br>	    
			<a href="{{route('signup.post')}}"><button type="submit" id="login-button">Signup</button></a>
		</form>
	{!! Form::close() !!}
	
</div>	
@endsection

