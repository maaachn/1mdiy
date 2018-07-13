@extends('layouts.app')

@section('content')

<h2 class="text-center">材料から探す</h2>

<div class="row">
    
        <div class="materials-item-wrapper col-xs-6 col-md-4 ">
            <a class="panel-wrapper" href="{{ route('index.bin') }}">
                <div class="panel panel-info">
                    <p>びん</p>
                </div>
            </a> 
        </div>
    
        <div class="materials-item-wrapper col-xs-6 col-md-4">
            <a class="panel-wrapper" href="{{ route('index.box') }}">
            <div class="panel panel-info">
                <p>空き箱</p>
            </div>
            </a>
        </div>
        
        <div class="materials-item-wrapper col-xs-6 col-md-4">
            <a class="panel-wrapper" href="{{ route('index.flower') }}">
            <div class="panel panel-info">
                <p>花</p>
            </div>
            </a>
        </div>
        
        <div class="materials-item-wrapper col-xs-6 col-md-4">
            <a class="panel-wrapper" href="{{ route('index.cardboard') }}">
            <div class="panel panel-info">
                <p>段ボール</p>
            </div>
            </a>
        </div>
        
        <div class="materials-item-wrapper col-xs-6 col-md-4">
            <a class="panel-wrapper" href="{{ route('index.others') }}">
            <div class="panel panel-info">
                <p>その他</p>
            </div>
            </a>
        </div>
        
        <div class="materials-item-wrapper col-xs-6 col-md-4">
            <a class="panel-wrapper" href="{{ route('index.all') }}">
            <div class="panel panel-info">
                <p>全種類から</p>
            </div>
            </a>
        </div>
</div>

@endsection