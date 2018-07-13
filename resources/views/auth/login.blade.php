@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-2 col-xs-8">
        <div class="panel panel-default user">
            <div class="panel-heading text-center">ログイン</div>
            <div class="panel-body">
              
                {!! Form::open() !!}
                    <div class="form-group">
                        {!! Form::label('name', 'お名前') !!}
                       <input class="field form-control" name="name" type="text" value="">
                    </div>
                    <br>
                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="text-center">
                        {!! Form::submit('ログイン', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection