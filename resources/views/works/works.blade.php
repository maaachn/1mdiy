@foreach ($works as $work)

    <li class="media">
        <div class="col-xs-6">
            <div class="status text-center">
                
                <div class="panel panel-default">
                <a href="{{route('works.show',['id' => $work->id])}}">
                    <div class="panel-heading text-center">
                        <div class="media-center">
                            <img class="media-object img-rounded center-block" src="{{ $work->image_url }}" alt="">
                        </div>
                    </div>
                    <div class="panel-body text-center">
                            <p>{!! nl2br(e($work->name)) !!}</p>
                            <p>{!! nl2br(e($work->content)) !!}</p>
                    </div>
                </a>
                    
                </div>
            </div>
        </div>
    </li>
@endforeach
