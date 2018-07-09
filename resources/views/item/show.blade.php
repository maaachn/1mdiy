@extends('layouts.app')

@section('content')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>{{ $item->name }}</h1>
                <h2>{{ $item->explain }}</h2>
                
                <img src="{{ $item->image_url }}">
      
                <div class="buttons text-center">
                            @if (Auth::check())
                                @include('items.want_button', ['item' => $item])
                            @endif
                </div>
                        
                        
                <h2>材料</h2>
                <table border="1">
　                <tr>
　　                <td>{{ $item->material1 }}</td>
　　                <td>{{ $item->material2 }}</td>
　　                <td>{{ $item->material3 }}</td>
　　                <td>{{ $item->material4 }}</td>
　　                <td>{{ $item->material5 }}</td>
　                </tr>
　           　 </table>
　           　 
　                <h2>作り方</h2>
　                <table border="1">
　                <tr>
　　                <td>{{ $item->recipe1 }}</td>
　　                <td>{{ $item->recipe2 }}</td>
　　                <td>{{ $item->recipe3 }}</td>
　　                <td>{{ $item->recipe4 }}</td>
　　                <td>{{ $item->recipe5 }}</td>
　                </tr>
                </table>
               
                 
            </div>
        </div>
    </div>
@endsection


