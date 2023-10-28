<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\OthersImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.home',[
            'products' => Product::all(),
            'hot_deals_products'=> Product::where('featured_status',1)->get(),
            'trendding_products'=> Product::where('featured_status',0)->get()
        ]);
    }

    public function products(){
        return view('frontEnd.product.product',[
            'products' => Product::all(),
        ]);
    }
    public function productDetails($id){
        return view('frontEnd.product.product-details',[
          'product'=> Product::find($id),
           'othersImage' => OthersImage::where('product_id',$id)->get()
           
        ]);  
    }
    public function categpryProducts($id){
        return view('frontEnd.category.index',[
         'products' => Product::where('category_id',$id)->get()
           
        ]);  
    }
 
  
}
