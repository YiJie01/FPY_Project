<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Refund;
use App\ProductManage;
use App\User;
use App\Order;
use Auth;
Use Session;

class RefundController extends Controller
{
    public function create(){

        return view('refund');;

    }

    public function add(){
        $r=request();
        $addRefund=Refund::create([
            'userID'=>Auth::id(),
            'productID'=>$r->id,
            'productname'=>$r->productname, 
            'email'=>$r->email, 
            'reason'=>$r->reason,
        
    ]);
    Session::flash('success','Refund create successfully!Places wait reply.');
    return redirect()->route('refund'); 

    }

    public function refundview(){
        $refunds=DB::table('refunds')
        //->leftjoin('product_manages','product_manages.productname','=','refund.productname')
        ->get();

        return view('Admin.adminRefund')->with('refunds',$refunds);
    }

    public function delete($id){
        $refunds=Refund::find($id);
        $refunds->delete();
        return redirect()->route('Admin.allrefund');
    }

}
