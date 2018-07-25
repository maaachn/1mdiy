@extends('layouts.app')
 <link rel="stylesheet" href="css/style1.css">
@section('content')

    @include('item.item')

    {!! $items->render() !!}

@endsection

