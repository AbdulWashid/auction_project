
@extends('user.layouts.master')


@section('title','profile')
@section('main')
    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('user.index')}}">Home</a>
                </li>
                <li>
                    <a href="#0">My Account</a>
                </li>
                <li>
                    <span>Personal profile</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background=" {{asset('/user/images/banner/hero-bg.png')}}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->

        <!--============= Dashboard Section Starts Here =============-->
        <section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-7 col-lg-4">
                        <div class="dashboard-widget mb-30 mb-lg-0 sticky-menu">
                            <div class="user">
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="{{ $userdata->image ? asset($userdata->image) : asset('/user/images/dashboard/user.png') }}" alt="user">
                                    </div>
                                    <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                    <input type="file" id="profile-pic" class="d-none">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#0">{{$userdata->name}}</a></h5>
                                </div>
                            </div>
                            <ul class="dashboard-menu">
                                <li>
                                    <a href="{{route('user.dashboard')}}"><i class="flaticon-dashboard"></i>Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{route('user.recharge')}}" class="active"><i class="fas fa-credit-card"></i>Recharge</a>
                                </li>
                                <li>
                                    <a href="{{route('user.profile')}}"><i class="flaticon-settings"></i>Personal Profile </a>
                                </li>
                                <li>
                                    <a href="my-bid.html"><i class="flaticon-auction"></i>My Bids</a>
                                </li>
                                <li>
                                    <a href="winning-bids.html"><i class="flaticon-best-seller"></i>Winning Bids</a>
                                </li>
                                <li>
                                    <a href="notifications.html"><i class="flaticon-alarm"></i>My Alerts</a>
                                </li>
                                <li>
                                    <a href="my-favorites.html"><i class="flaticon-star"></i>My Favorites</a>
                                </li>
                                <li>
                                    <a href="referral.html"><i class="flaticon-shake-hand"></i>Referrals</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="dash-pro-item mb-30 dashboard-widget">
                                    <div class="header">
                                        <h4 class="title">Wallet Recharge</h4>
                                    </div>
                                    <ul class="dash-pro-body">
                                        <li>
                                            <div class="info-name">Amount</div>
                                            <div class="info-value">  ₹ {{$wallet->balance}}  </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="dash-pro-item mb-30 dashboard-widget">
                                    <div class="header">
                                        <h4 class="title"> Recharge</h4>
                                    </div>
                                    <ul class="dash-pro-body">
                                        <li>
                                            {{-- <form action="{{route('user.wallet.createOrder')}}" method="post" class="d-flex"> --}}
                                                {{-- @csrf --}}
                                                    <label for="amount" class="info-name">Amount</label>
                                                    <input type="number" name="amount" id="amount" required>
                                                    <button id="rechargeWallet">Recharge</button>
                                            {{-- </form> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            document.getElementById('rechargeWallet').addEventListener('click', function () {
                let amount = document.getElementById('amount').value;
    
                if (!amount || isNaN(amount) || amount <= 0) {
                    alert("Invalid amount!");
                    return;
                }
    
                fetch("{{ route('user.wallet.createOrder') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ amount: amount })
                })
                .then(response => response.json())
                .then(data => {
                    let options = {
                        "key": "{{ config('razorePay.key') }}",
                        "amount": amount * 100,
                        "currency": "INR",
                        "name": "Wallet Recharge",
                        "description": "Adding money to wallet",
                        "order_id": data.order_id,
                        "handler": function (response) {
                            fetch("{{ route('user.wallet.paymentSuccess') }}", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                },
                                body: JSON.stringify({
                                    payment_id: response.razorpay_payment_id,
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                alert(data.message);
                                location.reload();
                            });
                        }
                    };
    
                    let rzp1 = new Razorpay(options);
                    rzp1.open();
                });
            });
        </script>
    @endsection
    {{-- <div class="container">
        <h2>Wallet Balance: ₹{{ $wallet->balance ?? 0 }}</h2>
        
        <button class="btn btn-primary" id="rechargeWallet">Recharge Wallet</button>
        
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            document.getElementById('rechargeWallet').addEventListener('click', function () {
                let amount = prompt("Enter amount to recharge:");
    
                if (!amount || isNaN(amount) || amount <= 0) {
                    alert("Invalid amount!");
                    return;
                }
    
                fetch("{{ route('user.wallet.createOrder') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ amount: amount })
                })
                .then(response => response.json())
                .then(data => {
                    let options = {
                        "key": "{{ config('razorePay.key') }}",
                        "amount": amount * 100,
                        "currency": "INR",
                        "name": "Wallet Recharge",
                        "description": "Adding money to wallet",
                        "order_id": data.order_id,
                        "handler": function (response) {
                            fetch("{{ route('user.wallet.paymentSuccess') }}", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                },
                                body: JSON.stringify({
                                    payment_id: response.razorpay_payment_id,
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                alert(data.message);
                                location.reload();
                            });
                        }
                    };
    
                    let rzp1 = new Razorpay(options);
                    rzp1.open();
                });
            });
        </script>
    </div> --}}
