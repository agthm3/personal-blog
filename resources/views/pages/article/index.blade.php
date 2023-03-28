@extends('layouts.app')

@section('content')
    <article>
        <div class="content-1330 center-relative">
            <div class="page-desc">
                @foreach ($info as $item)
                    {{ $item->welcome_message }}
                @endforeach
            </div>
            <div class="clear"></div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="blog-holder block center-relative content-1330">
                <div class="post-border center-relative block"></div>

                @foreach ($articles as $article)
                    <article class="relative blog-item-holder center-relative">
                        <div class="cat-links">
                            <ul>
                                <li>
                                    <a href="#">{{ $article->tag->new_tag }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="entry-date published">{{ $article->created_at }}</div>
                        <div class="author vcard">{{ $article->user->name }}</div>
                        <h2 class="entry-title">
                            <a href="{{ route('show_article', $article) }}">{{ $article->title }}</a>
                        </h2>
                        <div class="clear"></div>
                    </article>

                    <div class="post-border center-relative block"></div>
                @endforeach


                <div class="post-border center-relative block"></div>
            </div>
        </div>
        <div class="block content-1330 center-relative center-text top-50 bottom-50">
            <a target="_self" class="more-posts button">LIHAT ARTIKEL LAINNYA <span>→</span></a>
        </div>
    </article>
@endsection
