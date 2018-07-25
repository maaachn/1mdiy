@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="/css/style3.css">
<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />

@section('content')
<div class="itemshow">
<div class="cover">
        <div class="cover-contents">
            <h1>{{ $item->name }}</h1>
            <h2>{{ $item->content }}</h2>
            <div class="row set">
                <div class="panel panel-default col-xs-6">
                    <div class="panel-heading">
                        <img class="showimg" src="{{ secure_asset($item->image_url) }}">
                        <div class="text-center middle">
                        @if(Auth::check())
                            @include('item.want_button', ['item' => $item])
                            @include('item.delete_button', ['item' => $item])
                        @endif
                        </div>
                    </div>
                       
                    <div>    
                        <div class="box">
                            <h2>材料</h2>
                             <ul>
                                <li>{{ $item->material1 }}</li>
                                <li>{{ $item->material2 }}</li>
                                <li>{{ $item->material3 }}</li>
                                <li>{{ $item->material4 }}</li>
                                <li>{{ $item->material5 }}</li>
                              </ul>
                        </div>
                        <br>
                        <div class="box">
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
                <h2>作り方</h2>
    <div class="row">
        <div class="media col-xs-6">    
            <div class="status text-center">
                <div class="form-group col-xs-4">

                    @if(isset($item) && $item->recipe1 != '')
                        @if(isset($process) && $process->process1 != '')
                        <div class="form-heading text-center"><img src='{{ secure_asset($process->process1) }}' alt=''></div>
                        @elseif(isset($process) && $process->process1 == '')
                        <div class="form-heading text-center"></div>
                        @else
                        <div class="form-heading text-center"><img src="/img/no_image.png" alt=''></div>
                        @endif
                        
                        <div class="form-body text-center"><p>1.{{ $item->recipe1 }}</p></div>
                    @endif
                </div>
                <div class="form-group col-xs-4">
                @if(isset($item) && $item->recipe2 != '')
                   @if(isset($process) && $process->process2 != '')
                    <div class="form-heading text-center"><img src='{{ secure_asset($process->process2) }}' alt=''></div>
                    @elseif(isset($process) && $process->process2 == '')
                    <div class="form-heading text-center"></div>
                    @else
                    <div class="form-heading text-center"><img src="/img/no_image.png" alt=''></div>
                    @endif
                    
                    <div class="form-body text-center"><p>2.{{ $item->recipe2 }}</p></div>
                @endif
                </div>
                <div class="form-group col-xs-4">
                @if(isset($item) && $item->recipe3 != '')
                   @if(isset($process) && $process->process3 != '')
                    <div class="form-heading text-center"><img src='{{ secure_asset($process->process3) }}' alt=''></div>
                    @elseif(isset($process) && $process->process3 == '')
                    <div class="form-heading text-center"></div>
                    @else
                    <div class="form-heading text-center"><img src="/img/no_image.png" alt=''></div>
                    @endif
                    
                    <div class="form-body text-center"><p>3.{{ $item->recipe3 }}</p></div>
                @endif
                </div>
                <div class="form-group col-xs-4">
                @if(isset($item) && $item->recipe4 != '')
                    @if(isset($process) && $process->process4 != '')
                    <div class="form-heading text-center"><img src='{{ secure_asset($process->process4) }}' alt='test'></div>
                    @elseif(isset($process) && $process->process4 == '')
                    <div class="form-heading text-center"></div>
                    @else
                    <div class="form-heading text-center"><img src="/img/no_image.png" alt=''></div>
                    @endif
                    
                    <div class="form-body text-center"><p>4.{{ $item->recipe4 }}</p></div>
                @endif
                </div>
                <div class="form-group col-xs-4">
                @if(isset($item) && $item->recipe5 != '')
                    @if(isset($process) && $process->process5 != '')
                    <div class="form-heading text-center"><img src='{{ secure_asset($process->process5) }}' alt='test'></div>
                    @elseif(isset($process) && $process->process5 == '')
                    <div class="form-heading text-center"></div>
                    @else
                   <div class="form-heading text-center"><img src="/img/no_image.png" alt=''></div>
                    @endif
                    
                    <div class="form-body text-center"><p>5.{{ $item->recipe5 }}</p></div>
                @endif
                </div>

                   
            </div>
        </div>
</div>
                
                <h2>口コミ一覧</h2>
                    <div class="text-center">
                        @include('item.comment', ['comments' => $comments])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection