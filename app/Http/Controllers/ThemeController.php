<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function view() {
        $products = Product::all();
        return view('website_layouts.content',compact('products'));
    }

    public function home() {
        $products = Product::all();
        return view('website_layouts.content',compact('products'));
    }
}
