@extends('layouts.app')

@section('content')
<div class="row">
        <aside class="col-xs-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                  <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->name, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-10">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">お気に入り</a></li>
                <li role="presentation" class="{{ Request::is('works/index/id=' .$user->id) ? 'active' : '' }}"><a href="{{ route('works.index', ['id' => $user->id]) }}">投稿作品 </a></li>
            </ul>
            @include('item.item', ['items' => $items])
            {!! $items->render() !!}
        </div>
        
    </div>
@endsection

