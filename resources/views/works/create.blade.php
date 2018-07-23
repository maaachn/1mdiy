@extends('layouts.app')

@section('content')
   <a href="{{ route('works.index') }}" class="btn btn-primary btn-lg">自分の投稿作品を見る</a>
    @if (Auth::user()->id == $user->id)
    <div class="row">
        {!! Form::open(['route' => 'works.store']) !!}
            <div class="form-group col-xs-6">
                {!! Form::label('name', '作品名') !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '（例）段ボールプロジェクター']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('name', '概要') !!}
                {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '（例）段ボールで作る簡単・お手軽プロジェクター']) !!}
            </div>
            <div class="form-group col-xs-12">    
                {!! Form::label('name', '画像URL') !!}
                {!! Form::textarea('image_url', old('image_url'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '完成品のイメージURLを貼ってください（なければ適当な文字列でOK）']) !!}
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
            <div class="col-xs-6">
                <div class="form-group">    
                    {!! Form::label('name', '材料1') !!}
                    {!! Form::text('material1', old('material1'), ['class' => 'form-control', 'placeholder' => '（例）びん、段ボールなど']) !!}
                </div>
                <div class="hidden_zairyou">
                    <label for="label1" class="checkbox">材料を追加する</label>
                    <input type="checkbox" id="label1"/>
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
                </div>
                <div class="hidden_tejun">
                    <label for="label2" class="checkbox">材料を追加する</label>
                    <input type="checkbox" id="label2"/>
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
            <div class="col-xs-6">
                <div class="form-group">    
                    {!! Form::label('name', '必要な道具1') !!}
                    {!! Form::text('tool1', old('tool1'), ['class' => 'form-control', 'placeholder' => '（例）はさみ']) !!}
                </div>
                <div class="hidden_douguu">
                    <label for="label3" class="checkbox">材料を追加する</label>
                    <input type="checkbox" id="label3"/>
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
            <div class="form-group">    
                {!! Form::submit('Create', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
        {!! Form::close() !!}
    </div>
    @else
        @include('auth.login')
    @endif
    
        
@endsection