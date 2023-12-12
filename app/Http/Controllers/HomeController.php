<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
use App\Models\Order;

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

    public function saveOrder(Request $request)
    {
        // dd($request->all());
        $product_id = $request->input('id');
        $product_qty = $request->input('qty');
        $product= Product::where('id', $product_id)->first();

        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->product_id = $product->id;
        $order->amount = $product->price;
        $order->quantity = $product_qty;
        $order->save();
        $newUrl = '/checkout';
        return response()->json(['redirect' => $newUrl]);    }

    public function checkout()
    {
        $order_detail = Order::where('user_id',auth()->user()->id)->first();            
        return view('frontend.checkout', compact('order_detail'));
    }

    public function confrimOrder(Request $request)
    {
        $order = Order::find('id',$request->id);
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->country = $request->country;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->post_code = $request->post_code;
        $order->address1 = $request->address1;
        $order->address2 = $request->address2;
        $order->update();
        return redirect()->route('/home')->with('status', 'Successfully Created The Order');
    }

    public function buyerDashboard(){
        if (auth()->check() && auth()->user()->role == 'buyer') {            
            $products= Product::where('user_id', auth()->user()->id)->get();
            return view('frontend.buyer-dashboard', compact('products'));
        } else {
            return redirect()->route('/home');
        }
    }
    public function sellerDashboard(){
        if (auth()->check() && auth()->user()->role == 'seller') {
            $products= Order::with('product')->where('user_id', auth()->user()->id)->get();
            return view('frontend.seller-dashboard', compact('products'));
        } else {
            return redirect()->route('/home');
        }
    }
}
