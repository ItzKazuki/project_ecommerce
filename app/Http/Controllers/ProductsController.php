<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}
