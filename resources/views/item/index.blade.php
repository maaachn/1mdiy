@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="/css/style3.css">
@section('content')

    @include('item.item')

    {!! $items->render() !!}

@endsection

