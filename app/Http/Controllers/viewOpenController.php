<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_categorie;
use App\Models\product;
use Illuminate\Support\Facades\DB;


class viewOpenController extends Controller
{
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

        // dd($categories->toArray());
        return view('user.index',compact('categories','products'));
    }

    function product($id){
        $product = product::where('products.id','=',$id)
                            ->join('product_categories','products.category_id','=','product_categories.id')
                            ->select('products.*','product_categories.name as category_name')
                            ->get();
        // dd($product->toArray());
        return view('user.product-details',compact('product'));
    }

    function category($id){
        $category = product::where('products.category_id','=',$id)
                            ->join('product_categories','products.category_id','=','product_categories.id')
                            ->select('products.*','product_categories.name as category_name')
                            ->get();
        // dd($category->toArray());
        return view('user.product',compact('category'));
    }

}
