<header>
    
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/"><img src="home.jpg"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                材料から探す
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('index.bin') }}">びん</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.box') }}">空き箱</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.flower') }}">お花</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.cardboard') }}">段ボール</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.others') }}">その他</a>
                                </li>
                                <li>
                                    <a href="{{ route('index.all') }}">全種類</a>
                                </li>
                            </ul>
                        </li>
                        
                    @if (Auth::check())
                      
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="gravatar">
                                    <img src="{{ Gravatar::src(Auth::user()->email, 20) . '&d=mm' }}" alt="" class="img-circle">
                                </span>
                                {{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('users.show', ['id' => Auth::user()->id]) }}">マイページ</a>
                                </li>
                                <li>
                                    <a href="{{ route('works.create', ['id' => Auth::user()->id]) }}">作品を投稿</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout.get') }}">ログアウト</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('signup.get') }}">新規登録</a></li>
                        <li><a href="{{ route('login') }}">ログイン</a></li>
                        
                    @endif
                        
                        
                </ul>
            </div>
        </div>
    </nav>
</header>
