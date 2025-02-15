@extends('user.layouts.master')


@section('title','About')
@section('main')

    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>About Us</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="{{asset('/user/images/banner/hero-bg.png')}}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= About Section Starts Here =============-->
    <section class="about-section">
        <div class="container">
            <div class="about-wrapper mt--100 mt-lg--440 padding-top">
                <div class="row">
                    <div class="col-lg-7 col-xl-6">
                        <div class="about-content">
                            <h4 class="subtitle" data-aos="fade-down" data-aos-duration="1000">About Us</h4>
                            <h2 class="title" data-aos="fade-down" data-aos-duration="1200"><span class="d-block">OVER 60</span> YEARS EXPERIENCE</h2>
                            <p class="gra" data-aos="fade-down" data-aos-duration="1300">Innovation have made us leaders in auctions platform</p>
                            <div class="item-area" data-aos="fade-down" data-aos-duration="1600">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{asset('/user/images/about/01.png')}}" alt="about">
                                    </div>
                                    <p>award-winning team</p>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{asset('/user/images/about/02.png')}}" alt="about">
                                    </div>
                                    <p>AFFILIATIONS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-thumb">
                    <img src="{{asset('/user/images/about/about.png')}}" alt="about">
                </div>
            </div>
        </div>
    </section>
    <!--============= About Section Ends Here =============-->


    <!--============= Counter Section Starts Here =============-->
    <div class="counter-section padding-top mt--10">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-6 col-lg-3" data-aos="zoom-out-up" data-aos-duration="1100">
                    <div class="counter-item">
                        <h3 class="counter-header">
                            <span class="title counter">62</span><span class="title">M</span>
                        </h3>
                        <p>ITEMS AUCTIONED</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="zoom-out-up" data-aos-duration="1300">
                    <div class="counter-item">
                        <h3 class="counter-header">
                            <span>$</span><span class="title counter">887</span><span class="title">M</span>
                        </h3>
                        <p>IN SECURE BIDS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="zoom-out-up" data-aos-duration="1500">
                    <div class="counter-item">
                        <h3 class="counter-header">
                            <span class="title counter">63</span><span class="title">M</span>
                        </h3>
                        <p>ITEMS AUCTIONED</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="zoom-out-up" data-aos-duration="1700">
                    <div class="counter-item">
                        <h3 class="counter-header">
                            <span>0</span><span class="title counter">5</span><span class="title">K</span>
                        </h3>
                        <p>AUCTION EXPERTS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= Counter Section Ends Here =============-->


    <!--============= Overview Section Starts Here =============-->
    <section class="overview-section padding-top">
        <div class="container mw-lg-100 p-lg-0">
            <div class="row m-0">
                <div class="col-lg-6 p-0">
                    <div class="overview-content">
                        <div class="section-header text-lg-left" data-aos="zoom-out-down" data-aos-duration="1000">
                            <h2 class="title">What can you expect?</h2>
                            <p>Voluptate aut blanditiis accusantium officiis expedita dolorem inventore odio reiciendis obcaecati quod nisi quae</p>
                        </div>
                        <div class="row mb--50">
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('/user/images/overview/01.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Real-time Auction</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('/user/images/overview/02.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Supports Multiple Currency</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('/user/images/overview/03.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Winner Announcement</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('/user/images/overview/04.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Supports Multiple Currency</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('/user/images/overview/05.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Show all bidders history</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expert-item">
                                    <div class="thumb">
                                        <img src="{{asset('/user/images/overview/06.png')}}" alt="overview">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Add to watchlist</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-30 pr-0">
                    <div class="w-100 h-100 bg_img" data-background="{{asset('/user/images/overview/overview-bg.png')}}"></div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Overview Section Ends Here =============-->


    <!--============= Call In Section Starts Here =============-->
    <section class="call-in-section padding-top padding-bottom">
        <div class="container">
            <div class="call-wrapper cl-white bg_img" data-background="{{asset('/user/images/call-in/call-bg.png')}}">
                <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                    <h3 class="title">Register for Free & Start Bidding Now!</h3>
                    <p>From cars to diamonds to iPhones, we have it all.</p>
                </div>
                <a href="#0" class="custom-button white">Register</a>
            </div>
        </div>
    </section>
    <!--============= Call In Section Ends Here =============-->


    <!--============= Team Section Starts Here =============-->
    <section class="team-section section-bg padding-top padding-bottom">
        <div class="container">
            <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                <h2 class="title">Meet the Management Team</h2>
                <p>Our team consists of passionate and talented individuals invested in your success.</p>
            </div>
            <div class="team-wrapper row justify-content-between">
                <div class="team-item" data-aos="zoom-out-up" data-aos-duration="1100">
                    <div class="team-inner">
                        <div class="team-thumb">
                            <a href="#0">
                                <img src="{{asset('/user/images/team/team1.png')}}" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h6 class="title"><a href="#0">Kent Quinn</a></h6>
                            <ul class="social">
                                <li>
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item" data-aos="zoom-out-up" data-aos-duration="1200">
                    <div class="team-inner">
                        <div class="team-thumb">
                            <a href="#0">
                                <img src="{{asset('/user/images/team/team2.png')}}" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h6 class="title"><a href="#0">Dustin Day</a></h6>
                            <ul class="social">
                                <li>
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item" data-aos="zoom-out-up" data-aos-duration="1300">
                    <div class="team-inner">
                        <div class="team-thumb">
                            <a href="#0">
                                <img src="{{asset('/user/images/team/team3.png')}}" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h6 class="title"><a href="#0">Antonia Little</a></h6>
                            <ul class="social">
                                <li>
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-item" data-aos="zoom-out-up" data-aos-duration="1400">
                    <div class="team-inner">
                        <div class="team-thumb">
                            <a href="#0">
                                <img src="{{asset('/user/images/team/team4.png')}}" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h6 class="title"><a href="#0">Marie Wolfe</a></h6>
                            <ul class="social">
                                <li>
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Team Section Ends Here =============-->


    <!--============= Client Section Starts Here =============-->
    <section class="client-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                <h2 class="title">Don’t just take our word for it!</h2>
                <p>Our hard work is paying off. Great reviews from amazing customers.</p>
            </div>
            <div class="m--15">
                <div class="client-slider owl-theme owl-carousel">
                    <div class="client-item">
                        <div class="client-content">
                            <p>I can't stop bidding! It's a great way to spend some time and I want everything on Sbidu.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="{{asset('/user/images/client/client01.png')}}" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>I came I saw I won. Love what I have won, and will try to win something else.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="{{asset('/user/images/client/client02.png')}}" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="client-content">
                            <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>
                        </div>
                        <div class="client-author">
                            <div class="thumb">
                                <a href="#0">
                                    <img src="{{asset('/user/images/client/client03.png')}}" alt="client">
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#0">Tom Powell</a></h6>
                                <div class="ratings">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Client Section Ends Here =============-->

@endsection