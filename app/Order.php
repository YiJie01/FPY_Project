<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['paymentStatus','userID','amount','productID'];

    public function product(){

        return $this->hasMany('App\ProductManage');

    }

    public function myCart(){

        return $this->hasMany('App\myCart');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}
