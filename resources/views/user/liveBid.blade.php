
@extends('user.layouts.master')
@section('title','Product')
@section('main')
@push('styles')
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
        /* Winner Container */
        .winner-container {
            position: fixed; /* Fixed positioning to overlay on top of everything */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000; /* High z-index to ensure it appears on top */
            pointer-events: none; /* Ensure clicks pass through to elements below */
        }

        /* Winner Text */
        .winner-text {
            font-size: 4rem;
            font-weight: bold;
            color: #ffd700;
            text-transform: uppercase;
            animation: zoomIn 1s ease-in-out, glow 2s infinite alternate;
            pointer-events: none; /* Ensure clicks pass through to elements below */
        }

        /* Confetti Animation */
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #ff69b4;
            animation: confetti-fall 2s ease-in-out infinite;
            pointer-events: none; /* Ensure clicks pass through to elements below */
        }

        .confetti:nth-child(2) {
            background-color: #00ff00;
            animation-delay: 0.5s;
        }

        .confetti:nth-child(3) {
            background-color: #00bfff;
            animation-delay: 1s;
        }

        .confetti:nth-child(4) {
            background-color: #ff4500;
            animation-delay: 1.5s;
        }

        .confetti:nth-child(5) {
            background-color: #ffd700;
            animation-delay: 2s;
        }

        /* Keyframes for Animations */
        @keyframes zoomIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 5px #ffd700, 0 0 10px #ffd700, 0 0 20px #ffd700;
            }
            100% {
                text-shadow: 0 0 10px #ffd700, 0 0 20px #ffd700, 0 0 30px #ffd700;
            }
        }

        @keyframes confetti-fall {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
@endpush
@php //php for get highest bid from DB
    $highestBid = $product->bid_start_price;
    foreach ($bidHistory as $bidHist){
        if($bidHist->amount > $highestBid){
            $highestBid = $bidHist->amount;
        }
        // $is_winner = ($bidHist->is_winner === 'true' || $bidHist->is_winner === true) ? true : null;
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
    {{-- winner & sold animation div --}}
<div class="winner-container text-center" style="display: none;"> 
    <div class="winner-text display-1 fw-bold text-warning"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
</div>

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
                                    <h3><span>₹{{number_format($wallet,2)}}</span></h3>
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
                                        value="{{ old('newBid', round($highestBid+$highestBid*5/100)) }}" required>
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

@php // time get for reverset timer by DB
    use Carbon\Carbon;
    // Convert string to Carbon instance
    $endTime = $product->end_at ? Carbon::parse($product->end_at)->toIso8601String() : null;
    $reverseTimeMini = $bidHistory->isNotEmpty() ? Carbon::parse($bidHistory[0]->created_at)->addSeconds(30)->toIso8601String() : null;
@endphp
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if(session('error'))  
<script>// sweet alert on bid submit error 
    walletRecharge();
</script>
@endif

<script>  
    $(document).ready(function(){

        // sweet alert on bid submit start
            // function declare for wallet recharge
            function walletRecharge(){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please, recharge wallet to submit a bid",
                    showCancelButton: true, // Enable the Cancel button
                    confirmButtonText: 'Okay', // Confirm button text
                    cancelButtonText: 'Later', // Cancel button text
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{route('user.recharge')}}";
                    }
                });
            }
            var wallet = {{$wallet}};
            $('.product-bid-form').submit(function(event){
                event.preventDefault();
                var newBid = $('#newBid').val();
                if(newBid > wallet/2){
                    walletRecharge();
                }
                else{
                    $(this).off("submit").submit();
                }
            });
        // sweet alert on bid submit end

        // script for reverse counter start
            couter_bid = $('#couter_bid');

            var reverseTime = "{{$endTime}}";
            var reverseTimeMini = "{{$reverseTimeMini}}";
            
            reverseTime = reverseTimeMini ? reverseTimeMini : reverseTime;
            var countDownDate = new Date(reverseTime).getTime();
            // Update the count down every 1 second
            var reverseTimer = setInterval(function() {
                // Get today's date and time
                var now = new Date().getTime();
                    
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                    
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                couter_bid.html(days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ") ;
                    
                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(reverseTimer);
                    couter_bid.html('Expired');
                }
            }, 1000);
        // script for reverse counter end

        //product price detail and form validation start
            function reload( bid = 0){
                highestBid = bid ? bid : {{$highestBid}};
                highestBid = highestBid;
                $('.price').html('₹'+highestBid.toLocaleString('en-IN'));
                $('.info').html('₹' + Math.round(highestBid * 5/100).toLocaleString('en-IN'));
                $('#newBid').val(Math.round(highestBid + highestBid*5/100));
                $('.product-bid-form').validate({
                    rules:{
                        newBid:{
                            required: true,
                            min: Math.round(highestBid + (highestBid*5/100)),
                        }
                    },
                    messages: {
                        newBid: {
                            required: "Please enter your Bid",
                            min: "Please, Enter Minimum Bid  " + Math.round(+highestBid + (+highestBid*5/100)),
                        },
                    },
                });
            }
            reload();
        //product price detail and form validation end

        // script for pusher start
            var pusher = new Pusher("{{ env('PUSHER_APP_KEY') }}", {
                cluster: "{{ env('PUSHER_APP_CLUSTER') }}",
                encrypted: true
            });
                //   pusher for current highest bid
            var bidChannel = pusher.subscribe('liveBidChannel'+{{$product->id}});
            bidChannel.bind('liveBidEvent'+{{$product->id}}, function(data) {
            if(data.amount > highestBid){
                $('#bidHistory').prepend(`<tr><td> ${data.name}  </td><td> ${data.amount} </td></tr>`); // row append in table

                reload(data.amount); // product price detail reload

                countDownDate = new Date(data.created_at).getTime();
            }
            });
            //   pusher for declared winner
            var winnerChannel = pusher.subscribe('winnerChannel_'+{{$product->id}});
            winnerChannel.bind('winnerEvent_'+{{$product->id}}, function(data) {
                $(".winner-container").fadeIn(500, function () {
                    // Add a class to start the animation (if needed)
                    if(data.user_id == {{Auth::id()}}){
                        $('.winner-text').html('you are Winner');
                    }else{
                        $('.winner-text').html('Sold');
                    }
                    $(".winner-text").addClass("animate");
                });
            });
        // script for pusher end
    });
</script>
@if($winner->toArray())
<script>
  var winner = {!! json_encode($winner->toArray()) !!};

    $(".winner-container").fadeIn(500, function () {
        // Add a class to start the animation (if needed)
        if(winner[0].user_id == {{Auth::id()}}){
            $('.winner-text').html('you are Winner');
        }else{
            $('.winner-text').html('Sold');
        }
        $(".winner-text").addClass("animate");
    });
</script>
@endif

@endpush

@endsection