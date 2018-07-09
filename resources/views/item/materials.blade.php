@extends('layouts.app')

@section('content')

<h2 class="text-center">材料から探す</h2>

<div class="row">
    
        <div class="materials-item-wrapper col-xs-6 col-md-4 ">
            <a class="panel-wrapper" href="/">
                <div class="panel panel-info">
                    <p>bin</p>
                </div>
            </a> 
        </div>
    
        <div class="materials-item-wrapper col-xs-6 col-md-4">
            <div class="panel panel-info">
                <p>can</p>
            </div>
        </div>
        <div class="materials-item-wrapper col-xs-6 col-md-4">
            <div class="panel panel-info">
                <p>paper-bag</p>
            </div>
        </div>
        <div class="materials-item-wrapper col-xs-6 col-md-4">
            <div class="panel panel-info">
                <p>box</p>
            </div>
        </div>
</div>

@endsection