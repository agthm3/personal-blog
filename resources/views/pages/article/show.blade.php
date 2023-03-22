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
                            <a href="#">OS X</a>
                        </li>
                    </ul>
                </div>
                <div class="post-author">
                    Penulis: <a href="#">{{ Auth::user()->name }}</a>
                </div>
                <div class="post-date">Publish: {{ $article->created_at->format('d M Y') }}</div>
                <div class="post-read-time">Read time: 1/2 h</div>
            </div>

            <div class="entry-content">
                <div class="content-wrap">
                    <p>
                        {!! $article->article !!}
                    </p>

                </div>
                <div class="clear"></div>
            </div>
    </article>
    <!-- komentar sebelumnya -->
    <hr />
    <div class="one_half">
        <div>
            <span style="font-weight: bolder">Andi Gigatera</span>
            <p>Mantap mentong hahhaha</p>
        </div>
        <div>
            <span style="font-weight: bolder">Andi Gigatera</span>
            <p>bagus tawwwa, sangat menginspirasi</p>
        </div>
        <div>
            <span style="font-weight: bolder">Andi Gigatera</span>
            <p>Mantap mentong hahhaha</p>
        </div>
    </div>
    <!-- kirim komentar -->
    <div class="one_half last">
        <div class="contact-form">
            <p>
                <input id="name" type="text" name="your-name" placeholder="Nama" />
            </p>
            <p>
                <input id="contact-email" type="email" name="your-email" placeholder="Email" />
            </p>
            <p>
                <textarea id="message" name="your-message" placeholder="Komentar"></textarea>
            </p>
            <p>
                <input type="submit" onClick="SendMail()" value="KIRIM" />
            </p>
        </div>
    </div>

    <div class="nav-links">
        <div class="nav-previous">
            <p class="nav-previous-text">ARTIKEL SEBELUMNYA</p>
            @if ($previousArticle == null)
                <a href="">-</a>
            @else
                <a href="{{ route('show_article', ['article' => $previousArticle->id]) }}">{{ $previousArticle->title }}</a>
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
