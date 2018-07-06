@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>素敵なモノと出会う場所</h1>
                    <a href="#" class="btn btn-success btn-lg">Get started</a>
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">Signup</a>
                    <a href="{{ route('login.post') }}" class="btn btn-success btn-lg">Login</a>
                @else 
                    <a href="{{ route('logout.get') }}" class="btn btn-success btn-lg">Logout</a>
                @endif
            </div>
        </div>
    </div>
@endsection

