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
                            
                         
                         
                         </div>
                        </div>
             
                    </div>
                </div>
                
            </div>    
        </div>
    </div>
    <div class="row">
    
    <h1 class="text-center">空き箱、紙袋、なんかためちゃう……</h1>
    <h1 class="text-center">困ってるなら作っちゃおう！</h1>
    
    <div　class="form-group col-xs-6 col-sm-6">
        <div class="form-hedding text-center">
            <h2>探す</h2>
        </div>
        <div class="form-body text-center">
            <h3>家にある余りモノからアイテムを検索！</h3>
        </div>
        <div class="form-footer text-center">
            <a href="{{ route('materials.get') }}" ><button class="submit">作品一覧へ</button></a>
        </div>
    </div>
    
    
    <div　class="form-group col-xs-6 col-sm-6">
        <div class="form-hedding text-center">
            <h2>作る</h2>
        </div>
        <div class="form-body text-center">
            <h3>実際に作った作品をログインしてシェアしよう！</h3>
        </div>
        <div class="form-footer text-center">
            <a href="{{ route('works.create') }}" ><button class="submit">投稿してみる</button></a>
        </div>
    </div>
</div>    
@endsection

@section('content')
    <div>
  @include('item.material_inc')
    </div>
@endsection

