<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            $products = Product::all();            
            return view('frontend.index', compact('products'));
        }
    }

    public function productDetails($id)
    {
        $product_detail = Product::find($id);            
        return view('frontend.product-detail', compact('product_detail'));
    }
}
