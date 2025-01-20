<?php

namespace App\Http\Controllers\adminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product_categorie;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product_categorie::orderBy('id','desc')->get();
        
        return view('Admin.category',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.categoryAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required',],
            'image' => ['required','image']
        ]);
        
        $image = $request->file('image');
        $name = time().rand(). "." .$image->getClientOriginalExtension();
        $path = public_path('user\images\auction');
        $image->move($path,$name);

        $data = new Product_categorie;        
        $data->name = $request->name;
        $data->image = 'user\images\auction\\'.$name;
        $data->save();

        return redirect()->route('admin.category.index')->with('success', 'Category Add successfully.');

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
        $data = Product_categorie::findOrFail($id);

        return view('Admin.categoryAdd',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Product_categorie::findOrFail($id);

        $request->validate([
            'name' => ['required'],
            'image' => ['image']
        ]);
        if($request->image){
            // delete existing image
            $image = Public_path($data->image);
            if(File::exists($image)){
                File::delete($image);
            }

            //store new image
            $image = $request->file('image');
            $name = time().rand(). "." .$image->getClientOriginalExtension();
            $path = public_path('user\images\auction');
            $image->move($path,$name);
        }

        //store in db
        $data->name = $request->name;
        if($request->image){
            $data->image = 'user\images\auction\\'.$name;
        }
        $data->save();

        return redirect()->route('admin.category.index')->with('success', 'category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Product_categorie::findOrFail($id);
        $image = Public_path($data->image);
        if(File::exists($image)){
            File::delete($image);
        }
        $data->delete();
        return back()->with('success', 'Category deleted successfully.');
    }
}
