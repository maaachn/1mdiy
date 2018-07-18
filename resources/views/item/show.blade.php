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

<div class="row">

<div class="media">    
        <div class="status text-center">
               
            <div class="form-group col-xs-4">
                    <div class="form-heading text-center"><img src='{{ secure_asset($process->process1) }}' alt=''></div>
                    <div class="form-body text-center"><p>{{ $item->recipe1 }}</p></div>
            </div>
             <div class="form-group col-xs-4">
                    <div class="form-heading text-center"><img src='{{ secure_asset($process->process2) }}' alt=''></div>
                    <div class="form-body text-center"><p>{{ $item->recipe2 }}</p></div>
            </div>
             <div class="form-group col-xs-4">
                    <div class="form-heading text-center"><img src='{{ secure_asset($process->process3) }}' alt=''></div>
                    <div class="form-body text-center"><p>{{ $item->recipe3 }}</p></div>
            </div>
             <div class="form-group col-xs-4">
                    <div class="form-heading text-center"><img src='{{ secure_asset($process->process4) }}' alt=''></div>
                    <div class="form-body text-center"><p>{{ $item->recipe4 }}</p></div>
            </div>
             <div class="form-group col-xs-4">
                    <div class="form-heading text-center"><img src='{{ secure_asset($process->process5) }}' alt=''></div>
                    <div class="form-body text-center"><p>{{ $item->recipe5 }}</p></div>
            </div>
        </div>
    
</div>
</div>


</div>　         
　                
　                <h2>必要な道具</h2>
　                
　                <ul>
　　                <li>{{ $item->tool1 }}</li>
　　                <li>{{ $item->tool2 }}</li>
　　                <li>{{ $item->tool3 }}</li>
　　                <li>{{ $item->tool4 }}</li>
　　                <li>{{ $item->tool5 }}</li>
　                </ul>
　                
　                <h2>口コミ一覧</h2>
                
                    <div class="text-center">
                        @include('item.comment', ['comments' => $comments])
                    </div>
                
                </div>

            </div>
        </div>
    </div>
@endsection


