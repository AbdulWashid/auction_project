
@extends('user.layouts.master')
@section('title','Product')
@section('main')
@push('liveBid_css')
    <style>
        .slide-inner{
            display: flex;
            justify-content: space-around;
        }
        .search-icon{
            display: flex;
            justify-content: space-around;
        }
        label.error{
            color:red;
            font-size:14px;
        }
    </style>
@endpush
@php //php for get highest bid from DB
    $highestBid = $product->bid_start_price;
    foreach ($bidHistory as $bidHist){
        if($bidHist->amount > $highestBid){
            $highestBid = $bidHist->amount;
        }
    }
@endphp
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

        <!--============= carousel Section start Here =============-->
        <div class="product-details-slider-top-wrapper">
            <div class="product-details-slider owl-theme owl-carousel" id="sync1">
                <div class="slide-top-item">
                    <div class="slide-inner">
                        <img class="w-50 text-center" src="{{asset($product['image'])}}" alt="product">
                    </div>
                </div>
            </div>
        </div>
        <!--============= carousel Section start Here =============-->
        
        <div class="row mt-40-60-80">
             <!--============= product Side area Section start Here =============-->
            <div class="col-lg-4">
                <div class="product-sidebar-area">
                    <div class="product-single-sidebar mb-3">
                        <h6 class="title">This Auction Ends in:</h6>
                        <div class="countdown">
                            <div id="couter_bid"></div>
                        </div>
                        <div class="side-counter-area">
                            <div class="side-counter-item">
                                <div class="thumb">
                                    <img src="{{asset('/user/images/product/icon1.png')}}" alt="product">
                                </div>
                                <div class="content">
                                    <h3 class="count-title"><span class="counter">₹61</span></h3>
                                    <p>Wallet Amount</p>
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
             <!--============= product Side area Section End Here =============-->
            <div class="col-lg-8">
                <div class="product-details-content">
                    <div class="product-details-header">
                        <h2 class="title text-end">{{$product->name}}</h2>
                    </div>
                    <ul class="price-table mb-30">
                        <li class="header">
                            <h5 class="current">Current Highest Bid</h5>
                            <h3 class="price">
                                {{-- current highest bid  --}}
                            </h3>
                        </li>
                        <li>
                            <span class="details">Bid Increment</span>
                            <h5 class="info"> 
                                {{-- current highest bid  --}}
                            </h5>
                        </li>
                    </ul>
                    <div class="product-bid-area">
                        <div class="text-center text-dark">Win  a Bid </div>
                                <form action={{route('user.new.bid',$product->id)}} method="POST" class="product-bid-form">
                                    @csrf
                                    <div class="search-icon">
                                        <img src="{{asset('/user/images/product/search-icon.png')}}" alt="product">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="newBid" placeholder="Enter you bid amount" name="newBid" 
                                        value="{{ old('newBid', $highestBid+$highestBid*5/100) }}" required>
                                        @error('newBid')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="custom-button">Submit a bid</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!--============= Table Section start Here =============-->
    <div class="container">
        <h4 class="text-center text-dark">Bid History</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody id="bidHistory">
                    @foreach($bidHistory as $bidHis)
                    <tr
                    @if($bidHis->user_id == Auth::id()) class='table-success' @endif
                    >
                        <td> {{$bidHis->name}}</td>
                        <td> {{$bidHis->amount}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--============= Table Section End Here =============-->
</section>

@push('liveBid_js')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>
    function reload( bid = 0){
        highestBid = bid ? bid : {{$highestBid}};
        highestBid = parseFloat(highestBid);
        $('.price').html('₹'+highestBid);
        $('.info').html('₹'+highestBid*5/100);
        $('#newBid').val(highestBid + highestBid*5/100);
        $('.product-bid-form').validate({
            rules:{
                newBid:{
                    required: true,
                    min: highestBid + (highestBid*5/100),
                }
            },
            messages: {
                newBid: {
                    required: "Please enter your Bid",
                    min: "Please, Enter Minimum Bid  " + (+highestBid + (+highestBid*5/100)),
                },
            }
        });
    }
    reload();
</script>
<script> // script for pusher
  var pusher = new Pusher("{{ env('PUSHER_APP_KEY') }}", {
    cluster: "{{ env('PUSHER_APP_CLUSTER') }}",
    encrypted: true
  });
  let cname = 'liveBidChannel'+{{$product->id}};
  var channel = pusher.subscribe(cname);
  channel.bind('liveBidEvent'+{{$product->id}}, function(data) {
    if(data.amount > highestBid){
        $('#bidHistory').prepend(`<tr><td> ${data.name}  </td><td> ${data.amount} </td></tr>`);
        reload(data.amount);
    }
  });
</script>

<script> // script for reverse counter
    $(document).ready( ()=>{
        element = $('#couter_bid');

        var countDownDate = new Date("{{$product->end_at}}").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
        // Get today's date and time
        var now = new Date().getTime();
            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        // Output the result in an element with id="demo"
        element.html(days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ") ;
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            element.html('Expired');
        }
        }, 1000);
    })
</script>
@endpush

@endsection
    