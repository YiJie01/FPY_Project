<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\ProductManage;
use App\User;
use App\myCart;
use Auth;
Use Session;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function add(){ 

        $r=request(); 
        $addCategory=myCart::create([                
            'orderID'=>'',
            'productID'=>$r->id,
            'When_pay'=>'0',                  
            'userID'=>Auth::id(),
            
                        
        ]);
        Session::flash('success',"Product add succesful!");        
        return redirect()->route('my.cart');
    }

    public function showcartproduct(){
        $carts=DB::table('my_carts')
        ->leftjoin('product_manages','product_manages.productid','=','my_carts.productID')
        ->select('my_carts.id as cid','product_manages.*')
        ->where('my_carts.orderID','=','')//'' because haven't make payment
        ->where('my_carts.userID','=',Auth::id())
        ->where('When_pay','=','0')// 还没完 ， database加 when pay时做 为了 表示还没还钱是0 ，还了是1 （1 的update做在payment）
        ->get();

        return view('User.usercart')->with('carts',$carts);
    }
    
    public function delete($id){
        $carts=myCart::find($id);
        $carts->delete();
        return redirect()->route('my.cart');

    }

}
