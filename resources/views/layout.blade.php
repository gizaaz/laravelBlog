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

            <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

            <nav class="header__nav-wrap">

                <h2 class="header__nav-heading h6">Site Navigation</h2>

                <ul class="header__nav">
                    <li class="current"><a href="{{route('welcome')}}" title="">Home</a></li>
                    <li class="has-childrens">
                        <a href="{{route('blog')}}" title="">Blog</a>
                        @php
                        use App\Category;
                        $categories = Category::get();
                        @endphp
                        <ul class="sub-menu">
                            @foreach ($categories as $category)
                                <li><a href="{{route('getCategoryPosts',['id'=> $category->id ])}}">{{$category->title}}</a></li>
                            @endforeach
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
                    <div class="entry" style="background-image:url('images/featured-guitarman.jpg');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="http://blog/blog/category/1">Lifestyle</a></span>

                            <h1><a href="{{route('post', ['id'=> 1])}}" title="">What Your Music Preference Says About You and Your Personality.</a></h1>

                            <div class="entry__info">
                                <a href="{{route('post', ['id'=> 1])}}" class="entry__profile-pic">
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

                    <div class="entry" style="background-image:url('images/featured-watch.jpg');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="http://blog/blog/category/4">Management</a></span>

                            <h1><a href="{{route('post', ['id'=> 2])}}" title="">The Pomodoro Technique Really Works.</a></h1>

                            <div class="entry__info">
                                <a href="{{route('post', ['id'=> 2])}}" class="entry__profile-pic">
                                    <img class="avatar" src="{{asset('images/avatars/user-03.jpg')}}" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="#0">John Doe</a></li>
                                    <li>December 27, 2017</li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->

                    <div class="entry" style="background-image:url('images/featured-beetle.jpg');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="http://blog/blog/category/1">LifeStyle</a></span>

                            <h1><a href="{{route('post', ['id'=> 3])}}" title="">Throwback To The Good Old Days.</a></h1>

                            <div class="entry__info">
                                <a href="{{route('post', ['id'=> 3])}}" class="entry__profile-pic">
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

@yield('content')

<!-- s-footer
================================================== -->
<footer class="s-footer">

    <div class="s-footer__main">
        <div class="row">

            <div class="col-two md-four mob-full s-footer__sitelinks">

                <h4>Quick Links</h4>

                <ul class="s-footer__linklist">
                    <li><a href="{{route('welcome')}}">Home</a></li>
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
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>