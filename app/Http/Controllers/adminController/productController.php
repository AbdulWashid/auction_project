<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Product_categorie;
use Illuminate\Support\Facades\File;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = product::orderBy('id','desc')
        ->leftjoin('product_categories','products.category_id','=','product_categories.id')
        ->select('products.*','product_categories.name as category_name')
        ->get();
        return view('Admin.product',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Product_categorie::all();
        // $category = $category->toArray();
        // dd($category);
        return view('Admin.productAdd',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        $request->validate([
            'Pname'         => ['required',],
            'category_id'   => ['required',],
            'sale_price'    => ['required',],
            'bid_price'     => ['required',],
            'start_at'      => ['required',],
            'end_at'        => ['required',],
            'description'   => ['required',],
            'main_image'    => ['required','image'],
            'more_images.*' => ['image']
        ]);
        
        
        // for image
        $main_image = $request->file('main_image');
        $main_image_name = time().rand().$request->Pname. "." .$main_image->getClientOriginalExtension();
        $path = public_path('user\images\product');
        $main_image->move($path,$main_image_name);
        
        if($request->more_images){
            $uploadedFiles = $request->file('more_images');
            $filePaths = [];
            foreach ($uploadedFiles as $file) {
                $name = time().rand().$request->Pname. "." .$file->getClientOriginalExtension();
                $path = public_path('user\images\product');
                $file->move($path,$name);
                $filePaths[] = 'user\images\product\\'.$name;
            }
        }
        


        $data = new product;        
        $data->category_id = $request->category_id;
        $data->name = $request->Pname;
        $data->sale_price = $request->sale_price;
        $data->bid_start_price = $request->bid_price;
        $data->start_at = date('Y-m-d H:i:s', strtotime($request->start_at));
        $data->end_at = date('Y-m-d H:i:s', strtotime($request->end_at));
        $data->description = $request->description;
        $data->image = 'user\images\product\\'.$main_image_name;
        if($request->more_images){
            $data->moreImages = json_encode($filePaths);
        }
        $data->save();

        return redirect()->route('admin.product.index')->with('success', 'Product Add successfully.');
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
        
        $category = Product_categorie::all();
        $data = product::findOrFail($id);

        return view('Admin.productAdd',compact('data','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = product::findOrFail($id);
        $request->validate([
            'Pname'         => ['required',],
            'sale_price'    => ['required',],
            'bid_price'     => ['required',],
            'start_at'      => ['required',],
            'end_at'        => ['required',],
            'description'   => ['required',],
            'main_image'    => ['image'],
            'more_images.*' => ['image']
        ]);
        //delete main image and store new image
        if($request->has('main_image')){
            // delete existing image
            $image = Public_path($data->image);
            if(File::exists($image)){
                File::delete($image);
            }

            //store new image
            $image = $request->file('main_image');
            $main_image_name = time().rand().$request->Pname. "." .$image->getClientOriginalExtension();
            $path = public_path('user\images\product');
            $image->move($path,$main_image_name);
        }
        

        // store file in db and image save
        if($request->has('more_images')){
            //optional image
            if($data->moreImages){
                // delete previous images
                $deleteImage = json_decode($data->moreImages);
                foreach($deleteImage as $deleteImage){
                    $d_image = Public_path($deleteImage);
                    if(File::exists($d_image)){
                        File::delete($d_image);
                    }
                }
            }

            $uploadedFiles = $request->file('more_images');
            $filePaths = [];
            foreach ($uploadedFiles as $file) {
                $name = time().rand().$request->Pname. "." .$file->getClientOriginalExtension();
                $path = public_path('user\images\product');
                $file->move($path,$name);
                $filePaths[] = 'user\images\product\\'.$name;
            }
        }
        
        //store in db
        if($request->has('category_id')){
            $data->category_id = $request->category_id;
        }
        $data->name = $request->Pname;
        $data->sale_price = $request->sale_price;
        $data->bid_start_price = $request->bid_price;
        $data->start_at = date('Y-m-d H:i:s', strtotime($request->start_at));
        $data->end_at = date('Y-m-d H:i:s', strtotime($request->end_at));
        $data->description = $request->description;
        if($request->main_image){
            $data->image = 'user\images\product\\'.$main_image_name;
        }
        if($request->more_images){
            $data->moreImages = json_encode($filePaths);
        }
        $data->save();

        return redirect()->route('admin.product.index')->with('success', 'category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = product::findOrFail($id);
        //optional image delete
        if($data->moreImages){
            $images = json_decode($data->moreImages);
            foreach($images as $image){
                $image_file = Public_path($image);
                if(File::exists($image_file)){
                    File::delete($image_file);
                }
            }
        }

        // main image delete
        $image = Public_path($data->image);
        if(File::exists($image)){
            File::delete($image);
        }


        $data->delete();
        return back()->with('success', 'Category deleted successfully.');
    }
}
