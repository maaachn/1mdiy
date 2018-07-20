@extends('layouts.app')

@section('content')

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