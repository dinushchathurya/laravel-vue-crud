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
}
