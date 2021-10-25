<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(){

        return view('adminRester');;

    }

    public function register(){

        $r=request();
        $addadmin=Admin::create([
            'adminid'=>$r->admin, 
            'adminname'=>$r->adminname,
            'password'=>$r->password,
        
    ]);

    Return redirect()->route('adminregister'); 

    }

}
