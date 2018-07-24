<div class="row">
@foreach ($items as $item)
<div class="col-xs-4">
<div class="media">
    
        <div class="status text-center">
               
            <div class="form-group">
                <a href="{{route('show.get',['id' => $item->id])}}">
                    <div class="form-heading text-center">
                        <div class="media-center">
                            <img class="media-object img-rounded center-block" src="{{ secure_asset($item->image_url) }}" alt="">
                        </div>
                    </div>
                    <div class="form-body text-center">
                            <p>{!! nl2br(e($item->name)) !!}</p>
                            <p>{!! nl2br(e($item->content)) !!}</p>
                    </div>
                </a>
                    @if (\Auth::check())
                    <div class="form-footer text-center middle">
                         @include('item.want_button', ['item' => $item])
                         @include('item.delete_button', ['item' => $item])
                    </div>
                    @endif
            <br> 
            </div>
        </div>
    
</div>
</div>
@endforeach

</div>
