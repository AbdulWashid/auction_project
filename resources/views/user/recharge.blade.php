
@extends('user.layouts.master')


@section('title','profile')
@section('main')
@push('styles')
<style>
    .scrollable-history {
    max-height: 300px; /* Set your desired fixed height */
    overflow-y: auto; /* Enable vertical scrolling */
    padding-right: 10px; /* Optional: Add some padding to avoid content touching the scrollbar */
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
                    <a href="#0">My Account</a>
                </li>
                <li>
                    <span>Wallet</span>
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
                            {{-- wallet amount --}}
                            <div class="col-12">
                                <div class="dash-pro-item mb-30 dashboard-widget">
                                    <div class="header">
                                        <h4 class="title">Wallet Recharge</h4>
                                    </div>
                                    <ul class="dash-pro-body">
                                        <li>
                                            <div class="info-name">Amount</div>
                                            @php
                                                $total=0;
                                                foreach($wallet as $amount){
                                                    if($amount->type == 'deposit'){
                                                        $total = $total + $amount->balance;
                                                    }
                                                    else{
                                                        $total = $total - $amount->balance;
                                                    }
                                                }
                                            @endphp
                                            <div class="info-value">  <h2> ₹{{ $total }} </h2> </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- My account Detail --}}
                            <div class="col-12">
                                <div class="dash-pro-item mb-30 dashboard-widget">
                                    <div class="header">
                                        <h4 class="title">MyAccount detail</h4>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                    <ul class="dash-pro-body">
                                        <li>
                                            <div class="info-name">Name</div>
                                            <div class="info-value">Abdul Washid</div>
                                        </li>
                                        <li>
                                            <div class="info-name">VPA</div>
                                            <div class="info-value">abdulwashid25@okicici</div>
                                        </li>
                                        <li>
                                            <div class="info-name">account No.</div>
                                            <div class="info-value">7770824060</div>
                                        </li>
                                        <li>
                                            <div class="info-name">iffsc</div>
                                            <div class="info-value">NeeMUC0BOB</div>
                                        </li>
                                    </ul>
                                    <ul class="dash-pro-body">
                                        {!! $qrCode !!}
                                    </ul></div>
                                </div>
                            </div>
                            {{-- wallet recharge form --}}
                            <div class="col-12">
                                <div class="dash-pro-item mb-30 dashboard-widget">
                                    <div class="header">
                                        <h4 class="title"> Recharge</h4>
                                    </div>
                                    <ul class="dash-pro-body">
                                        <li>
                                            <form action="{{ route('user.payment') }}" method="post" class="container mt-4">
                                                @csrf
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="amount" class="form-label">Amount</label>
                                                        <input type="number" name="balance" id="amount" class="form-control" required>
                                                        @error('balance')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="transaction_id" class="form-label">Transaction ID</label>
                                                        <input type="text" name="transaction_id" id="transaction_id" class="form-control" required>
                                                        @error('transaction_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary" id="rechargeWallet">Recharge</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- user wallet History --}}
                            <div class="col-12">
                                <div class="dash-pro-item mb-30 dashboard-widget">
                                    <div class="header">
                                        <h4 class="title"> History</h4>
                                    </div>
                                    <div class="dash-pro-body scrollable-history">
                                            
                                            @forelse($wallet as $amount)
                                                <div class="transaction-item">
                                                    <div class="info-name text-start">
                                                        <span class="date">{{ $amount->created_at->format('d-M-Y') }}</span>
                                                        @if($amount->status == 'approved')
                                                            @if($amount->type == 'deposit')
                                                                <span class="text-success">Deposit</span>
                                                            @else
                                                                <span class="text-danger">Withdraw</span>
                                                            @endif
                                                        @elseif($amount->status == 'cancelled')
                                                         <span class="text-danger">Cancelled give correct transaction Id</span>
                                                        @else
                                                         <span class="text-warning">Pending for approved</span>
                                                        @endif
                                                        
                                                    </div>
                                                    <div class="info-value text-end">
                                                         <h3> {{ $amount->balance }} </h3>
                                                    </div>
                                                </div>
                                                @empty
                                                 <div class="text-center text-muted">No transaction found</div>
                                            @endforelse
                                            
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@push('scripts') <!-- recharge success alert -->
    @if(session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                });
        </script>
    @endif
@endpush
@endsection
            