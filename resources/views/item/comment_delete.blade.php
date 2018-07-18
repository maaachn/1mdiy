@if (Auth::user()->id == $comment->user_id)
    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
        {!! Form::submit('🚮', ['class' => 'btn danger']) !!}
        <!--@if(isset($redirectUrl))-->
        <!--<input type='hidden' name="redirectUrl" value='{{urlencode($redirectUrl)}}'>-->
        <!--@endif-->
    {!! Form::close() !!}
@endif