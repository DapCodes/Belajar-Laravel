<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
    public function index()
    {
        $welcome = Product::all();
        return view('welcome', compact('welcome'));
    }

    public function show($id)
    {
        $welcome = Product::findOrFail($id);
        return view('detail', compact('welcome'));  
    }
}
