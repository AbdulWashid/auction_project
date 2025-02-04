
@extends('user.layouts.master')


@section('title','Product')
@section('main')
@push('index_css')
    <style>
        .slide-inner{
            display: flex;
            justify-content: space-around;
        }
        .search-icon{
            display: flex;
            justify-content: space-around;
        }
    </style>
@endpush
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
                    <span>{{$product->category_name}}</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="{{asset('/user/images/banner/hero-bg.png')}}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->
<section class="product-details padding-bottom mt--240 mt-lg--440">
    <div class="container">
        <div class="product-details-slider-top-wrapper">
            <div class="product-details-slider owl-theme owl-carousel" id="sync1">
                <div class="slide-top-item">
                    <div class="slide-inner">
                        <img class="w-50 text-center" src="{{asset($product['image'])}}" alt="product">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-40-60-80">
            <div class="col-lg-4">
                <div class="product-sidebar-area">
                    <div class="product-single-sidebar mb-3">
                        <h6 class="title">This Auction Ends in:</h6>
                        <div class="countdown">
                            <div id="bid_counter1"></div>
                        </div>
                        <div class="side-counter-area">
                            <div class="side-counter-item">
                                <div class="thumb">
                                    <img src="{{asset('/user/images/product/icon1.png')}}" alt="product">
                                </div>
                                <div class="content">
                                    <h3 class="count-title"><span class="counter">61</span></h3>
                                    <p>Active Bidders</p>
                                </div>
                            </div>
                            <div class="side-counter-item">
                                <div class="thumb">
                                    <img src="{{asset('/user/images/product/icon2.png')}}" alt="product">
                                </div>
                                <div class="content">
                                    <h3 class="count-title"><span class="counter">203</span></h3>
                                    <p>Watching</p>
                                </div>
                            </div>
                            <div class="side-counter-item">
                                <div class="thumb">
                                    <img src="{{asset('/user/images/product/icon3.png')}}" alt="product">
                                </div>
                                <div class="content">
                                    <h3 class="count-title"><span class="counter">82</span></h3>
                                    <p>Total Bids</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="product-details-content">
                    <div class="product-details-header">
                        <h2 class="title text-end">{{$product->name}}</h2>
                    </div>
                    <ul class="price-table mb-30">
                        <li class="header">
                            <h5 class="current">Current Highest Bid</h5>
                            <h3 class="price">₹{{$product->bid_start_price}}</h3>
                        </li>
                        <li>
                            <span class="details">Bid Increment</span>
                            <h5 class="info">$50.00</h5>
                        </li>
                    </ul>
                    <div class="product-bid-area">
                                <form class="product-bid-form">
                                    <div class="search-icon">
                                        <img src="{{asset('/user/images/product/search-icon.png')}}" alt="product">
                                    </div>
                                    <input type="text" placeholder="Enter you bid amount">
                                    <button type="submit" class="custom-button">Submit a bid</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        Bid History
        <div class="table-responsive">
            <table class="table table-striped table-hover rounded">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> name</td>
                        <td> price</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>







@endsection