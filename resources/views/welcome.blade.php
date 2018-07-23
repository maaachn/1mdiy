@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="text-center">
                <div class="cover-contents">
                    <div class="main-movie clearfix col-xs-12">
                        <video class="col-xs-12" poster="" id="bgvid" playsinline autoplay muted loop>
                     
                        <source src="toppagetest.mp4" type="video/mp4">
                        
                        </video>
                       
                    </div>
                        
                        <div id="auth" class="overlay">
                            <div class="title">
                                <p>-クラフトマン-</p>
                                <h1>Craftsman</h1>
                            </div>
                            <div class="subtitle">
                                <p>家にあるもので職人になれちゃう！？</p>
                                <a href="{{ route('materials.get') }}" class="btn btn-warning btn-lg">☛今すぐ始める！
                                </a>
                                <br>
                                <br>
                            
                                <div class="auth-button">    
                                @if (!Auth::check())
                                    <p>登録・ログインはこちら</p>
                                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">新規登録</a>
                                    <a href="{{ route('login.post') }}" class="btn btn-primary btn-lg">ログイン</a>
                                @else 
                                    <a href="{{ route('logout.get') }}" class="btn btn-danger btn-lg">ログアウト</a>
                                @endif
                                </div>
                            </div>
                        </div>
             
                    </div>
                </div>
                
            </div>    
        </div>
    </div>
@endsection

