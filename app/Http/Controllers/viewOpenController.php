<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_categorie;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class viewOpenController extends Controller
{
    // home page open
    function index(){
        
        $categories = Product_categorie::
                    leftjoin('products','product_categories.id','=','products.category_id')
                    ->Distinct()
                    ->select('product_categories.*')
                    ->withCount('products as closing_stock')
                    ->get();

        // $products = product::
        //             orderBy('id','desc')
        //             ->join('product_categories','products.category_id','=','product_categories.id')
        //             ->leftjoin('carts','products.id','=','carts.product_id')
        //             ->select('products.*','product_categories.name as category_name','product_categories.image as category_image','carts.id as cart_id')
        //             ->where('products.end_at','>=',Carbon::now())
        //             ->get();
        $products = Product::orderBy('products.id', 'desc')
                    ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
                    ->leftJoin('carts', function($join) {
                        $join->on('products.id', '=', 'carts.product_id')
                            ->where('carts.user_id', Auth::id()); // Ensure cart entry matches the logged-in user
                    })
                    ->with(['bids' => function ($query){
                        $query->where('is_winner', '=','true');
                    }])
                    ->select('products.*', 
                            'product_categories.name as category_name', 
                            'product_categories.image as category_image', 
                            'carts.id as cart_id') // If cart exists, get the cart ID
                    ->where('products.end_at', '>=', Carbon::now()) // Only products that are still active
                    ->get();
// dd($products->toArray());
        $latestProducts = Product::
                            where('created_at', '>=', Carbon::now()->subDays(7))
                            ->where('end_at','>=',Carbon::now())
                            ->orderBy('created_at', 'desc')
                            ->limit(6)
                            ->get();

        $liveProducts = Product::
                            whereRaw('NOW() BETWEEN start_at AND end_at')
                            ->where('end_at','>=',Carbon::now())
                            ->orderBy('created_at', 'desc')
                            ->limit(6)
                            ->get();

        return view('user.index',compact('categories','products','latestProducts','liveProducts'));
    }

    // category wise product page open
    function category(Request $request ,$id){

        if($request->has('price_range')){
            $priceRange = $request->price_range;
            
            // Step 1: Remove the `$` symbol from the string
            $priceRange = str_replace('₹', '', $priceRange);

            // Step 2: Split the string by the hyphen
            $prices = explode('-', $priceRange);

            // Step 3: Trim the values to remove extra spaces
            $minPrice = trim($prices[0]);
            $maxPrice = trim($prices[1]);

            // Step 4: Convert the values to integers
            $minPrice = (int)$minPrice;
            $maxPrice = (int)$maxPrice;
            // dd($minPrice,$maxPrice);
        }

        $product = product::where('products.category_id','=',$id)
                            ->orderBy('products.id','desc')
                            ->join('product_categories','products.category_id','=','product_categories.id')
                            ->select('products.*','product_categories.name as category_name')
                            ->where('products.end_at','>=',Carbon::now())
                            ->paginate(4);

        return view('user.products',[ 'products' => $product]);
    }
    
    // product details page open
    function product($id){
        $product = product::
                            join('product_categories','products.category_id','=','product_categories.id')
                            ->select('products.*','product_categories.name as category_name')
                            ->with(['bids' => function($query){
                                $query->where('is_winner','=','true');
                            }])
                            ->findOrFail($id);

        // $product = Product::join('product_categories', 'products.category_id', '=', 'product_categories.id')
        //         ->select('products.*', 'product_categories.name as category_name')
        //         ->whereHas('bids', function ($query) {
        //             $query->where('is_winner', '=', 'true');
        //         })
        //         ->with(['bids' => function ($query) {
        //             $query->where('is_winner', '=', 'true');
        //         }])
        //         ->findOrFail($id);
        //                     dd($product->toArray());
        return view('user.product-details',compact('product'));
    }

    

}
