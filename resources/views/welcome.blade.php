@extends('layout')

@section('content')

<!-- s-content
================================================== -->
<section class="s-content">

    <div class="row masonry-wrap">
        <div class="masonry">

            <div class="grid-sizer"></div>

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{asset('images/thumbs/masonry/lamp-400.jpg')}}" alt="">
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

@endsection