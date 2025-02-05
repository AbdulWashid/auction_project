
@extends('user.layouts.master')


@section('title','Sbidu')
@section('main')
    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section-2 bg_img" data-background="{{asset('/user/images/banner/banner-bg-3.png')}}">
        <div class="container">
            <div class="row align-items-center justify-content-between align-items-center">
                <div class="col-md-10 col-lg-6 col-xl-6">
                    <div class="banner-content cl-white">
                        <h5 class="cate" data-aos="fade-down" data-aos-duration="1100">Enjoy Exclusive</h5>
                        <h1 class="title" data-aos="zoom-out-down" data-aos-duration="1200"><span class="d-xl-block">Hot Deal</span> For You</h1>
                        <p class="prs" data-aos="zoom-out-up" data-aos-duration="1300">
                            We’re constantly bringing new properties market so keep visiting our website that you don’t miss out on the next opportunity.
                        </p>
                        <a href="#0" class="custom-button yellow btn-large" data-aos="fade-down" data-aos-duration="1100">Get Started</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-6 col-xl-6 d-none d-lg-block" data-aos="fade-right" data-aos-duration="1200">
                    <div class="banner-thumb-3">
                        <img src="{{asset('/user/images/banner/banner-3.png')}}" alt="banner">
                    </div>
                </div>                
            </div>
        </div>
        <div class="banner-shape-2 d-none d-lg-block">
            <img src="{{asset('/user/css/img/banner-shape-3.png')}}" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <!--============= Hightlight Slider Section Starts Here =============-->
    <div class="browse-slider-section mt--140">
        <div class="container">
            <div class="section-header-2 mb-4">
                <div class="left">
                    <h6 class="title cl-white cl-lg-black pl-0">Browse the highlights</h6>
                </div>
                <div class="slider-nav">
                    <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                    <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
            <div class="m--15">
                <div class="browse-slider owl-theme owl-carousel">
                    <a href="#0" class="browse-item">
                        <img src="{{asset('/user/images/auction/01.png')}}" alt="auction">
                        <span class="info">Vehicles</span>
                    </a>
                    <a href="#0" class="browse-item">
                        <img src="{{asset('/user/images/auction/02.png')}}" alt="auction">
                        <span class="info">Jewelry</span>
                    </a>
                    <a href="#0" class="browse-item">
                        <img src="{{asset('/user/images/auction/03.png')}}" alt="auction">
                        <span class="info">Watches</span>
                    </a>
                    <a href="#0" class="browse-item">
                        <img src="{{asset('/user/images/auction/04.png')}}" alt="auction">
                        <span class="info">Electronics</span>
                    </a>
                    <a href="#0" class="browse-item">
                        <img src="{{asset('/user/images/auction/05.png')}}" alt="auction">
                        <span class="info">Sports</span>
                    </a>
                    <a href="#0" class="browse-item">
                        <img src="{{asset('/user/images/auction/06.png')}}" alt="auction">
                        <span class="info">Real Estate</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--============= Hightlight Slider Section Ends Here =============-->


    <!--============= Feture Auction Section Starts Here =============-->
    <section class="feature-auction-section padding-bottom padding-top bg_img" data-background="{{asset('/user/images/auction/featured/featured-bg-1.jpg')}}">
        <div class="container">
            <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                <h2 class="title">Featured Items</h2>
                <p>Bid and win great deals,Our auction process is simple, efficient, and transparent.</p>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/car/auction-1.jpg')}}" alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="product-details.html">2018 Hyundai Sonata</a>
                            </h6>
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
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter23"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/jewelry/auction-2.jpg')}}" alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="product-details.html">Ring With Clear Stone Accents</a>
                            </h6>
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
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter24"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/watches/auction-2.jpg')}}" alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="product-details.html">Lady’s Vintage Rolex Datejust</a>
                            </h6>
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
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter25"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-wrapper">
                <a href="#0" class="normal-button">See All Auction</a>
            </div>
        </div>
    </section>
    <!--============= Feture Auction Section Ends Here =============-->


    <!--============= Upcoming Auction Section Starts Here =============-->
    <section class="upcoming-auction padding-bottom">
        <div class="container">
            <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                <h2 class="title">Upcoming Auctions</h2>
                <p>You are welcome to attend and join in the action at any of our upcoming auctions.</p>
            </div>
        </div>
        <div class="filter-wrapper">
            <div class="container">
                <ul class="filter">
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
            <div class="auction-wrapper-5 m--15">
                <div class="auction-item-5 time" data-aos="fade-down" data-aos-duration="1100">
                    <div class="auction-inner">
                        <div class="upcoming-badge" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </div>
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/upcoming/upcoming-1.png')}}" alt="upcoming"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">Apple Macbook Pro Laptop</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
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
                <div class="auction-item-5 live" data-aos="zoom-out-up" data-aos-duration="1200">
                    <div class="auction-inner">
                        <div class="upcoming-badge" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </div>
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/upcoming/upcoming-2.png')}}" alt="upcoming"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">14k Gold Geneve Watch,24.5g</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
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
                <div class="auction-item-5 buy" data-aos="zoom-out-down" data-aos-duration="1400">
                    <div class="auction-inner">
                        <div class="upcoming-badge" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </div>
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/upcoming/upcoming-3.png')}}" alt="upcoming"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">2009 Toyota Prius (Medford, NY 11763)</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
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
                <div class="auction-item-5 time" data-aos="fade-down" data-aos-duration="1100">
                    <div class="auction-inner">
                        <div class="upcoming-badge" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </div>
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/upcoming/upcoming-4.png')}}" alt="upcoming"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">Canon EOS Rebel T6I Digital Camera</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
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
                <div class="auction-item-5 buy" data-aos="zoom-out-down" data-aos-duration="1400">
                    <div class="auction-inner">
                        <div class="upcoming-badge" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </div>
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/upcoming/upcoming-5.png')}}" alt="upcoming"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">14K White Gold 185.60 Grams 5.95 Carats.....</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
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
                                <div id="bid_counter7"></div>
                            </div>
                            <div class="bid-incr">
                                <span class="title">Bid Increment</span>
                                <h4>$3</h4>
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
                <div class="auction-item-5 live" data-aos="zoom-out-up" data-aos-duration="1200">
                    <div class="auction-inner">
                        <div class="upcoming-badge" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </div>
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/upcoming/upcoming-6.png')}}" alt="upcoming"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">.6 Gram Pure Gold Nugget</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
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
                                <div id="bid_counter8"></div>
                            </div>
                            <div class="bid-incr">
                                <span class="title">Bid Increment</span>
                                <h4>$3</h4>
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
                <div class="auction-item-5 time" data-aos="fade-down" data-aos-duration="1100">
                    <div class="auction-inner">
                        <div class="upcoming-badge" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </div>
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/upcoming/upcoming-7.png')}}" alt="upcoming"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">Magnifying Glasses, Jewelry Loupe...</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
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
                                <div id="bid_counter9"></div>
                            </div>
                            <div class="bid-incr">
                                <span class="title">Bid Increment</span>
                                <h4>$3</h4>
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
                <div class="auction-item-5 live" data-aos="zoom-out-up" data-aos-duration="1200">
                    <div class="auction-inner">
                        <div class="upcoming-badge" title="Upcoming Auction">
                            <i class="flaticon-auction"></i>
                        </div>
                        <div class="auction-thumb">
                            <a href="product-details.html"><img src="{{asset('/user/images/auction/upcoming/upcoming-8.png')}}" alt="upcoming"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        </div>
                        <div class="auction-content">
                            <div class="title-area">
                                <h6 class="title">
                                    <a href="product-details.html">"Small Primitive Shell" Glass Sculpture</a>
                                </h6>
                                <div class="list-area">
                                    <span class="list-item">
                                        <span class="list-id">Listing ID</span>14033488
                                    </span>
                                    <span class="list-item">
                                        <span class="list-id">Item #</span>0900-027867
                                    </span>
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
                                <div id="bid_counter10"></div>
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


    <!--============= How Section Starts Here =============-->
    <section class="how-video-section pos-rel">
        <div class="popular-bg bg_img" data-background="{{asset('/user/images/auction/popular/popular-bg2.png')}}"></div>
        <div class="how-video-shape bg_img d-none d-md-block" data-background="{{asset('/user/css/img/how-video.png')}}"></div>
        <div class="container">
            <div class="how-video-wrapper">
                <div class="how-video-area">
                    <a href="https://www.youtube.com/watch?v=Mj3QejzYZ70" class="popup">
                        <h5 class="title">Watch Our Videos</h5>
                        <div class="video-button">
                            <i class="flaticon-right-arrow-1"></i>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="how-wrapper section-bg shadow-style">
                <div class="section-header text-lg-left">
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
                            <div class="how-thumb" data-aos="zoom-out-up" data-aos-duration="1000">
                                <img src="{{asset('/user/images/how/how2.png')}}" alt="how">
                            </div>
                            <div class="how-content" data-aos="zoom-out-up" data-aos-duration="1200">
                                <h4 class="title">Bid</h4>
                                <p>Bidding is free Only pay if you win</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="how-item">
                            <div class="how-thumb" data-aos="zoom-out-up" data-aos-duration="1000">
                                <img src="{{asset('/user/images/how/how3.png')}}" alt="how">
                            </div>
                            <div class="how-content" data-aos="zoom-out-up" data-aos-duration="1200">
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


    <!--============= Call In Section Starts Here =============-->
    <section class="call-in-section padding-top">
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