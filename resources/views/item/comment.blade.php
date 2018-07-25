<div class="row">
     <div class="comment">
         <div class="panel panel-default text-center col-sm-6">
                    <div class="panel-heading text-center">コメント投稿</div>
                        @if(\Auth::check())
                            <div class="panel-body">
                                {!! Form::open(['route' => ['comments.store', $item->id]]) !!}
                                    <div class="form-group">
                                        {!! Form::textarea('content',null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="text-center">
                                        {!! Form::submit('書き込む', ['class' => 'btn btn-success']) !!}
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        @else
                            <div class="alert alert-info" role="alert">ログインするとコメントが投稿できます</div>
                        @endif
                    </div>
          </div>
               
      <div class="col-sm-6" >
                @foreach ($comments as $comment)
                @if($comment->item_id == $item->id)
                        <div class="status text-left">
                            <div class="panel panel-primary">
                                <div class="form-group">
                                    <div>
                                        <span>　</span>
                                        <img src="/img/toukousha.png" alt="toukousha">
                                        <span class="lead">{!! nl2br(e($comment->user->name)) !!}</span>
                                        <span class="text-muted">　　{!! nl2br(e($comment->created_at)) !!}</span>
                                        <p></p>
                                        <p class="lead user_comme">{!! nl2br(e($comment->content)) !!}</p>
                                    </div>
                                    <br>
                                    <div class="form-footer text-right">
                                        @include('item.comment_delete',['comment'=>$comment])
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif
                @endforeach
                {!! $comments->render() !!}
       </div>
                
                
</div>