@extends('layouts.app')

@section('content')

<h2 class="text-center">材料から探す</h2>

<div class="row">
        <div class="bin">
            <div class="materials-item-wrapper col-xs-6 col-md-4 ">
                <a class="panel-wrapper" href="{{ route('index.bin') }}">
                    <div class="panel panel-info bin">
                        <p>びん</p>
                    </div>
                </a> 
            </div>
        </div>
        
        <div class="box">
            <div class="materials-item-wrapper col-xs-6 col-md-4">
                <a class="panel-wrapper" href="{{ route('index.box') }}">
                <div class="panel panel-info">
                    <p>空き箱</p>
                </div>
                </a>
            </div>
        </div>
        
        <div class="flower">
            <div class="materials-item-wrapper col-xs-6 col-md-4">
                <a class="panel-wrapper" href="{{ route('index.flower') }}">
                <div class="panel panel-info">
                    <p>お花</p>
                </div>
                </a>
            </div>
        </div>
        
        <div class="cardboard">
            <div class="materials-item-wrapper col-xs-6 col-md-4">
                <a class="panel-wrapper" href="{{ route('index.cardboard') }}">
                <div class="panel panel-info">
                    <p>段ボール</p>
                </div>
                </a>
            </div>
        </div>
        
        <div class="others">
            <div class="materials-item-wrapper col-xs-6 col-md-4">
                <a class="panel-wrapper" href="{{ route('index.others') }}">
                <div class="panel panel-info">
                    <p>その他</p>
                </div>
                </a>
            </div>
        </div>
        
        <div class="all">
            <div class="materials-item-wrapper col-xs-6 col-md-4">
                <a class="panel-wrapper" href="{{ route('index.all') }}">
                <div class="panel panel-info">
                    <p>全種類から</p>
                </div>
                </a>
            </div>
        </div>
</div>

<h2 class="text-center">用途から探す</h2>

<div class="row">
        <div class="aroma">
            <div class="usages-item-wrapper col-xs-6 col-md-4 ">
                <a class="panel-wrapper" href="{{ route('index.aroma') }}">
                    <div class="panel panel-info bin">
                        <p>アロマ</p>
                    </div>
                </a> 
            </div>
        </div>
        
        <div class="covers">
            <div class="usages-item-wrapper col-xs-6 col-md-4">
                <a class="panel-wrapper" href="{{ route('index.cover') }}">
                <div class="panel panel-info">
                    <p>カバー・ケース</p>
                </div>
                </a>
            </div>
        </div>
        
        <div class="light">
            <div class="usages-item-wrapper col-xs-6 col-md-4">
                <a class="panel-wrapper" href="{{ route('index.light') }}">
                <div class="panel panel-info">
                    <p>照明</p>
                </div>
                </a>
            </div>
        </div>
        
        <div class="interior">
            <div class="usages-item-wrapper col-xs-6 col-md-4">
                <a class="panel-wrapper" href="{{ route('index.interior') }}">
                <div class="panel panel-info">
                    <p>インテリア</p>
                </div>
                </a>
            </div>
        </div>
        
        <div class="storage">
            <div class="usages-item-wrapper col-xs-6 col-md-4">
                <a class="panel-wrapper" href="{{ route('index.storage') }}">
                <div class="panel panel-info">
                    <p>収納</p>
                </div>
                </a>
            </div>
        </div>
        
        <div class="u_others">
            <div class="usages-item-wrapper col-xs-6 col-md-4">
                <a class="panel-wrapper" href="{{ route('index.u_others') }}">
                <div class="panel panel-info">
                    <p>その他</p>
                </div>
                </a>
            </div>
        </div>
        
        
</div>

@endsection