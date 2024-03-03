@extends('layouts.app')

@section('content')
    <article>
        <h1 class="entry-title">
            {{ $article->title }}
        </h1>
        <div class="post-full-width">
            <!-- <iframe
                                                                                                                                                                                                                                                                                                        src="https://player.vimeo.com/video/150685211"
                                                                                                                                                                                                                                                                                                        width="640"
                                                                                                                                                                                                                                                                                                        height="360"
                                                                                                                                                                                                                                                                                                        allowfullscreen="allowfullscreen"
                                                                                                                                                                                                                                                                                                    ></iframe> -->
            <center>
                <img style="width: 60%" class="mb-2" src="{{ url('storage/' . $article->image) }}" alt="">
            </center>
        </div>
        <div class="center-relative clear">
            <div class="post-info">
                <div class="cat-links">
                    <ul>
                        <li>
                            <a href="#">{{ $article->tag->new_tag }}</a>
                        </li>
                    </ul>
                </div>
                <div class="post-author">
                    Penulis: <a href="#">{{ $article->user->name }}</a>
                </div>
                <div class="post-date">Publish: {{ $article->created_at->format('d M Y') }}</div>
                <div class="post-read-time">Read time: 1/2 h</div>
            </div>

            <div class="entry-content">
                <div class="content-wrap">
                    <p>
                    <p>{!! $article->article !!}</p>
                    </p>

                </div>
                <div class="clear"></div>
            </div>
    </article>
    <!-- komentar sebelumnya -->
    <hr />
    <div class="one_half">
        @foreach ($article->comment as $comment)
            <div>
                <span style="font-weight: bolder">{{ $comment->user->name }}</span>
                <p>{{ $comment->content }}</p>
            </div>
        @endforeach

    </div>
    <!-- kirim komentar -->
    <div class="one_half last">
        <div class="contact-form">
            @if (Auth::check())
                <form action="{{ route('store_comment') }}" method="post">
                    @csrf
                    <h2>
                        {{ Auth::user()->name }}
                        {{-- <input id="name" type="text" name="name" placeholder="Nama"
                            value="{{ Auth::user()->name }}" /> --}}
                    </h2>
                    <p>
                        <textarea id="message" name="content" placeholder="Komentar"></textarea>
                    </p>
                    <p>
                        <input type="hidden" name="article_id" value="{{ $article->id }}" />
                    </p>
                    <p>
                        <input type="submit" value="KIRIM" />
                    </p>
                </form>
            @else
                <p>
                    <a href="{{ route('login') }}"> <input type="submit" value="LOGIN" /></a>
                    <a href="{{ route('register') }}"> <input type="submit" value="REGISTER" /></a>
                </p>
            @endif
        </div>
    </div>

    <div class="nav-links">
        <div class="nav-previous">
            <p class="nav-previous-text">ARTIKEL SEBELUMNYA</p>
            @if ($previousArticle == null)
                <a href="">-</a>
            @else
                <a
                    href="{{ route('show_article', ['article' => $previousArticle->id]) }}">{{ $previousArticle->title }}</a>
            @endif
            {{-- <a href="#" rel="prev">{{ $previousArticle->title }}s</a> --}}
        </div>
        <div class="nav-next">
            <p class="nav-next-text">ARTIKEL SELANJUTNYA</p>
            @if ($nextArticle == null)
                <a href="">-</a>
            @else
                <a href="{{ route('show_article', ['article' => $nextArticle->id]) }}">{{ $nextArticle->title }}</a>
            @endif
        </div>
        <div class="clear"></div>
    </div>
@endsection
