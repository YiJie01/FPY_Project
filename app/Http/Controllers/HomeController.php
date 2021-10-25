<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\ProductManage;




class HomeController extends Controller
{
    
    
    //diaplay data in home page(laster add more type)
    public function homepagelist(){
        $typeRPG=ProductManage::latest('productid')->where('type','=','RPG')->paginate(5);
        
        $typeFPS=ProductManage::latest('productid')->where('type','=','FPS')->paginate(5);                                           
        
        $typeotc=ProductManage::latest('productid')->where('type','=','otc')->paginate(5); 

        return view('User.jjgstorehome')->with('typeRPG',$typeRPG)
                                ->with('typeFPS',$typeFPS)
                                ->with('typeotc',$typeotc);
                          
    }
    //diaplay data in home page(laster add more type)

    //search
    public function usersearch(){
        $r=request();
        $keyword=$r->searchProduct;
        $products=DB::table('product_manages')
        ->where('product_manages.productname','like','%' . $keyword . '%')
        ->orwhere('product_manages.type','like','%' . $keyword . '%')
        ->orwhere('product_manages.publisher','like','%' . $keyword . '%')
        ->orwhere('product_manages.date','like','%' . $keyword . '%')
        ->orwhere('product_manages.productid','like','%' . $keyword . '%')
        ->paginate(5);
        return view('User.productcategory')->with('products',$products);
        

     }
     
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('jjgstorehome');
    }
}
