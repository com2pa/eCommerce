<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Product;

class StoreController extends Controller
{
    public function index(){
        $products = Product::all();
        // dd($product);
        return view ('store.index', compact('products'));
    }

    public function show(){
        $product= Product::where('slug',$slug)->first();
        dd($product);
    }

}
