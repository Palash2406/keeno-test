<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public  function  welcome(){
        $cagetogies=Category::all();
        $featured_products=Product::where('is_featured',true)->get();
        $products=Product::select('id','title','rating','price','images_url')->paginate(5);
        return view('welcome')->with(['categories'=>$cagetogies,'featured_products'=>$featured_products,'products'=>$products]);
    }
}
