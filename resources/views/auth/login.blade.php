@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="css/login_signup.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="row">
    <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form">
			<input type="text" placeholder="Username">
			<input type="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    
    
    
    
    
    
    
    
    
    
    
    <!--<div class="col-xs-offset-2 col-xs-8">-->
    <!--    <div class="panel panel-default user">-->
    <!--        <div class="panel-heading text-center">ログイン</div>-->
    <!--        <div class="panel-body">-->
              
    <!--            {!! Form::open() !!}-->
    <!--                <div class="form-group">-->
    <!--                    {!! Form::label('name', 'お名前') !!}-->
    <!--                   <input class="field form-control" name="name" type="text" value="">-->
    <!--                </div>-->
    <!--                <br>-->
    <!--                <div class="form-group">-->
    <!--                    {!! Form::label('password', 'パスワード') !!}-->
    <!--                    {!! Form::password('password', ['class' => 'form-control']) !!}-->
    <!--                </div>-->
    <!--                <br>-->
    <!--                <div class="text-center">-->
    <!--                    {!! Form::submit('ログイン', ['class' => 'btn btn-success']) !!}-->
    <!--                </div>-->
    <!--            {!! Form::close() !!}-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
</div>
@endsection