<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    }
    
    public function store(Request $request){
        $data = $request->validate([
            'Name' => 'required',
            'Price' => 'required|decimal:0,2',
            'Details' => 'required',
            'Publish' => 'required'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit',['product' =>$product]);
    }

    public function view(Product $product){
        return view('products.view',['product' =>$product]);
    }

    public function search(Request $request){
        $search=$request->search;

        $products=Product::where('Name','like',"%{$search}%")->
        orWhere('Details','like',"%{$search}%")
        ->get();
    
        return view('products.index',compact('products'));
    }

    public function update(Product $product,Request $request){
        $data = $request->validate([
            'Name' => 'required',
            'Price' => 'required|decimal:0,2',
            'Details' => 'required',
            'Publish' => 'required'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success','Product updated successfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success','Product deleted successfully');

    }
    
}
