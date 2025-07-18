<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img_front' => 'required|image|mimes:jpg,jpeg,png|max:2048', // 2MB max
            'img_back' => 'required|image|mimes:jpg,jpeg,png|max:2048', // 2MB max
        ]);

        $data = $request->except('_token');

        $data['img_front'] = $request->file('img_front')->store('products', 'public');
        $data['img_back'] = $request->file('img_back')->store('products', 'public');

        Product::create($data);        
        return redirect()->back()->with(['title'=>__('locale.product', ['suffix'=>'']), 'message'=>'User created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $data = $request->except('_token', '_method');

        if ($request->hasFile('front')) {
            $data['front'] = $request->file('front')->store('products', 'public');
        }

        if ($request->hasFile('back')) {
            $data['back'] = $request->file('back')->store('products', 'public');
        }

        $product->update($data);
        return redirect()->back()->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }
}
