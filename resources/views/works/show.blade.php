@extends('layouts.app')

@section('content')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>{{ $work->name }}</h1>
                <h2>{{ $work->content }}</h2>
                
                
                
                <div class="row">
                    <div class="panel col-xs-6">
                        <div class="panel-heading">
                            <img src="{{ $work->image_url }}">
                        </div>
                        
                    </div>
                </div>        
                        
                <h2>材料</h2>
                
　                <ul>
　　                <li>{{ $work->material1 }}</li>
　　                <li>{{ $work->material2 }}</li>
　　                <li>{{ $work->material3 }}</li>
　　                <li>{{ $work->material4 }}</li>
　　                <li>{{ $work->material5 }}</li>
　                </ul>
　           　 
　           　 
　                <h2>作り方</h2>
　                
　                <ul>
　　                <li>{{ $work->recipe1 }}</li>
　　                <li>{{ $work->recipe2 }}</li>
　　                <li>{{ $work->recipe3 }}</li>
　　                <li>{{ $work->recipe4 }}</li>
　　                <li>{{ $work->recipe5 }}</li>
　                </ul>
　                
　                <h2>必要な道具</h2>
　                
　                <ul>
　　                <li>{{ $work->tool1 }}</li>
　　                <li>{{ $work->tool2 }}</li>
　　                <li>{{ $work->tool3 }}</li>
　　                <li>{{ $work->tool4 }}</li>
　　                <li>{{ $work->tool5 }}</li>
　                </ul>
                
               
                 
            </div>
        </div>
    </div>
@endsection