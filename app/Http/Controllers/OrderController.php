<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\ProductManage;
use App\User;
use App\myCart;
use App\Order;
use Auth;
Use Session;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function add(){
        $r=request(); 
        $addOrder=Order::create([    
            
            'amount'=>$r->amount,             
            'paymentStatus'=>'unfinished',                 
            'userID'=>Auth::id(), 
            'productID'=>$r->id,                        
        ]);
        
        $orderID=DB::table('orders')->where('userID','=',Auth::id())->orderBy
        ('created_at', 'desc')->first(); //get the lastest order ID
        
        $items=$r->input('item');
            foreach($items as $item => $value){
                $carts =myCart::find($value);
                $carts->orderID = $orderID->id;// before if is kode update order to database, because need logi runing
                $carts->save();
    }

    Session::flash('success',"Order succesful!");   
    return redirect()->route('my.order');//redirect to payment
}
    public function show(){
        $myorders=DB::table('orders')
        ->leftjoin('my_carts', 'orders.id', '=', 'my_carts.orderID')
        ->leftjoin('product_manages','product_manages.productid','=','orders.productID')
        ->where('orders.userID','=',Auth::id())
        ->get();
        return view('User.Order')->with('myorders',$myorders);
    }


}
