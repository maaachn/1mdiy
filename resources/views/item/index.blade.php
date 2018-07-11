@extends('layouts.app')

@section('content')
    @include('item.item')
    {!! $items->render() !!}
@endsection

