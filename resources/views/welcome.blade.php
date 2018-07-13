@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="text-center">
                <div class="cover-contents">
                    <h1>素敵なモノと出会う場所</h1>
                        
                    @if (!Auth::check())
                        <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">新規登録</a>
                        <a href="{{ route('login.post') }}" class="btn btn-success btn-lg">ログイン</a>
                    @else 
                        <a href="{{ route('logout.get') }}" class="btn btn-success btn-lg">ログアウト</a>
                    @endif
                </div>
            </div>    
        </div>
    </div>
@endsection

