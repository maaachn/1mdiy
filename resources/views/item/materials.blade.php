@extends('layouts.app')

@section('content')

<h2 class="text-center">材料から探す</h2>


<div class="row">
        <div class="">
            <div class="materials-item-wrapper col-xs-4">
                <a class="" href="{{ route('index.bin') }}">
                    <div class="bin">
                    </div>
                </a> 
            </div>
        </div>
        
        <div class="">
            <div class="materials-item-wrapper col-xs-4">
                <a class="" href="{{ route('index.box') }}">
                    <div class="box">
                    </div>
                </a> 
            </div>
        </div>
        
        <div class="">
            <div class="materials-item-wrapper col-xs-4">
                <a class="" href="{{ route('index.flower') }}">
                    <div class="flower">
                    </div>
                </a> 
            </div>
        </div>
        
        <div class="">
            <div class="materials-item-wrapper col-xs-4">
                <a class="" href="{{ route('index.cardboard') }}">
                    <div class="cardboard">
                    </div>
                </a> 
            </div>
        </div>
        
        <div class="">
            <div class="materials-item-wrapper col-xs-4">
                <a class="" href="{{ route('index.others') }}">
                    <div class="others">
                    </div>
                </a> 
            </div>
        </div>
        
        <div class="">
            <div class="materials-item-wrapper col-xs-4">
                <a class="" href="{{ route('index.all') }}">
                    <div class="all">
                    </div>
                </a> 
            </div>
        </div>
</div>

@endsection