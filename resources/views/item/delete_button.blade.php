@if (Auth::check())
@if (Auth::user()->id == $item->user_id)
    {!! Form::open(['route' => ['works.destroy', $item->id], 'method' => 'delete']) !!}
        {!! Form::image('img/trashbox.png', 'btnSub', ['class' => 'btn']) !!}
        <!--@if(isset($redirectUrl))-->
        <!--<input type='hidden' name="redirectUrl" value='{{urlencode($redirectUrl)}}'>-->
        <!--@endif-->
    {!! Form::close() !!}
@endif
@endif