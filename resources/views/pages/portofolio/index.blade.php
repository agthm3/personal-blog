@extends('layouts.app')

@section('content')
    <article>
        <div class="content-1330 center-relative">
            <div class="page-desc">
                @foreach ($github as $item)
                    {{ $item->welcome_message }}
                @endforeach
            </div>
            <div class="clear"></div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="button-group filters-button-group">
                <div class="button is-checked" data-target="all">Semua</div>


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
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <!-- <div class="one_half">
                                                                <p>
                                                                    <strong>The Story</strong>
                                                                    <br />
                                                                    With a warning label this big, you know they
                                                                    gotta be fun. Bring me the forms I need to fill
                                                                    out to have her taken away. I decline the title
                                                                    of iron cook and accept the lesser title of zinc
                                                                    saucier, which I just made up.
                                                                </p>
                                                                <p>&nbsp;</p>
                                                                <p>
                                                                    Curabitur felis mi, sodales id ligula ac,
                                                                    pulvinar condimentum nulla. Integer dignissim
                                                                    bibendum augue, id dapibus nisl maximus non.
                                                                    Pellentesque rhoncus vitae odio ut euismod.
                                                                </p>
                                                            </div> -->
            <div class="one_half last">
                <p>
                    <strong>Github</strong>
                    <br />
                    Anda bisa melihat beberapa project dan source
                    code lainnya melalui akun Github saya.
                </p>
                <p>&nbsp;</p>
                <div class="text-left">
                    @foreach ($github as $item)
                        <a href="{{ $item->github_link }}" target="_self" class="button">Github <i
                                class="fab fa-github-alt"></i></a>
                    @endforeach
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </article>
@endsection
