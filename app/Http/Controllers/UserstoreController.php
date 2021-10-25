<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\ProductManage;
use App\User;
use App\Order;
use App\Userstore;
use Auth;
Use Session;

class UserstoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function add(){
        $r=request(); 
        $addStore=Userstore::create([           
            'url'=>'https://drive.google.com/file/d/11RbyMOMFqoFAMltvtlRa3Cz-2Oj7wIxT/view?usp=sharing',                 
            'userID'=>Auth::id(),
            'productID'=>$r->id,                         
        ]);
        return redirect()->route('my.store');
    }
    

    public function show(){
        $mystores=DB::table('userstores')
        ->leftjoin('product_manages', 'product_manages.productid', '=', 'userstores.productID')
        ->where('userstores.userID','=',Auth::id())
        ->get();
        return view('User.userstore')->with('mystores',$mystores);
    }

}
