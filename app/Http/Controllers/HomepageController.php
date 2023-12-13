<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $products = ProductsModel::latest()->take(6)->get();
        return view('welcome', compact('products'));
    }
}
