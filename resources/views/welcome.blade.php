@extends('layouts.app')
 <link rel="stylesheet" href="css/style2.css">
 <link rel="stylesheet" href="css/style1.css">
@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="text-center">
                <div class="cover-contents">
                    <div class="main-movie clearfix col-xs-12">
                        <video class="col-xs-12" poster="" id="bgvid" playsinline autoplay muted loop>
<!--動画変えるならここ-->
                        <source src="toppagetest.mp4" type="video/mp4">
                        </video>
                       
                    </div>
                        
                        <div id="auth" class="overlay">
                            <div class="title">
                                <p>-クラフトマン-</p>
                                <h1>Craftsman</h1>
                            </div>
                        </div>
                            
                         <div id="auth2" class="overlay">
                             <div class="subtitle">
                                <a href="{{ route('materials.get') }}" class="btn start-btn btn-lg">☞作品一覧を見る</a>
                                <a href="{{ route('works.create') }}" class="btn start-btn btn-lg">☞作品を投稿する</a>
                                <br>
                                <br>
                             </div>
                         </div>
                         
                         <div id="auth3" class="overlay">
                             <div class="auth-button">    
                                @if (!Auth::check())
                                    <a href="{{ route('signup.get') }}" class="btn start2-btn btn-lg"><img src="signupimage.png"><br>新規登録</a>
                                    <br>
                                    <br>
                                    <a href="{{ route('login.post') }}" class="btn start2-btn btn-lg"><img src="loginimage2.png"><br>ログイン</a>
                                    <br>
                                    <br>
                                @else 
                                    <a href="{{ route('logout.get') }}" class="btn start2-btn btn-lg">ログアウト</a>
                                @endif
                             <div class="text">
                                <p>☆お気に入りや投稿が<br>できるようになるよ☆</p>
                             </div>
                         </div>
                         </div>
                        </div>
             
                    </div>
                </div>
                
            </div>    
        </div>
    </div>
@endsection

@section('content')
    <div>
  @include('item.materials')
    </div>
@endsection

