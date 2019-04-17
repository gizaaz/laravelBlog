<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Philosophy</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

<!-- pageheader
================================================== -->
<section class="s-pageheader s-pageheader--home">

    <header class="header">
        <div class="header__content row">

            <div class="header__logo">
                <a class="logo" href="http://blog/">
                    <img src="{{asset('images/logo.svg')}}" alt="Homepage">
                </a>
            </div> <!-- end header__logo -->

            <ul class="header__social">
                <li>
                    <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                </li>
            </ul> <!-- end header__social -->

            <a class="header__search-trigger" href="#0"></a>

            <div class="header__search">

                <form role="search" method="get" class="header__search-form" action="#">
                    <label>
                        <span class="hide-content">Search for:</span>
                        <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>

                <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

            </div>  <!-- end header__search -->


            <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

            <nav class="header__nav-wrap">

                <h2 class="header__nav-heading h6">Site Navigation</h2>

                <ul class="header__nav">
                    <li class="current"><a href="{{route('home')}}" title="">Home</a></li>
                    <li class="has-childrens">
                        <a href="{{route('blog')}}" title="">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Lifestyle</a></li>
                            <li><a href="blog.html">Health</a></li>
                            <li><a href="blog.html">Family</a></li>
                            <li><a href="blog.html">Management</a></li>
                            <li><a href="blog.html">Travel</a></li>
                            <li><a href="blog.html">Work</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}" title="">About</a></li>
                    <li><a href="{{route('contact')}}" title="">Contact</a></li>
                </ul> <!-- end header__nav -->

                <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

            </nav> <!-- end header__nav-wrap -->

        </div> <!-- header-content -->
    </header> <!-- header -->


    <div class="pageheader-content row">
        <div class="col-full">

            <div class="featured">

                <div class="featured__column featured__column--big">
                    <div class="entry" style="background-image:url('images/thumbs/featured/featured-guitarman.jpg');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="#0">Music</a></span>

                            <h1><a href="#0" title="">What Your Music Preference Says About You and Your Personality.</a></h1>

                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar" src="{{asset('images/avatars/user-03.jpg')}}" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="#0">John Doe</a></li>
                                    <li>December 29, 2017</li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->
                </div> <!-- end featured__big -->

                <div class="featured__column featured__column--small">

                    <div class="entry" style="background-image:url('images/thumbs/featured/featured-watch.jpg');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="#0">Management</a></span>

                            <h1><a href="#0" title="">The Pomodoro Technique Really Works.</a></h1>

                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar" src="{{asset('images/avatars/user-03.jpg')}}" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="#0">John Doe</a></li>
                                    <li>December 27, 2017</li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->

                    <div class="entry" style="background-image:url('images/thumbs/featured/featured-beetle.jpg');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="#0">LifeStyle</a></span>

                            <h1><a href="#0" title="">Throwback To The Good Old Days.</a></h1>

                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar" src="{{asset('images/avatars/user-03.jpg')}}" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="#0">John Doe</a></li>
                                    <li>December 21, 2017</li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->

                </div> <!-- end featured__small -->
            </div> <!-- end featured -->

        </div> <!-- end col-full -->
    </div> <!-- end pageheader-content row -->

</section> <!-- end s-pageheader -->


<!-- s-content
================================================== -->
<section class="s-content">

    <div class="row masonry-wrap">
        <div class="masonry">

            <div class="grid-sizer"></div>

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{asset('images/thumbs/masonry/lamp-400.jpg')}}"
                             srcset="{{asset('images/thumbs/masonry/lamp-400.jpg 1x, images/thumbs/masonry/lamp-800.jpg 2x')}}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-standard.html">December 15, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-standard.html">Just a Standard Format Post.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="blog.html">Design</a>
                                <a href="blog.html">Photography</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{asset('images/thumbs/masonry/tulips-400.jpg')}}"
                             srcset="{{asset('images/thumbs/masonry/tulips-400.jpg 1x, images/thumbs/masonry/tulips-800.jpg 2x')}}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-standard.html">December 15, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-standard.html">10 Interesting Facts About Caffeine.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="blog.html">Health</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{asset('images/thumbs/masonry/cookies-400.jpg')}}"
                             srcset="{{asset('images/thumbs/masonry/cookies-400.jpg 1x, images/thumbs/masonry/cookies-800.jpg 2x')}}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-standard.html">December 10, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-standard.html">No Sugar Oatmeal Cookies.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="blog.html">Cooking</a>
                                <a href="blog.html">Health</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{asset('images/thumbs/masonry/wheel-400.jpg')}}"
                             srcset="{{asset('images/thumbs/masonry/wheel-400.jpg 1x, images/thumbs/masonry/wheel-800.jpg 2x')}}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-standard.html">December 10, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-standard.html">Visiting Theme Parks Improves Your Health.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Health</a>
                                <a href="#">Lifestyle</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-video" data-aos="fade-up">

                <div class="entry__thumb video-image">
                    <a href="https://player.vimeo.com/video/117310401?color=01aef0&title=0&byline=0&portrait=0" data-lity>
                        <img src="{{asset('images/thumbs/masonry/shutterbug-400.jpg')}}"
                             srcset="{{asset('images/thumbs/masonry/shutterbug-400.jpg 1x, images/thumbs/masonry/shutterbug-800.jpg 2x')}}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-video.html">December 10, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-video.html">Key Benefits Of Family Photography.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="blog.html">Family</a>
                                <a href="blog.html">Photography</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->


            <article class="masonry__brick entry format-gallery" data-aos="fade-up">

                <div class="entry__thumb slider">
                    <div class="slider__slides">
                        <div class="slider__slide">
                            <img src="{{asset('images/thumbs/masonry/gallery/gallery-1-400.jpg')}}"
                                 srcset="{{asset('images/thumbs/masonry/gallery/gallery-1-400.jpg 1x, images/thumbs/masonry/gallery/gallery-1-800.jpg 2x')}}" alt="">
                        </div>
                        <div class="slider__slide">
                            <img src="{{asset('images/thumbs/masonry/gallery/gallery-2-400.jpg')}}"
                                 srcset="{{asset('images/thumbs/masonry/gallery/gallery-2-400.jpg 1x, images/thumbs/masonry/gallery/gallery-2-800.jpg 2x')}}" alt="">
                        </div>
                        <div class="slider__slide">
                            <img src="{{asset('images/thumbs/masonry/gallery/gallery-3-400.jpg')}}"
                                 srcset="{{asset('images/thumbs/masonry/gallery/gallery-3-400.jpg 1x, images/thumbs/masonry/gallery/gallery-3-800.jpg 2x')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-gallery.html">December 10, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-gallery.html">Workspace Design Trends and Ideas.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="blog.html">Work</a>
                                <a href="blog.html">Management</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-audio" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="single-audio.html" class="entry__thumb-link">
                        <img src="{{asset('images/thumbs/masonry/guitarman-400.jpg')}}"
                             srcset="{{asset('images/thumbs/masonry/guitarman-400.jpg 1x, images/thumbs/masonry/guitarman-800.jpg 2x')}}" alt="">
                    </a>
                    <div class="audio-wrap">
                        <audio id="player" src="media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>
                    </div>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-audio.html">December 10, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-audio.html">What Your Music Preference Says About You and Your Personality.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="blog.html">Music</a>
                                <a href="blog.html">Lifestyle</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{asset('images/thumbs/masonry/jump-400.jpg')}}"
                             srcset="{{asset('images/thumbs/masonry/jump-400.jpg 1x, images/thumbs/masonry/jump-800.jpg 2x')}}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-standard.html">December 10, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-standard.html">Create Meaningful Family Moments.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="blog.html">Family</a>
                                <a href="blog.html">Relationship</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{asset('images/thumbs/masonry/beetle-400.jpg')}}"
                             srcset="{{asset('images/thumbs/masonry/beetle-400.jpg 1x, images/thumbs/masonry/beetle-800.jpg 2x')}}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-standard.html">December 10, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-standard.html">Throwback To The Good Old Days.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="blog.html">Lifestyle</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{asset('images/thumbs/masonry/fuji-400.jpg')}}"
                             srcset="{{asset('images/thumbs/masonry/fuji-400.jpg 1x, images/thumbs/masonry/fuji-800.jpg 2x')}}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-standard.html">December 10, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-standard.html">Just Another  Standard Format Post.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="blog.html">Design</a>
                                <a href="blog.html">Photography</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{asset('images/thumbs/masonry/sydney-400.jpg')}}"
                             srcset="{{asset('images/thumbs/masonry/sydney-400.jpg 1x, images/thumbs/masonry/sydney-800.jpg 2x')}}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-standard.html">December 10, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="single-standard.html">Planning Your First Trip to Sydney.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="blog.html">Travel</a>
                                <a href="blog.html">Vacation</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->

        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->

</section> <!-- s-content -->


<!-- s-extra
================================================== -->
<section class="s-extra">

    <div class="row top">

        <div class="col-eight md-six tab-full popular">
            <h3>Popular Posts</h3>

            <div class="block-1-2 block-m-full popular__posts">
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset('images/thumbs/small/wheel-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="#0">Visiting Theme Parks Improves Your Health.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset('images/thumbs/small/shutterbug-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="#0">Key Benefits Of Family Photography.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-18">Dec 18, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset('images/thumbs/small/cookies-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="#0">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset('images/thumbs/small/beetle-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="#0">Throwback To The Good Old Days.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset('images/thumbs/small/tulips-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="#0">10 Interesting Facts About Caffeine.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-14">Dec 14, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset('images/thumbs/small/salad-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="#0">Healthy Mediterranean Salad Recipes</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-12">Dec 12, 2017</time></span>
                    </section>
                </article>
            </div> <!-- end popular_posts -->
        </div> <!-- end popular -->

        <div class="col-four md-six tab-full about">
            <h3>About Philosophy</h3>

            <p>
                Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
            </p>

            <ul class="about__social">
                <li>
                    <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                </li>
            </ul> <!-- end header__social -->
        </div> <!-- end about -->

    </div> <!-- end row -->

</section> <!-- end s-extra -->


<!-- s-footer
================================================== -->
<footer class="s-footer">

    <div class="s-footer__main">
        <div class="row">

            <div class="col-two md-four mob-full s-footer__sitelinks">

                <h4>Quick Links</h4>

                <ul class="s-footer__linklist">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="#0">Privacy Policy</a></li>
                </ul>

            </div> <!-- end s-footer__sitelinks -->

            <div class="col-two md-four mob-full s-footer__social">

                <h4>Social</h4>

                <ul class="s-footer__linklist">
                    <li><a href="#0">Facebook</a></li>
                    <li><a href="#0">Instagram</a></li>
                    <li><a href="#0">Twitter</a></li>
                    <li><a href="#0">Pinterest</a></li>
                    <li><a href="#0">Google+</a></li>
                    <li><a href="#0">LinkedIn</a></li>
                </ul>

            </div> <!-- end s-footer__social -->

            <div class="col-five md-full end s-footer__subscribe">

                <h4>Our Newsletter</h4>

                <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">

                        <input type="submit" name="subscribe" value="Send">

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>
                </div>

            </div> <!-- end s-footer__subscribe -->

        </div>
    </div> <!-- end s-footer__main -->

    <div class="s-footer__bottom">
        <div class="row">
            <div class="col-full">
                <div class="s-footer__copyright">
                    <span>© Copyright Philosophy 2018</span>
                    <span>Site created by Jisuz</span>
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"></a>
                </div>
            </div>
        </div>
    </div> <!-- end s-footer__bottom -->

</footer> <!-- end s-footer -->


<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader">
        <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>


<!-- Java Script
================================================== -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>