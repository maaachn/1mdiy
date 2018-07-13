@if (Auth::user()->is_wanting($item->id))
    {!! Form::open(['route' => ['user.dont_want', $item->id], 'method' => 'delete']) !!}
        {!! Form::submit('♥', ['class' => 'btn btn-pink300']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.want', $item->id]]) !!}
        {!! Form::submit('♡', ['class' => 'btn btn-white']) !!}
    {!! Form::close() !!}
@endif