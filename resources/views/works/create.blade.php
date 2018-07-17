@extends('layouts.app')

@section('content')
    @if (Auth::user()->id == $user->id)
        {!! Form::open(['route' => 'works.store']) !!}
            <div class="form-group">
                {!! Form::label('name', '作品名') !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', '概要') !!}
                {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '画像URL') !!}
                {!! Form::textarea('image_url', old('image_url'), ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '主な材料') !!}
                {!! Form::select('m_type', [
                'びん' => 'びん',
                '空き箱' => '空き箱',
                '花' => '花',
                '段ボール' => '段ボール',
                'その他' => 'その他'
                ], 
                ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '材料1') !!}
                {!! Form::text('material1', old('material1'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '材料2（任意）') !!}
                {!! Form::text('material2', old('material2'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '材料3（任意）') !!}
                {!! Form::text('material3', old('material3'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '材料4（任意）') !!}
                {!! Form::text('material4', old('material3'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '材料5（任意）') !!}
                {!! Form::text('material5', old('material3'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '手順1') !!}
                {!! Form::textarea('recipe1', old('recipe1'), ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '手順2（任意）') !!}
                {!! Form::textarea('recipe2', old('recipe2'), ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '手順3（任意）') !!}
                {!! Form::textarea('recipe3', old('recipe3'), ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '手順4（任意）') !!}
                {!! Form::textarea('recipe4', old('recipe4'), ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '手順5（任意）') !!}
                {!! Form::textarea('recipe5', old('recipe5'), ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '必要な道具1') !!}
                {!! Form::text('tool1', old('tool1'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '必要な道具2（任意）') !!}
                {!! Form::text('tool2', old('tool2'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '必要な道具3（任意）') !!}
                {!! Form::text('tool3', old('tool3'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '必要な道具4（任意）') !!}
                {!! Form::text('tool4', old('tool4'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">    
                {!! Form::label('name', '必要な道具5（任意）') !!}
                {!! Form::text('tool5', old('tool5'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">    
                {!! Form::submit('Create', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
        {!! Form::close() !!}
    @endif
    
         <div class="form-group">
            @include('item.item', ['items' => $items])
        </div>
@endsection