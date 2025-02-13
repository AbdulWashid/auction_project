    <!--============= Cart Section Starts Here =============-->
    
    <div class="cart-sidebar-area">
        <div class="top-content">
            <a href="{{route('user.index')}}" class="logo">
                <img src="{{asset('/user/images/logo/logo2.png')}}" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                @forelse ($cartPro as $product)
                    <div class="single-product-item" id="cart-product-{{$product->id}}">
                        <div class="thumb">
                            <a href="{{route('user.product',$product->product_id)}}"><img src="{{asset($product->image)}}" alt="shop"></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{route('user.product',$product->product_id)}}">{{$product->name}}</a></h4>
                            <div class="price"><span class="pprice">₹{{$product->bid_start_price}}</span></div>
                            <a href="#"  data-id="{{$product->id}}" class="remove-cart">Remove</a>
                        </div>
                    </div>
                @empty
                    <li>No products in your cart.</li>
                @endforelse
            </div>
        </div>
    </div>
    <!--============= Cart Section Ends Here =============-->

