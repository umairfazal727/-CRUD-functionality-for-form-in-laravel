<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);
        $request->merge(['user_id' => auth()->user()->id]);
        Product::create($request->all());
        return redirect()->back()
            ->with('success', 'Product created successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $product = Product::find($request->id);

        if (!$product) {
            return redirect()->back()
                ->with('error', 'Product not found.');
        }

        $product->update($request->all());
        // $product->name = $request->name;
        // $product->quantity = $request->quantity;
        // $product->price = $request->price;
        // $product->update();

        return redirect()->back()
            ->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()
                ->with('error', 'Product not found.');
        }

        $product->delete();

        return redirect()->back()
            ->with('success', 'Product deleted successfully.');
    }
}
