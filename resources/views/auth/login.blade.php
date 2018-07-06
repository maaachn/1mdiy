@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">ログイン</div>
            <div class="panel-body">
              
                {!! Form::open() !!}
                    <div class="form-group">
                        {!! Form::label('name', 'ネーム') !!}
                       <input class="field form-control" name="name" type="text" value="">
                    </div>
                
                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="text-right">
                        {!! Form::submit('ログイン', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection