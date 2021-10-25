<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Support;


class SupportController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        
        }

        public function create(){
            return view('adminInsertSupport');
        }

        public function insert(){    //step 2 
            $r=request(); //step 3 get data from HTML
            $supports=Support::create([    //step 3 bind data
                'name'=>$r->name, //add on 
                'mainQuestion'=>$r->mainQuestion, //fullname from HTML
                'subQuestion'=>$r->subQuestion,
                'Solution'=>$r->Solution,
            ]);
            
            return redirect()->route('support');// step 5 back to last page
        }
    
        public function show(){
            //$supports=Support::all();
    
            $supports=DB::table('supports')
            ->select('supports.*')
            ->get();
    
            return view('Admin.manageSupport')->with('supports',$supports);
        }

        public function usershow(){
            //$supports=Support::all();
    
            $supports=DB::table('supports')
            ->select('supports.*')
            ->get();
    
            return view('User.userviewsupport')->with('supports',$supports);
        }
    
        public function delete($id){
           
            $supports =Support::find($id);
            $supports->delete();
            return redirect()->route('all.support');
    
        }
    
        public function edit($id){
            //select * from Products where id='$id'
             $supports=Support::all()->where('id',$id);
             
             return view('editSupport')->with('supports',$supports);
        }
    
        public function update(){
            $r=request();//retrive submited form data
            $supports =Support::find($r->id);  //get the record based on product ID              
            $supports->name=$r->name;
            $supports->mainQuetion=$r->mainQuetion;
            $supports->subQuestion=$r->subQuestion;
            $supports->Solution=$r->Solution;
            $supports->save();
            return redirect()->route('all.support');
        }
    
}
