@extends('layouts.app')
 <link rel="stylesheet" href="css/style2.css">
@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="text-center">
                <div class="cover-contents row col-xs-12">
                    <div class="main-movie clearfix col-xs-12">
                        <video class="col-xs-12" poster="" id="bgvid" playsinline autoplay muted loop>

                        <source src="toppagetest.mp4" type="video/mp4">
                        </video>
                       
                    </div>
                        
                        <div id="auth" class="overlay">
                            <div class="title">
                                <!--<p>-クラフトマン-</p>-->
                                <div class="logo">
                                    <img src="logo53.png">
                                </div>
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
                         
                         <div id="auth3" class="overlay col-xs-offset-10 col-xs-2">
                             <div class="auth-button">    
                                @if (!Auth::check())
                                    <a href="{{ route('signup.get') }}" class="btn start2-btn btn-lg"><img src="signupimage.png"><br>新規登録</a>
                                    <br>
                                    <br>
                                    <a href="{{ route('login.post') }}" class="btn start2-btn btn-lg"><img src="loginimage2.png"><br>ログイン</a>
                                    <br>
                                    <br>
                                    <div class="text">
                                        <p>☆お気に入りや投稿が<br>できるようになるよ☆</p>
                                    </div>
                                @else 
                                    <a href="{{ route('logout.get') }}" class="btn start2-btn btn-lg">ログアウト</a>
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

@section('content')
    <div>
  @include('item.material_inc')
    </div>
@endsection

