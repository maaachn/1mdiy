@extends('layouts.app')

@section('content')
    @include('item.item')
    {!! $item->render() !!}
@endsection