<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $fillable=['userID','productid','productname','email','reason'];
    

    public function list(){

        return $this->belongTo('App\ProductManage');
    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}
