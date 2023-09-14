<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::latest()->paginate(5);
        return view('Products.index',['products' => $products]);
    }
    public function create() {
        return view('Products.create');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'sellingprice' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $imageName=time().".".$request->image->extension();
        $request->image->move(public_path('products'),$imageName);


        $product = new Product;

        $product->image= $imageName;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->sellingPrice=$request->sellingprice;
        $product->save();
        return back()->withSuccess('Product Added Successfully');
    }

    public function show($id){
        $product=Product::where('id',$id)->first();
        return view('Products.show',['product' => $product]);
    }

    public function edit($id){
        $product=Product::where('id',$id)->first();
        return view('Products.edit',['product' => $product]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'sellingprice' => 'required|numeric',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
         $product=Product::where('id',$id)->first();

         if(isset($request->image)){
          $imageName=time().".".$request->image->extension();
          $request->image->move(public_path('products'),$imageName);
          $product->image=$imageName;
         }

        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->sellingPrice=$request->sellingprice;
        $product->save();
        return back()->withSuccess('Product update Successfully');
    }

    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Deleted Successfully');

    }
}
