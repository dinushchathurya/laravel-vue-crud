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
}
