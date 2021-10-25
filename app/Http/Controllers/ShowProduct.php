<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductManage;

class ShowProduct extends Controller
{
    public function productcontent($productid){
        $products=ProductManage::all()->where('productid',$productid);
        return view('product')->with('products',$products);
    }
}
