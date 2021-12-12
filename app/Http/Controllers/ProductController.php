<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{   
    /* function to get all products */
    public function index() 
    {
        $products = Product::all()->toArray();
        return array_reverse($products); 
    }

    /* function to create new product */
    public function store(Request $request)
    {
        $product = new Product([
            'name' => $request->input('name'),
            'detail' => $request->input('detail')
        ]);
        $product->save();

        return response()->json('Product created!');
    }

    /* function to get single product detail */
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    /* function to update single product detail */
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->update($request->all());  
        return response()->json('Product updated!');
    }

    /* function to delete single product */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json('Product deleted!');
    }
}
