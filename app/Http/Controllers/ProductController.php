<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Kyslik\ColumnSortable\Sortable;
use App\ProductManage;
use App\outputproduct;
use App\productpage;
Use Session;


class ProductController extends Controller
{
    public function create(){

        return view('insertProduct');

    }
    //add game
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
    Session::flash('success','Product create successfully');
    return redirect()->route('product'); 

    }

    
    //admin view all product
    public function productmenu(){
        $products=DB::table('product_manages')
        //->get();
        ->paginate(5); 
        return view('Admin.allproduct')->with('products',$products);
    }
    //end

    //diaplay data in gamelist
    public function gamelist(){
        $products=DB::table('product_manages')
        ->get();
        return view('User.productcategory')->with('products',$products);
    }


    //if product id be delete&cant find
    //public function idbedelete(){
    //    $products=ProductManage::all()->where('productid',$productid)->exists();
    //    abort_unless($products, 404, 'Project not found');   
    //}
    
    //pagnation done
    public function allproductlist(){
        $products = ProductManage::paginate(5);  
        return view('Admin.allProduct',['products'=>$products]);
    }

    public function allproductgamelist(){
        $products = ProductManage::paginate(5);  
        return view('User.productcategory',['products'=>$products]);
    }
    //end function
    //product page
    public function productcontent($productid){
        $products=ProductManage::all()->where('productid',$productid);
        return view('productpage')->with('products',$products);
    }
    //end

    // delete product function
    public function delete($productid){
        $products=ProductManage::find($productid);
        $products->delete();
        return redirect()->route('product');
    }
    //edit&update product function
    public function edit($productid){
        $products=ProductManage::all()->where('productid',$productid);
        return view('Admin.editProduct')->with('products',$products);
                                    
    }

    public function update(){
        $r=request();
        $products=ProductManage::find($r->productid);
        if($r->file('product-image')!=''){
            $image=$r->file('product-image');
            $image->move('image',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $products->image=$imageName;

        }
        $products->productname=$r->productname;
        $products->productprice=$r->productprice;
        $products->publisher=$r->publisher;
        $products->status=$r->status;
        $products->type=$r->type;
        $products->date=$r->date;
        $products->introduction=$r->introduction;
        $products->save();
        
        return redirect()->route('product');
    }
    //end function

    //search function
     public function adminsearch(){
        $r=request();
        $keyword=$r->searchProduct;
        $products=DB::table('product_manages')
        ->where('product_manages.productname','like','%' . $keyword . '%')
        ->orwhere('product_manages.type','like','%' . $keyword . '%')
        ->orwhere('product_manages.publisher','like','%' . $keyword . '%')
        ->orwhere('product_manages.date','like','%' . $keyword . '%')
        ->orwhere('product_manages.productid','like','%' . $keyword . '%')
        
        
        //->get();
        ->paginate(5);
        return view('Admin.allProduct')->with('products',$products);

     }

     public function usersearch(){
        $r=request();
        $keyword=$r->searchProduct;
        $products=DB::table('product_manages')
        ->where('product_manages.productname','like','%' . $keyword . '%')
        ->orwhere('product_manages.type','like','%' . $keyword . '%')
        ->orwhere('product_manages.publisher','like','%' . $keyword . '%')
        ->orwhere('product_manages.date','like','%' . $keyword . '%')
        ->orwhere('product_manages.productid','like','%' . $keyword . '%')
        //->get();
        ->paginate(5);
        return view('User.productcategory')->with('products',$products);
        

     }

    //end function
}
            
