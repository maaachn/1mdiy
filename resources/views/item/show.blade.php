@extends('layouts.app')

@section('content')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>{{ $item->name }}</h1>
                <h2>{{ $item->content }}</h2>
                
                
                
                <div class="row">
                    <div class="panel col-xs-6">
                        <div class="panel-heading">
                            <img src="{{ $item->image_url }}">
                        </div>
                        <div class="panel-body">
                            @if(Auth::check())
                                @include('item.want_button', ['item' => $item])
                                @include('item.delete_button', ['item' => $item])
                            @endif
                        </div>
                    </div>
                </div>        
                        
                <h2>材料</h2>
                
　                <ul>
　　                <li>{{ $item->material1 }}</li>
　　                <li>{{ $item->material2 }}</li>
　　                <li>{{ $item->material3 }}</li>
　　                <li>{{ $item->material4 }}</li>
　　                <li>{{ $item->material5 }}</li>
　                </ul>
　           　 
　           　 
　                <h2>作り方</h2>
　                
　                <ul>
　　                <li>{{ $item->recipe1 }}</li>
　　                <li>{{ $item->recipe2 }}</li>
　　                <li>{{ $item->recipe3 }}</li>
　　                <li>{{ $item->recipe4 }}</li>
　　                <li>{{ $item->recipe5 }}</li>
　                </ul>
　                
　                <h2>必要な道具</h2>
　                
　                <ul>
　　                <li>{{ $item->tool1 }}</li>
　　                <li>{{ $item->tool2 }}</li>
　　                <li>{{ $item->tool3 }}</li>
　　                <li>{{ $item->tool4 }}</li>
　　                <li>{{ $item->tool5 }}</li>
　                </ul>
                
               
                 
            </div>
        </div>
    </div>
@endsection


