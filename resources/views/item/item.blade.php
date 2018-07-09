@foreach ($items as $item)
    <li class="media">
        
        <div class="status text-center">
            
            <!--<div>-->
            <!--    {!! link_to_route('items.show', $item->name, ['id' => $item->id]) !!}-->
            <!--</div>-->
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <div class="media-left">
                        <img class="media-object img-rounded" src="{{ $item->image_url }}" alt="">
                    </div>
                </div>
                <div class="panel-body">
                    <div>
                        <p>{!! nl2br(e($item->name)) !!}</p>
                        <p>{!! nl2br(e($item->explain)) !!}</p>
                    </div>
                </div>
            </div> 
            <!--<div class="btn-horizontal">-->
            <!--   <div class="btn-group">-->
            <!--    @if (Auth::check())-->
            <!--        @if (Auth::user()->is_wanting($item->id))-->
            <!--            {!! Form::open(['route' => ['user.unwant', $item->id], 'method' => 'delete']) !!}-->
            <!--            {!! Form::submit('unwant', ['class' => 'btn btn-warning btn-xs']) !!}-->
            <!--            {!! Form::close() !!}-->
            <!--        @else-->
            <!--            {!! Form::open(['route' => ['user.want', $item->id]]) !!}-->
            <!--                {!! Form::submit('want to go', ['class' => "btn btn-primary btn-xs"]) !!}-->
            <!--            {!! Form::close() !!}-->
            <!--        @endif-->
            <!--    @endif-->
            <!--   </div>-->
            <!--</div>-->
        </div>
    </li>
@endforeach

