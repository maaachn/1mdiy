@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="/css/login_signup.css">


@section('content')
<div class="row">

	<div class="logsign">
		<h1>Welcome</h1>
	
	<form class="form col-xs-5">	
	{!!Form::open(['route' => 'login.post']) !!}
		
			<input type="text" name="name" placeholder="Name" value="">
		<br>
			<input type="password" name="password" placeholder="Password" value="">
		<br>	
			<a href="{{route('login.post')}}"><button type="submit" id="login-button">Login</button></a>
	
	{!! Form::close() !!}
	</form>
	
	</div>

</div>	
@endsection