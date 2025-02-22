
@extends('user.layouts.master')


@section('title','Product')
@section('main')
    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('user.index')}}">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>{{$products[0]->category_name}}</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="{{asset('/user/images/banner/hero-bg.png')}}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Featured Auction Section Starts Here =============-->
    <section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="section-header cl-white mw-100 left-style">
                <h3 class="title">Bid on These Featured Auctions!</h3>
            </div>
            <div class="row justify-content-center mb-30-none">
            @foreach($products as $product)
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item" data-aos="zoom-out-up" data-aos-duration="1000">
                        <div class="auction-thumb">
                            <a href="{{route('user.product',$product->id)}}"><img src="{{asset($product->image)}}" alt="product"></a>
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
                                        <div class="amount">₹{{$product->bid_start_price}}</div>
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
                @if($loop->iteration == 3)
                    @break
                @endif
            @endforeach
            </div>
        </div>
    </section>
    <!--============= Featured Auction Section Ends Here =============-->


    <!--============= Product Auction Section Starts Here =============-->
    <div class="product-auction padding-bottom">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-4 mb-50">
                    <div class="widget">
                            <form action="{{route('user.category',$products[0]->category_id)}}" method="get">
                            <h5 class="title">Filter by Price</h5>
                            <div class="widget-body">
                                <div id="slider-range"></div>
                                <div class="price-range">
                                    <label for="amount">Price :</label>
                                    <input name="price_range" type="text" id="amount" readonly>
                                </div>
                            </div>
                            <div class="text-center mt-20">
                                <button type="submit" class="custom-button">Filter</button>
                            </div>
                        </form>
                        </div>
                    <div class="widget">
                        <h5 class="title">Auction Type</h5>
                        <div class="widget-body">
                            <div class="widget-form-group">
                                <input type="checkbox" name="check-by-type" id="check1">
                                <label for="check1">Live Auction</label>
                            </div>
                            <div class="widget-form-group">
                                <input type="checkbox" name="check-by-type" id="check2">
                                <label for="check2">Timed Auction</label>
                            </div>
                            <div class="widget-form-group">
                                <input type="checkbox" name="check-by-type" id="check3">
                                <label for="check3">Buy Now</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mb-50">
                    <div class="product-header mb-40 style-2">
                        <div class="product-header-item">
                            <div class="item">Sort By : </div>
                            <select name="sort-by" class="select-bar">
                                <option value="all">All</option>
                                <option value="name">Name</option>
                                <option value="date">Date</option>
                                <option value="type">Type</option>
                                <option value="car">Car</option>
                            </select>
                        </div>
                        <div class="product-header-item">
                            <div class="item">Show : </div>
                            <select name="sort-by" class="select-bar">
                                <option value="09">06</option>
                                <option value="21">09</option>
                                <option value="30">30</option>
                                <option value="39">39</option>
                                <option value="60">60</option>
                            </select>
                        </div>
                        <form class="product-search ml-auto">
                            <input type="text" placeholder="Item Name">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="row mb-30-none justify-content-center">
                        @foreach($products as $product)
                        <div class="col-sm-10 col-md-6">
                            <div class="auction-item" data-aos="zoom-out-up" data-aos-duration="1000">
                                <div class="auction-thumb">
                                    <a href="{{route('user.product',$product->id)}}"><img src="{{asset($product->image)}}" alt="product"></a>
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
                                                <div class="amount">₹{{$product->bid_start_price}}</div>
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
                                            <div id="bid_counter10"></div>
                                        </div>
                                        <span class="total-bids">30 Bids</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{route('user.product',$product->id)}}" class="custom-button">Submit a bid</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- pagination -->
                     <ul class="pagination">
                        @if(!$products->onFirstPage())
                            <li >
                                <a href="{{$products->url(1) }}"><i class="flaticon-left-arrow"></i></a>
                            </li>
                            <li>
                                <a href="{{$products->previousPageUrl()}}">{{ $products->currentPage() - 1 }}</a>
                            </li>
                        @endif
                        <li>
                            <a href="#0" class="active">{{ $products->currentPage() }}</a>
                        </li>
                        @if($products->hasMorePages())
                            <li>
                                <a href="{{$products->nextPageUrl()}}">{{ $products->currentPage() + 1 }}</a>
                            </li>
                            <li>
                                <a href="{{$products->lastPage()}}"><i class="flaticon-right-arrow"></i></a>
                            </li>
                        @endif
                    </ul> 
                </div>
            </div>
        </div>
    </div>
    <!--============= Product Auction Section Ends Here =============-->
@endsection