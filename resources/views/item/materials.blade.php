@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="/css/style1.css">
@section('content')

<h2 class="text-center head-line">材料から探す</h2>


<div class="row">

        <div class="materials-item-wrapper col-xs-4">
            <a class="" href="{{ route('index.bin') }}">
                <div class="bin">
                    <img src="material_items/bin.jpg">
                    <div class="hidmess">
                        <div class="caption">Bin</div>
                    </div>
                </div>
            </a> 
        </div>

        
        <div class="materials-item-wrapper col-xs-4">
            <a class="" href="{{ route('index.box') }}">
                <div class="box">
                    <img src="material_items/box3.jpg">
                    <div class="hidmess">
                        <div class="caption">Box</div>
                    </div>
                </div>
            </a> 
        </div>
        
        <div class="materials-item-wrapper col-xs-4">
            <a class="" href="{{ route('index.flower') }}">
                <div class="flower">
                    <img src="material_items/flower1.jpg">
                    <div class="hidmess">
                        <div class="caption">Flower</div>
                    </div>
                </div>
            </a> 
        </div>
        
        <div class="materials-item-wrapper col-xs-4">
            <a class="" href="{{ route('index.cardboard') }}">
                <div class="cardboard">
                    <img src="material_items/cardboard3.jpg">
                    <div class="hidmess">
                        <div class="caption">Cardboard</div>
                    </div>
                </div>
            </a> 
        </div>
        
        <div class="materials-item-wrapper col-xs-4">
            <a class="" href="{{ route('index.others') }}">
                <div class="others">
                    <img src="material_items/all3.jpg">
                    <div class="hidmess">
                        <div class="caption">Others</div>
                    </div>
                </div>
            </a> 
        </div>
        
        <div class="materials-item-wrapper col-xs-4">
            <a class="" href="{{ route('index.all') }}">
                <div class="all">
                    <img src="material_items/all1.jpg">
                    <div class="hidmess">
                        <div class="caption">All</div>
                    </div>
                </div>
            </a> 
        </div>
</div>


        


@endsection