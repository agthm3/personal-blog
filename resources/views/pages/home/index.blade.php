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
                <div class="button is-checked" data-filter="*">
                    Semua
                </div>

                <div class="button" data-filter=".image">
                    Portofolio Terbaru
                </div>
                <div class="button" data-filter=".image">
                    Artikel Terbaru
                </div>
                <div class="button" data-filter=".image">Video</div>
            </div>
            <div class="grid" id="portfolio">
                <div class="grid-sizer"></div>
                <div class="grid-item element-item p_one_third post">
                    <a href="single-portfolio.html">
                        <img src="demo-images/sun_portfolio_image01.png" alt="" />
                        <div class="portfolio-text-holder">
                            <p>CLOCK</p>
                        </div>
                    </a>
                </div>

                <div class="grid-item element-item p_one_third image">
                    <a href="demo-images/sun_portfolio_image03.png" data-rel="prettyPhoto[gallery1]">
                        <img src="demo-images/sun_portfolio_image03.png" alt="" />
                        <div class="portfolio-text-holder">
                            <p>BAG</p>
                        </div>
                    </a>
                </div>

                <div class="grid-item element-item p_one_third post">
                    <a href="single-portfolio.html">
                        <img src="demo-images/sun_portfolio_image04.png" alt="" />
                        <div class="portfolio-text-holder">
                            <p>FISH</p>
                        </div>
                    </a>
                </div>

                <div class="grid-item element-item p_one_third video">
                    <a href="https://www.youtube.com/watch?v=xEW_YXgRSIE" data-rel="prettyPhoto[gallery1]">
                        <img src="demo-images/sun_portfolio_image02.png" alt="" />
                        <div class="portfolio-text-holder">
                            <p>BOTTLE</p>
                        </div>
                    </a>
                </div>

                <div class="grid-item element-item p_one_third extern">
                    <a href="http://drythemes.com" target="_blank">
                        <img src="demo-images/sun_portfolio_image05.png" alt="" />
                        <div class="portfolio-text-holder">
                            <p>PAPER</p>
                        </div>
                    </a>
                </div>

                <div class="grid-item element-item p_one_third post">
                    <a href="single-portfolio.html">
                        <img src="demo-images/sun_portfolio_image07.png" alt="" />
                        <div class="portfolio-text-holder">
                            <p>BLUE ICE</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- batas=============== -->
            <div class="clear"></div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="one_half">
                <p>
                    <strong>The Story</strong>
                    <br />
                    @if ($messages == null)
                        <p>Belum ada Left Message</p>
                    @else
                        <p> {{ $messages->left_message }}</p>
                    @endif
                </p>
            </div>
            <div class="one_half last">
                <p>
                    <strong>Dreamers</strong>
                    @if ($messages == null)
                        <p>Belum ada Right Message</p>
                    @else
                        <p> {{ $messages->right_message }}</p>
                    @endif
                </p>
                <p>&nbsp;</p>
                <div class="text-left">
                    <a href="portfolio.html" target="_self" class="button">More…</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </article>
@endsection
