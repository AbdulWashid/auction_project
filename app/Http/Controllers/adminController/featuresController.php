<?php

namespace App\Http\Controllers\adminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_feature;

class featuresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Product_feature::orderBy('product_id', 'desc')
                        ->join('products', 'product_features.product_id', '=', 'products.id')
                        ->select('products.name as product_name', 'product_features.feature_key', 'product_features.feature_value')
                        ->get()
        ;
        // dd($features->toArray());
        return view('Admin.feature', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
