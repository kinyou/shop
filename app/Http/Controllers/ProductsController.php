<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
	const LIMIT = 10;

	public function __construct(){
		$this->middleware('auth');
	}

	public function index(Request $request){
		$name = $request->input('name','');

		$menus = Menu::select('id','name')->orderBy('id','asc')->get();

    	if ($name) {
		    $products = Product::where('name','like','%' . $name . '%')->paginate(self::LIMIT);
	    } else {
		    $products = Product::paginate(self::LIMIT);
	    }


    	return view('product.index',compact('products','menus','name'));
    }
}
