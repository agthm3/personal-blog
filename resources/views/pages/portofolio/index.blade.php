@extends('layouts.app')

@section('content')
    <article>
        <div class="content-1330 center-relative">
            <div class="page-desc">
                Science cuts two ways, of course, its products can
                be used for both good and evil. But there’s no
                turning back from science. The early warnings about
                technological dangers also come from science.
            </div>
            <div class="clear"></div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="button-group filters-button-group">
                <div class="button is-checked" data-filter="*">
                    Semua
                </div>
                <div class="button" data-filter=".post">
                    Website
                </div>
                <div class="button" data-filter=".video">Video</div>
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

                <div class="grid-item element-item p_two_third image">
                    <a href="demo-images/sun_portfolio_image06.png" data-rel="prettyPhoto[gallery1]">
                        <img src="demo-images/sun_portfolio_image06.png" alt="" />
                        <div class="portfolio-text-holder">
                            <p>MUSIC</p>
                        </div>
                    </a>
                </div>

                <div class="grid-item element-item p_one_third video">
                    <a href="https://www.youtube.com/watch?v=xEW_YXgRSIE" data-rel="prettyPhoto[gallery1]">
                        <img src="demo-images/sun_portfolio_image08.png" alt="" />
                        <div class="portfolio-text-holder">
                            <p>JUICE</p>
                        </div>
                    </a>
                </div>

                <div class="grid-item element-item p_one_third extern">
                    <a href="http://drythemes.com" target="_blank">
                        <img src="demo-images/sun_portfolio_image09.png" alt="" />
                        <div class="portfolio-text-holder">
                            <p>COFFEE</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
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
                    <a href="portfolio.html" target="_self" class="button">Github <i class="fab fa-github-alt"></i></a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </article>
@endsection
