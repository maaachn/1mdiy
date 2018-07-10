@extends('layouts.app')

@section('content')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>{{ $item->name }}</h1>
                <h2>{{ $item->content }}</h2>
                
                <img src="{{ $item->image_url }}">
      
                <div class="buttons text-center">
                            
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
                
               
                 
            </div>
        </div>
    </div>
@endsection


