<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\product;
use Auth;

class cartController extends Controller
{
    public function remove(Request $request, $id){

        $cart = Cart::findOrFail($id);
        $cart->delete();
        $count = Cart::where('user_id', auth()->id())->count();
        return response()->json([
            'status' => 'success',
            'message' => 'Product removed from cart!',
            'cartCount' => $count,
        ]);
    }
    public function add(Request $request, $id){

        $duplicateCheck = Cart::where('user_id', auth()->id())->where('product_id', $id)->first();
        if($duplicateCheck){
            return response()->json([
                'status' => 'error',
                'message' => 'Product already in cart!',
            ]);
        }
        $cart = new Cart();
        $cart->user_id = Auth()->id();
        $cart->product_id = $id;
        $cart->save();
        $count = Cart::where('user_id', auth()->id())->count();

        $product = product::findOrFail($id);
        $element = '  
        <div class="single-product-item" id="cart-product-'.$cart->id.'">
            <div class="thumb">
                <a href="'.route('user.product', $product->id).'"><img src="'.asset($product->image).'" alt="shop"></a>
            </div>
            <div class="content">
                <h4 class="title"><a href="'.route('user.product', $product->id).'">'.$product->name.'</a></h4>
                <div class="price"><span class="pprice">₹'.$product->bid_start_price.'</span></div>
                <a href="#" data-id="'.$cart->id.'" class="remove-cart">Remove</a>
            </div>
        </div>';
    

        return response()->json([
            'status' => 'success',
            'message' => 'Product add from cart!',
            'cartCount' => $count,
            'element' => $element,
        ]);
    }
}
