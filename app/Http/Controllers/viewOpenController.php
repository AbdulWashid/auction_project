<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_categorie;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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

        $products = product::
                    orderBy('id','desc')
                    ->join('product_categories','products.category_id','=','product_categories.id')
                    ->select('products.*','product_categories.name as category_name','product_categories.image as category_image')
                    ->get();

        $latestProducts = Product::
                            where('created_at', '>=', Carbon::now()->subDays(7))
                            ->orderBy('created_at', 'desc')
                            ->limit(6)
                            ->get();

        return view('user.index',compact('categories','products','latestProducts'));
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
                            ->paginate(4);

        return view('user.products',[ 'products' => $product]);
    }
    
    // product details page open
    function product($id){
        $product = product::
                            join('product_categories','products.category_id','=','product_categories.id')
                            ->select('products.*','product_categories.name as category_name')
                            ->findOrFail($id);
        return view('user.product-details',compact('product'));
    }

}
