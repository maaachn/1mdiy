@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-2 col-xs-8">
        <div class="panel panel-default user">
            <div class="panel-heading text-center">会員登録</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'signup.post']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'お名前') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                    <!--<div>-->
                    <!--    <img src="flower.jpg" alt="test" style="height:30; width:100%;">-->
                    <!--</div>-->
                    
                    
                    <br>
                    <div class="text-center">
                        {!! Form::submit('登録する', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection