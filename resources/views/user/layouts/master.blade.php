<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('/user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/main.css')}}">

    <link rel="shortcut icon" href="{{asset('/user/images/favicon.png')}}" type="image/x-icon">
    @stack('index_css')
    @stack('liveBid_css')
</head>

<body>
    <!-- ============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here ============= -->


    @include('user.layouts.header')
    @include('user.layouts.cart')
    @yield('main')
    @include('user.layouts.footer')

    {{-- <script data-cfasync="false" src="{{('/user/js/email-decode.min.js')}}"></script> --}}
    <script src="{{asset('/user/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/user/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('/user/js/plugins.js')}}"></script>
    <script src="{{asset('/user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/user/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/user/js/aos.js')}}"></script>
    <script src="{{asset('/user/js/wow.min.js')}}"></script>
    <script src="{{asset('/user/js/waypoints.js')}}"></script>
    <script src="{{asset('/user/js/nice-select.js')}}"></script>
    <script src="{{asset('/user/js/counterup.min.js')}}"></script>
    <script src="{{asset('/user/js/owl.min.js')}}"></script>
    <script src="{{asset('/user/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('/user/js/yscountdown.min.js')}}"></script>
    <script src="{{asset('/user/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/user/js/main.js')}}"></script>
    @stack('SingleProductCountdown')
    @stack('liveBid_js')
    @stack('recharge_page_js')
    @if(Auth::check())
        <script>
            $(document).ready(function () {
                // product ramove from cart
                $(".cart-products").on("click", ".remove-cart", function () {
                    let itemId = $(this).data("id"); // Get product ID
                    let url = "{{ route('user.cart.remove', ':id') }}".replace(':id', itemId);

                    $.ajax({
                        url: url,
                        type: "DELETE",
                        data: {
                            _token: "{{ csrf_token() }}" // Laravel CSRF token
                        },
                        success: function (response) {
                            if (response.status === "success") {
                                $("#cart-product-" + itemId).fadeOut(500); // Remove row animation
                                $('#rating-' + itemId).removeClass('fas fa-star').addClass('far fa-star');
                                
                                if(response.cartCount == 0){
                                    $(".cart-products").html('<li>No products in your cart.</li>');
                                    $("#cartCount").html(''); // Clear cart count
                                }else {
                                    $("#cartCount").html('<span class="amount">' + response.cartCount + '</span>');
                                }
                            }
                        },
                        error: function (xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                });

                //product add in cart
                $(".rating").click(function () {
                    let itemId = $(this).data("id"); // Get product ID
                    let url = "{{ route('user.cart.add', ':id') }}".replace(':id', itemId);
                    let icon = $(this).find('i');
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}" // Laravel CSRF token
                        },
                        success: function (response) {
                            if (response.status === "success") {
                                icon.removeClass('far fa-star').addClass('fas fa-star');
                                $("#cartCount").html('<span class="amount">' + response.cartCount + '</span>'); 
                                if(response.cartCount == 1){
                                    $(".cart-products").html(response.element);
                                }
                                else{
                                    $(".cart-products").append(response.element);
                                }
                            }
                        },
                        error: function (xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                });
            });
        </script>
    @endif
</body>
</html>