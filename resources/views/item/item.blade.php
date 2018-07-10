@foreach ($items as $item)
    <li class="media">
        
        <div class="status text-center">
            
           
            <a class="panel panel-default col-xs-6 col-md-4" href="{{route('show.get',['id' => $item->id])}}">
                <div class="panel-heading text-center">
                    <div class="media-left">
                        <img class="media-object img-rounded" src="{{ $item->image_url }}" alt="">
                    </div>
                    <div class="media-center">
                        <p>{!! nl2br(e($item->name)) !!}</p>
                        <p>{!! nl2br(e($item->content)) !!}</p>
                    </div>
                </div>
                @if (Auth::check())
                <div class="panel-footer text-center">
                     @include('item.want_button', ['item' => $item])
                </div>
                @endif
            </a>
        </div>
    </li>
@endforeach

