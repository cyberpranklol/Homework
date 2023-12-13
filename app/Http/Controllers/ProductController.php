<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products');
    }

    public function adminProducts(){
        $products = ProductsModel::all();
        return view('adminProducts', compact('products'));
    }

    public function addProduct(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required|min:5|max:255',
            'amount'=>'required',
            'price'=>'required',
            'image' => 'required'
        ]);

        ProductsModel::create([
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),
            'amount'=>$request->get('amount'),
            'price'=>$request->get('price'),
            'image'=>$request->get('image')
        ]);

        return redirect('/shop');
    }
}
