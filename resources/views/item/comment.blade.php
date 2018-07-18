<div class="row ">
                @foreach ($comments as $comment)
                <div class="col-xs-10">
                    <div class="media">
                            <div class="status text-center">
                                <div class="form-group">
                                        <div class="form-body">
                                            <p>{!! nl2br(e($comment->user->name)) !!}</p>
                                        
                                            <p>{!! nl2br(e($comment->content)) !!}</p>
                                        </div>
                                        <div class="form-footer">
                                            @include('item.comment_delete',['comment'=>$comment])
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
                @endforeach
                
                <div class="panel panel-default text-center col-xs-10">
                        <div class="panel-heading text-center">コメント投稿</div>
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
                </div>
</div>