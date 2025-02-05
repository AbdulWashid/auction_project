
@extends('user.layouts.master')


@section('title','Sbidu')
@section('main')
    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section-5 bg_img oh" data-background="{{asset('/user/images/banner/banner-bg-4.png')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 col-lg-9 col-xl-9">
                    <div class="banner-content cl-white">                        
                        <h5 class="cate" data-aos="fade-down" data-aos-duration="1100">Find Next Generation</h5>
                        <h1 class="title" data-aos="zoom-out-down" data-aos-duration="1200"><span class="d-xl-block">A Better Way</span> To Buy Property</h1>
                        <p class="mw-500" data-aos="zoom-out-down" data-aos-duration="1300">
                            Bid in private, from the comfort of your home.
                        </p>
                        <a href="#0" class="custom-button yellow btn-large" data-aos="fade-down" data-aos-duration="1400">Browse Property</a>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 d-none d-lg-block" data-aos="fade-right" data-aos-duration="1200">
                    <div class="banner-thumb-5">
                        <img src="{{asset('/user/images/banner/banner-5.png')}}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape banner-shape-5 d-none d-lg-block bot-0">
            <img src="{{asset('/user/css/img/banner-shape-4.png')}}" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <!--============= Hightlight Slider Section Starts Here =============-->
    <div class="browse-slider-section padding-top pt-lg-0 mt--140 mt-max-xl-0">
        <div class="container">
            <div class="section-header-2 mb-4">
                <div class="left">
                    <h6 class="title pl-0">Browse the highlights</h6>
                </div>
                <div class="slider-nav">
                    <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                    <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
            <div class="m--15">
                <div class="browse-slider-2 owl-theme owl-carousel">
                    <a href="#0" class="browse-item-2">
                        <div class="thumb">
                            <img src="{{asset('/user/images/auction/brow2-1.png')}}" alt="auction">
                        </div>
                        <div class="content">
                            <span class="title">Houses & Apartments</span>
                            <span class="info">Show</span>
                        </div>
                    </a>
                    <a href="#0" class="browse-item-2">
                        <div class="thumb">
                            <img src="{{asset('/user/images/auction/brow2-2.png')}}" alt="auction">
                        </div>
                        <div class="content">
                            <span class="title">Commercial Properties</span>
                            <span class="info">Show</span>
                        </div>
                    </a>
                    <a href="#0" class="browse-item-2">
                        <div class="thumb">
                            <img src="{{asset('/user/images/auction/brow2-3.png')}}" alt="auction">
                        </div>
                        <div class="content">
                            <span class="title">Industrial Properties</span>
                            <span class="info">Show</span>
                        </div>
                    </a>
                    <a href="#0" class="browse-item-2">
                        <div class="thumb">
                            <img src="{{asset('/user/images/auction/brow2-4.png')}}" alt="auction">
                        </div>
                        <div class="content">
                            <span class="title">Land Plots</span>
                            <span class="info">Show</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--============= Hightlight Slider Section Ends Here =============-->


     <!--============= Featured Auction Section Starts Here =============-->
     <section class="featured-auction-section padding-bottom padding-top pos-rel oh">
        <div class="car-bg"><img src="{{asset('/user/images/auction/featured/featured-bg-2.png')}}" alt="featured"></div>
        <div class="container">
            <div class="section-header-3" data-aos="zoom-out-down" data-aos-duration="1200">
                <div class="left d-block">
                    <h2 class="title mb-3">Featured Items</h2>
                    <p>Start winning cars with comfort</p>
                </div>
                <a href="#0" class="normal-button">View All</a>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-8" data-aos="zoom-out-down" data-aos-duration="1100">
                        <div class="auction-thumb">
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="min_counter_1" class="count-item"></div>
                                </div>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            </div>
                            <a href="product-details.html" class="thumb-area bg_img" data-background="{{asset('/user/images/auction/featured/auction-1.png')}}"></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">4402 NW 47th St, Tamarac</a>
                                </h6>
                                <div class="item-feature">
                                    <span>2 Beds</span>
                                    <span>2 Baths</span>
                                    <span>1,215 Sq. Ft.</span>
                                </div>
                            </div>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Buy Now</div>
                                        <div class="amount">$5,00.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-count-area">
                                <span class="item">
                                    <span class="left">Total Bids</span>97 Bids
                                </span>
                                <span class="item">
                                    <span class="left">Last Bid </span>7 mins ago
                                </span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-8" data-aos="zoom-out-down" data-aos-duration="1200">
                        <div class="auction-thumb">
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="min_counter_2" class="count-item"></div>
                                </div>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            </div>
                            <a href="product-details.html" class="thumb-area bg_img" data-background="{{asset('/user/images/auction/featured/auction-2.png')}}"></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">4402 NW 47th St, Tamarac</a>
                                </h6>
                                <div class="item-feature">
                                    <span>2 Beds</span>
                                    <span>2 Baths</span>
                                    <span>1,215 Sq. Ft.</span>
                                </div>
                            </div>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Buy Now</div>
                                        <div class="amount">$5,00.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-count-area">
                                <span class="item">
                                    <span class="left">Total Bids</span>97 Bids
                                </span>
                                <span class="item">
                                    <span class="left">Last Bid </span>7 mins ago
                                </span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-8" data-aos="zoom-out-down" data-aos-duration="1300">
                        <div class="auction-thumb">
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="min_counter_3" class="count-item"></div>
                                </div>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            </div>
                            <a href="product-details.html" class="thumb-area bg_img" data-background="{{asset('/user/images/auction/featured/auction-3.png')}}"></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">4402 NW 47th St, Tamarac</a>
                                </h6>
                                <div class="item-feature">
                                    <span>2 Beds</span>
                                    <span>2 Baths</span>
                                    <span>1,215 Sq. Ft.</span>
                                </div>
                            </div>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">$876.00</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Buy Now</div>
                                        <div class="amount">$5,00.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-count-area">
                                <span class="item">
                                    <span class="left">Total Bids</span>97 Bids
                                </span>
                                <span class="item">
                                    <span class="left">Last Bid </span>7 mins ago
                                </span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Featured Auction Section Ends Here =============-->


    <!--============= Upcoming Auction Section Starts Here =============-->
    <section class="upcoming-auction padding-bottom padding-top">
        <div class="container">
            <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                <h2 class="title">Upcoming Auctions</h2>
                <p>You are welcome to attend and join in the action at any of our upcoming auctions.</p>
            </div>
        </div>
        <div class="filter-wrapper no-shadow">
            <div class="container">
                <ul class="filter niche-border">
                    <li class="active" data-check="*">
                        <span><i class="flaticon-right-arrow"></i>All</span>
                    </li>
                    <li data-check=".live">
                        <span><i class="flaticon-auction"></i>Live Auction</span>
                    </li>
                    <li data-check=".time">
                        <span><i class="flaticon-time"></i>Time Auction</span>
                    </li>
                    <li data-check=".buy">
                        <span><i class="flaticon-bag"></i>buy now</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="auction-wrapper-7 m--15">
                <div class="auction-item-7 time" data-aos="zoom-out-up" data-aos-duration="1200">
                    <div class="auction-inner">
                        <a href="#0" class="upcoming-badge-2" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </a>
                        <div class="auction-thumb bg_img" data-background="{{asset('/user/images/auction/upcoming/upcoming-9.png')}}">
                            <img class="d-lg-none" src="{{asset('/user/images/auction/upcoming/upcoming-9.png')}}" alt="upcoming">
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">4402 NW 47th St, Tamarac</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
                                </div>
                                <div class="item-feature">
                                    <span>2 Beds</span>
                                    <span>2 Baths</span>
                                    <span>1,215 Sq. Ft.</span>
                                </div>
                            </div>
                            <div class="bid-area">
                                <div class="bid-inner">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Buy Now</div>
                                            <div class="amount">$5,00.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-count-area">
                                <span class="item">
                                    <span class="left">Total Bids</span>97 Bids
                                </span>
                                <span class="item">
                                    <span class="left">Last Bid </span>7 mins ago
                                </span>
                            </div>
                        </div>
                        <div class="auction-bidding">
                            <span class="bid-title">Bidding ends in</span>
                            <div class="countdown">
                                <div id="bid_counter3"></div>
                            </div>
                            <div class="bid-incr">
                                <span class="title">Bid Increment</span>
                                <h4>$3</h4>
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
                <div class="auction-item-7 live buy" data-aos="zoom-out-down" data-aos-duration="1300">
                    <div class="auction-inner">
                        <a href="#0" class="upcoming-badge-2" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </a>
                        <div class="auction-thumb bg_img" data-background="{{asset('/user/images/auction/upcoming/upcoming-10.png')}}">
                            <img class="d-lg-none" src="{{asset('/user/images/auction/upcoming/upcoming-10.png')}}" alt="upcoming">
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">4402 NW 47th St, Tamarac</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
                                </div>
                                <div class="item-feature">
                                    <span>2 Beds</span>
                                    <span>2 Baths</span>
                                    <span>1,215 Sq. Ft.</span>
                                </div>
                            </div>
                            <div class="bid-area">
                                <div class="bid-inner">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Buy Now</div>
                                            <div class="amount">$5,00.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-count-area">
                                <span class="item">
                                    <span class="left">Total Bids</span>97 Bids
                                </span>
                                <span class="item">
                                    <span class="left">Last Bid </span>7 mins ago
                                </span>
                            </div>
                        </div>
                        <div class="auction-bidding">
                            <span class="bid-title">Bidding ends in</span>
                            <div class="countdown">
                                <div id="bid_counter4"></div>
                            </div>
                            <div class="bid-incr">
                                <span class="title">Bid Increment</span>
                                <h4>$3</h4>
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
                <div class="auction-item-7 buy time" data-aos="zoom-out-up" data-aos-duration="1400">
                    <div class="auction-inner">
                        <a href="#0" class="upcoming-badge-2" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </a>
                        <div class="auction-thumb bg_img" data-background="{{asset('/user/images/auction/upcoming/upcoming-11.png')}}">
                            <img class="d-lg-none" src="{{asset('/user/images/auction/upcoming/upcoming-11.png')}}" alt="upcoming">
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">4402 NW 47th St, Tamarac</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
                                </div>
                                <div class="item-feature">
                                    <span>2 Beds</span>
                                    <span>2 Baths</span>
                                    <span>1,215 Sq. Ft.</span>
                                </div>
                            </div>
                            <div class="bid-area">
                                <div class="bid-inner">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Buy Now</div>
                                            <div class="amount">$5,00.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-count-area">
                                <span class="item">
                                    <span class="left">Total Bids</span>97 Bids
                                </span>
                                <span class="item">
                                    <span class="left">Last Bid </span>7 mins ago
                                </span>
                            </div>
                        </div>
                        <div class="auction-bidding">
                            <span class="bid-title">Bidding ends in</span>
                            <div class="countdown">
                                <div id="bid_counter5"></div>
                            </div>
                            <div class="bid-incr">
                                <span class="title">Bid Increment</span>
                                <h4>$3</h4>
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
                <div class="auction-item-7 live" data-aos="zoom-out-down" data-aos-duration="1500">
                    <div class="auction-inner">
                        <a href="#0" class="upcoming-badge-2" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </a>
                        <div class="auction-thumb bg_img" data-background="{{asset('/user/images/auction/upcoming/upcoming-12.png')}}">
                            <img class="d-lg-none" src="{{asset('/user/images/auction/upcoming/upcoming-12.png')}}" alt="upcoming">
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">4402 NW 47th St, Tamarac</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
                                </div>
                                <div class="item-feature">
                                    <span>2 Beds</span>
                                    <span>2 Baths</span>
                                    <span>1,215 Sq. Ft.</span>
                                </div>
                            </div>
                            <div class="bid-area">
                                <div class="bid-inner">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Buy Now</div>
                                            <div class="amount">$5,00.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-count-area">
                                <span class="item">
                                    <span class="left">Total Bids</span>97 Bids
                                </span>
                                <span class="item">
                                    <span class="left">Last Bid </span>7 mins ago
                                </span>
                            </div>
                        </div>
                        <div class="auction-bidding">
                            <span class="bid-title">Bidding ends in</span>
                            <div class="countdown">
                                <div id="bid_counter6"></div>
                            </div>
                            <div class="bid-incr">
                                <span class="title">Bid Increment</span>
                                <h4>$3</h4>
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Upcoming Auction Section Ends Here =============-->


    <!--============= Call In Section Starts Here =============-->
    <section class="call-in-section">
        <div class="container">
            <div class="call-wrapper cl-white bg_img" data-background="{{asset('/user/images/call-in/call-bg.png')}}">
                <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                    <h3 class="title">Register for Free & Start Bidding Now!</h3>
                    <p>From cars to diamonds to iPhones, we have it all.</p>
                </div>
                <a href="sign-up.html" class="custom-button white">Register</a>
            </div>
        </div>
    </section>
    <!--============= Call In Section Ends Here =============-->


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