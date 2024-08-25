<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // get all request
        $productData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'desc' => 'required'
        ]);

        try {
            $product = Product::create([
                'seller_id' => $request->user()->id,
                'nama' => $request->nama,
                'harga' => $request->harga,
                'desc' => $request->desc,
                'stok' => $request->stok,
                'gambar' => $request->gambar,
                'nama_penjual' => $request->user()->name
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->back()->with('success', 'success create new product');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
