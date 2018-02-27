<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
    	$products = Product::paginate(10);

    	return view('product.index',compact('products'));
    }
}
