@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="/css/style4.css">
@section('content')
<div class="row">
    
    <h1 class="text-center">アプリの説明ーメッセージー</h1>
    
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