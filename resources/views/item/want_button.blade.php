@if (Auth::user()->is_wanting($item->id))
    {!! Form::open(['route' => ['user.dont_want', $item->id], 'method' => 'delete']) !!}
        {!! Form::submit('dont Want', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.want', $item->id]]) !!}
        {!! Form::submit('Want it', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endif