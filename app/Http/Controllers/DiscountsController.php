<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::all();
        return view('discount.index', compact('discounts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}
