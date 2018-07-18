@if (Auth::user()->id == $comment->user_id)
    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
        {!! Form::image('img/trash1.jpeg', 'btnSub', ['class' => 'btn']) !!}
        <!--@if(isset($redirectUrl))-->
        <!--<input type='hidden' name="redirectUrl" value='{{urlencode($redirectUrl)}}'>-->
        <!--@endif-->
    {!! Form::close() !!}
@endif