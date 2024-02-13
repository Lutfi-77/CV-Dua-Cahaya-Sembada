<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductHomeController extends Controller
{
    
    public function index($service)
    {
        $products = Product::where('service', $service)->get();
        return view('product', compact('products'));
    }

}
