@foreach ($items as $item)

    <li class="media">
        <div class="col-xs-6">
            <div class="status text-center">
                
                <div class="panel panel-default">
                <a href="{{route('show.get',['id' => $item->id])}}">
                    <div class="panel-heading text-center">
                        <div class="media-center">
                            <img class="media-object img-rounded center-block" src="{{ $item->image_url }}" alt="">
                        </div>
                    </div>
                    <div class="panel-body text-center">
                            <p>{!! nl2br(e($item->name)) !!}</p>
                            <p>{!! nl2br(e($item->content)) !!}</p>
                    </div>
                </a>
                    @if (\Auth::check())
                    <div class="panel-footer text-center">
                         @include('item.want_button', ['item' => $item])
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </li>
@endforeach
