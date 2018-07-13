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
            <h3 class="text-center">お気に入りリスト</h3>
            @include('item.item', ['items' => $items])
            {!! $items->render() !!}
        </div>
        
    </div>
@endsection