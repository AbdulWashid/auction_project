
@extends('user.layouts.master')


@section('title','Sbidu')
@section('main')
    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section bg_img" data-background="{{asset('/user/images/banner/banner-bg-1.png')}}">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-content cl-white">
                        <h5 class="cate" data-aos="fade-down" data-aos-duration="1000">Next Generation Auction</h5>
                        <h1 class="title" data-aos="zoom-out-up" data-aos-duration="1200"><span class="d-xl-block">Find Your</span> Next Deal!</h1>
                        <p class="pras" data-aos="zoom-out-down" data-aos-duration="1300">
                            Online Auction is where everyone goes to shop, sell,and give, while discovering variety and affordability.
                        </p>
                        <a href="{{ Auth::check() ? '#getStart' : route('loginPage')}}" class="custom-button yellow btn-large" data-aos="zoom-out-up" data-aos-duration="1500">Get Started</a>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                    <div class="banner-thumb-2">
                        <img src="{{asset('/user/images/banner/banner-1.png')}}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape d-none d-lg-block">
            <img src="{{asset('/user/css/img/banner-shape.png')}}" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <!--============= Category Slider Section Starts Here =============-->
    <div class="browse-section ash-bg">
        <div class="browse-slider-section mt--140">
            <div class="container">
                <div class="section-header-2 cl-white mb-4">
                    <div class="left" data-aos="flip-up" data-aos-duration="1500">
                        <h6 class="title pl-0 w-100">Browse the highlights</h6>
                    </div>
                    <div class="slider-nav">
                        <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                        <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="m--15">
                    <div class="browse-slider owl-theme owl-carousel">
                        @foreach($categories as $category)
                            @if($category->closing_stock)
                                <a href="{{route('user.category',$category->id)}}" class="browse-item">
                                    <img src="{{asset($category->image)}}" alt="{{$category->name}} Image">
                                    <span class="info">{{$category->name}}</span>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= Category Slider Section Starts Here =============-->

    <!--============= Products Section start =============-->
    @foreach($categories as $category)
        <section id="getStart" class="padding-bottom padding-top pos-rel oh">
            @if($category->bg_image)
                <div class="car-bg"><img src="{{asset($category->bg_image)}}" alt="car"></div>
            @endif
            <div class="container">
                <div class="section-header-3" data-aos="zoom-out-down" data-aos-duration="1200">
                    <div class="left">
                        <div class="thumb">
                            <img src="{{asset($category->image)}}" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">{{$category->name}}</h2>
                            <p>We offer affordable {{$category->name}}</p>
                        </div>
                    </div>
                    <a href="{{route('user.category',$category->id)}}" class="normal-button">View All</a>
                </div>
                <div class="row justify-content-center mb-30-none">
                @php
                    $count = 0
                @endphp
                @foreach($products as $product)
                    @if($product->category_name == $category->name)
                        <div class="col-sm-10 col-md-6 col-lg-4">
                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="2200">
                                <div class="auction-thumb">
                                    <a href="{{route('user.product',$product->id)}}"><img src="{{asset($product->image)}}" alt="{{$product->name}}"></a>
                                    <a href="{{route('user.product',$product->id)}}" class="rating"><i class="far fa-star"></i></a>
                                    <a href="{{route('user.product',$product->id)}}" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="{{route('user.product',$product->id)}}">{{$product->name}}</a>
                                    </h6>
                                    <div class="bid-area">
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount"> ₹{{$product->bid_start_price}}</div>
                                            </div>
                                        </div>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-money"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Buy Now</div>
                                                <div class="amount">₹{{$product->sale_price}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown-area">
                                        <div class="countdown">
                                            <div id="bid_counter26"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{route('user.product',$product->id)}}" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(++$count == 3)
                            @break
                        @endif
                    @endif
                @endforeach
                </div>
            </div>
        </section>

        @if(!Auth::check() && $loop->iteration == 2)
        <!--============= Call In Section Starts Here =============-->
        <section class="call-in-section padding-top pt-max-xl-0">
            <div class="container">
                <div class="call-wrapper cl-white bg_img" data-background="{{asset('/user/images/call-in/call-bg.png')}}">
                    <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                        <h3 class="title">Register for Free & Start Bidding Now!</h3>
                        <p>From cars to diamonds to iPhones, we have it all.</p>
                    </div>
                    <a href="{{route('registrationPage')}}" class="custom-button white">Register</a>
                </div>
            </div>
        </section>
        <!--============= Call In Section Ends Here =============-->
        @endif

        @if($loop->iteration == 2 && !$liveProducts->isEmpty())
        <!--============= live Auction Section Starts Here =============-->
        <br><br>
        <section class="popular-auction padding-top pos-rel">
            <div class="popular-bg bg_img" data-background="{{asset('user/images/auction/popular/popular-bg.png')}}"></div>
            <div class="container">
                <div class="section-header cl-white" data-aos="fade-down" data-aos-duration="1000">
                    <span class="cate"></span>
                    <h2 class="title" data-aos="fade-down" data-aos-duration="1500">Live Auctions</h2>
                    <p>Bid and win great deals,Our auction process is simple, efficient, and transparent.</p>
                </div>
                <div class="popular-auction-wrapper">
                    <div class="row justify-content-center mb-30-none">
                        @foreach($liveProducts as $product)
                            <div class="col-lg-6">
                                <div class="auction-item-3" data-aos="zoom-out-up" data-aos-duration="1500">
                                    <div class="auction-thumb">
                                        <a href="{{route('user.product',$product->id)}}"><img class="img img-fluid" src="{{asset($product->image)}}" alt="popular"></a>
                                        <a href="{{route('user.product',$product->id)}}" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="{{route('user.product',$product->id)}}">{{$product->name}}</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">₹{{$product->bid_start_price}}</div>
                                            </div>
                                        </div>
                                        <div class="bids-area">
                                            Total Bids : <span class="total-bids">130 Bids</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--============= live Auction Section Ends Here =============-->
        @endif

        @if($loop->iteration == 3 && !$latestProducts->isEmpty())
            <!--============= latest Auction Section Starts Here =============-->
            <section class="popular-auction padding-top pos-rel">
                <div class="popular-bg bg_img" data-background="{{asset('user/images/auction/popular/popular-bg.png')}}"></div>
                <div class="container">
                    <div class="section-header cl-white" data-aos="fade-down" data-aos-duration="1000">
                        <span class="cate"></span>
                        <h2 class="title" data-aos="fade-down" data-aos-duration="1500">Latest Auctions</h2>
                        <p>Bid and win great deals,Our auction process is simple, efficient, and transparent.</p>
                    </div>
                    <div class="popular-auction-wrapper">
                        <div class="row justify-content-center mb-30-none">
                            @foreach($latestProducts as $product)
                                <div class="col-lg-6">
                                    <div class="auction-item-3" data-aos="zoom-out-up" data-aos-duration="1500">
                                        <div class="auction-thumb">
                                            <a href="{{route('user.product',$product->id)}}"><img class="img img-fluid" src="{{asset($product->image)}}" alt="popular"></a>
                                            <a href="{{route('user.product',$product->id)}}" class="bid"><i class="flaticon-auction"></i></a>
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a href="{{route('user.product',$product->id)}}">{{$product->name}}</a>
                                            </h6>
                                            <div class="bid-amount">
                                                <div class="icon">
                                                    <i class="flaticon-auction"></i>
                                                </div>
                                                <div class="amount-content">
                                                    <div class="current">Current Bid</div>
                                                    <div class="amount">₹{{$product->bid_start_price}}</div>
                                                </div>
                                            </div>
                                            <div class="bids-area">
                                                Total Bids : <span class="total-bids">130 Bids</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!--============= latest Auction Section Ends Here =============-->
        @endif
    @endforeach
    <!--============= Products section End =============-->

    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top">
        <div class="container">
            <div class="how-wrapper section-bg">
                <div class="section-header text-lg-left" data-aos="zoom-out-up" data-aos-duration="1200">
                    <h2 class="title">How it works</h2>
                    <p>Easy 3 steps to win</p>
                </div>
                <div class="row justify-content-center mb--40">
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb" data-aos="zoom-out-up" data-aos-duration="1000">
                                <img src="{{asset('/user/images/how/how1.png')}}" alt="how">
                            </div>
                            <div class="how-content" data-aos="zoom-out-up" data-aos-duration="1200">
                                <h4 class="title">Sign Up</h4>
                                <p>No Credit Card Required</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb" data-aos="zoom-out-up" data-aos-duration="1200">
                                <img src="{{asset('/user/images/how/how2.png')}}" alt="how">
                            </div>
                            <div class="how-content" data-aos="zoom-out-up" data-aos-duration="1400">
                                <h4 class="title">Bid</h4>
                                <p>Bidding is free Only pay if you win</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb" data-aos="zoom-out-up" data-aos-duration="1400">
                                <img src="{{asset('/user/images/how/how3.png')}}" alt="how">
                            </div>
                            <div class="how-content" data-aos="zoom-out-up" data-aos-duration="1600">
                                <h4 class="title">Win</h4>
                                <p>Fun - Excitement - Great deals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= How Section Ends Here =============-->


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
                            <p>I cant stop bidding! Its a great way to spend some time and I want everything on Sbidu.</p>
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