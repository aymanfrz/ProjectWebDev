<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\PageContent;
use App\Models\Advantage;

class ProductController extends Controller
{
    public function index()
    {
        $sweetProducts = Product::category('sweet')->get();
        $savoryProducts = Product::category('savory')->get();

        $ourProducts = PageContent::first();
        $advantages = Advantage::all();

        return view('products', compact(
            'sweetProducts', 
            'savoryProducts', 
            'ourProducts', 
            'advantages'
        ));
    }
}