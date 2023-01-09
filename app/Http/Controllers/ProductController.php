<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function AllProduct(){

    $allProduct = Product::all();
    return view('AllProduct', compact('allProduct'));

   }
   public function findProduct($id){

    $product = Product::find($id);
    return view('selectedProduct', compact('product'));

   }
}
