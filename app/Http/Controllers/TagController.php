<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create(){

        return view('insertTag');

    }

    public function insert(){
        $r=request();
        $image=$r->file('product-image');
        $image->move('image',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();

        $addProduct=ProductManage::create([
            'productname'=>$r->productname, 
            'productid'=>$r->productid,
            'productprice'=>$r->productprice,
            'image'=>$imageName,
            'publisher'=>$r->publisher,
            'status'=>$r->status,
            'type'=>$r->type,
            'date'=>$r->date,
            'introduction'=>$r->introduction,

        
    ]);

    }
}
