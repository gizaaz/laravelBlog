@extends('layout')

@section('content')

<!-- s-content
================================================== -->
<section class="s-content">

    <div class="row masonry-wrap">
        <div class="masonry">

            <div class="grid-sizer"></div>

            @foreach($posts as $post)

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="{{route('post', ['id'=> $post->id])}}" class="entry__thumb-link">
                        <img src="{{asset('images/' . $post->image_url)}}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="#0">{{date_format($post->created_at, 'F d, Y')}}</a>
                        </div>
                        <h1 class="entry__title"><a href="{{route('post', ['id'=> $post->id])}}">{{ $post->title }}</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            {{$post->content}}
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="{{route('getCategoryPosts',['id'=> $post->category->id ])}}">{{$post->category->title}}</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->
            @endforeach
            {{--<article class="masonry__brick entry format-standard" data-aos="fade-up">--}}

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
                    <a href="{{route('post', ['id'=> 4])}}" class="popular__thumb">
                        <img src="{{asset('images/wheel-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="{{route('post', ['id'=> 4])}}">Visiting Theme Parks Improves Your Health.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="{{route('post', ['id'=> 5])}}" class="popular__thumb">
                        <img src="{{asset('images/shutterbug-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="{{route('post', ['id'=> 5])}}">Key Benefits Of Family Photography.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-18">Dec 18, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="{{route('post', ['id'=> 6])}}" class="popular__thumb">
                        <img src="{{asset('images/cookies-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="{{route('post', ['id'=> 6])}}">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="{{route('post', ['id'=> 7])}}" class="popular__thumb">
                        <img src="{{asset('images/beetle-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="{{route('post', ['id'=> 7])}}">Throwback To The Good Old Days.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="{{route('post', ['id'=> 8])}}" class="popular__thumb">
                        <img src="{{asset('images/tulips-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="{{route('post', ['id'=> 8])}}">10 Interesting Facts About Caffeine.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-14">Dec 14, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="{{route('post', ['id'=> 9])}}" class="popular__thumb">
                        <img src="{{asset('images/salad-150.jpg')}}" alt="">
                    </a>
                    <h5><a href="{{route('post', ['id'=> 9])}}">Healthy Mediterranean Salad Recipes</a></h5>
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