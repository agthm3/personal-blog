@extends('layouts.app')

@section('content')
    <article>

        <div class="content-1330 center-relative">
            <div class="page-desc">
                @if ($messages == null)
                    <p>Belum ada Welcome Message</p>
                @else
                    <p> {{ $messages->welcome_message }}</p>
                @endif
            </div>
            <div class="clear"></div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="button-group filters-button-group">
                <div class="button is-checked" data-target="all">All</div>
                <div class="button" data-target="portofolio">Portofolio</div>
                <div class="button" data-target="article">Artikel</div>
            </div>

            <div class="grid" id="portfolio">
                <div class="grid-sizer"></div>
                @foreach ($portofolios as $portofolio)
                    <div class="grid-item element-item p_one_third post show portofolio">
                        <a href="{{ route('pages_portofolio_show', $portofolio) }}">
                            <img style="width: 100%" class="mb-2" src="{{ url('storage/' . $portofolio->image) }}"
                                alt="">
                            <div class="portfolio-text-holder">
                                <p>{{ $portofolio->project_name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
                @foreach ($articles as $article)
                    <div class="grid-item element-item p_one_third post show article">
                        <a href="{{ route('show_article', $article) }}">
                            <img src="{{ url('storage/' . $article->image) }}" class="mb-2" style="width: 100%"
                                alt="">
                            <div class="portfolio-text-holder">
                                <p>{{ $article->title }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="clear"></div>

            <style>
                .grid-item {
                    display: none;
                }

                .grid-item.show {
                    display: block;
                }

                .button.is-checked {
                    font-weight: bold;
                }

                .grid-item {
                    position: relative;
                    overflow: hidden;
                }

                .grid-item img {
                    display: block;
                    width: 100%;
                    height: auto;
                    transition: all 0.3s ease-out;
                }

                .grid-item:hover img {
                    transform: scale(1.1);
                }

                .grid-item .portfolio-text-holder {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    background-color: rgba(0, 0, 0, 0.7);
                    color: #fff;
                    padding: 10px;
                    opacity: 0;
                    transition: all 0.3s ease-out;
                }

                .grid-item:hover .portfolio-text-holder {
                    opacity: 1;
                }
            </style>

            <script>
                const buttons = document.querySelectorAll('.button');
                const items = document.querySelectorAll('.grid-item');

                buttons.forEach(button => {
                    button.addEventListener('click', () => {
                        const target = button.dataset.target;

                        buttons.forEach(button => button.classList.remove('is-checked'));
                        button.classList.add('is-checked');

                        items.forEach(item => {
                            item.classList.remove('show');

                            if (item.classList.contains(target) || target === 'all') {
                                item.classList.add('show');
                            }
                        });
                    });
                });
            </script>


            <!-- batas=============== -->
            <div class="clear"></div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="one_half">
                <p>

                    <br />
                    @if ($messages == null)
                        <p>Belum ada Left Message</p>
                    @else
                        <p> {!! $messages->left_message !!}</p>
                    @endif
                </p>
            </div>
            <div class="one_half last">
                <p>

                    @if ($messages == null)
                        <p>Belum ada Right Message</p>
                    @else
                        <p> {!! $messages->right_message !!}</p>
                    @endif
                </p>
                <p>&nbsp;</p>

            </div>
            <div class="clear"></div>
        </div>
    </article>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/isotope/3.0.6/isotope.pkgd.min.js"></script>
@endsection
