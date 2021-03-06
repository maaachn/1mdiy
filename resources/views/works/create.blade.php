@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="/css/style4.css">
@section('content')
    @if (Auth::user()->id == $user->id)
    
                
    <div class="row col-md-offset-1 col-md-10 ">
    <div class="form-group text-right col-xs-12"> 
    <a class="" href="{{ route('works.index') }}" ><button class="button">自分の作品を見る</button></a> 
    </div>
    <h2>■投稿フォーム■</h2>
        {!! Form::open(['route' => 'works.store']) !!}
        
            <div class="form-group col-xs-7">
                <br><br>
                {!! Form::label('name', '作品名') !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '（例）段ボールプロジェクター']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('name', '概要') !!}
                {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '（例）段ボールで作る簡単・お手軽プロジェクター']) !!}
            </div>
            <div class="form-group col-xs-12">    
                {!! Form::label('name', '画像URL') !!}
                {!! Form::textarea('image_url', old('image_url'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '完成品のイメージURLを貼ってください']) !!}
            </div>
            <div class="col-xs-6">
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
                    {!! Form::label('name', '主な用途') !!}
                    {!! Form::select('u_type', [
                    'アロマ' => 'アロマ',
                    'カバー' => 'カバー・ケース',
                    '照明' => '照明',
                    'インテリア' => 'インテリア',
                    '収納' => '収納',
                    'その他' => 'その他',
                    ], 
                    ['class' => 'form-control', 'rows' => '2']) !!}
                </div>
            </div>    
            <div class="col-xs-7">
                <div class="form-group">    
                    {!! Form::label('name', '材料1') !!}
                    {!! Form::text('material1', old('material1'), ['class' => 'form-control', 'placeholder' => '（例）びん、段ボールなど']) !!}
                    <label for="label1" class="checkbox craftbtn"><span>材料の追加</span><span>材料の追加</span></label>
                    <input type="checkbox" id="label1" class="nini"/>
                    <div class="zairyou">
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
                    </div>
                </div>    
            </div>
            <div class="col-xs-12">
                <div class="form-group">    
                    {!! Form::label('name', '手順1') !!}
                    {!! Form::textarea('recipe1', old('recipe1'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '（例）段ボールを15㎝四方に切ります']) !!}
                    <label for="label2" class="checkbox craftbtn"><span>手順の追加</span><span>手順の追加</span></label>
                    <input type="checkbox" id="label2" class="nini"/>
                    <div class="tejun">
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
                    </div>
                </div>    
            </div>
            <div class="col-xs-7">
                <div class="form-group">    
                    {!! Form::label('name', '必要な道具1') !!}
                    {!! Form::text('tool1', old('tool1'), ['class' => 'form-control', 'placeholder' => '（例）はさみ']) !!}
                    <label for="label3" class="checkbox craftbtn"><span>道具の追加</span><span>道具の追加</span></label>
                    <input type="checkbox" id="label3" class="nini"/>
                    <div class="dougu">
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
                    </div>
                </div>    
            </div>
            <br>
            <br>
            <div class="form-group text-right col-xs-12">    
                {!! Form::submit('作品を投稿する', ['class' => 'submit']) !!}
            </div>
        {!! Form::close() !!}
    </div>
    @else
        @include('auth.login')
    @endif
    
        
@endsection