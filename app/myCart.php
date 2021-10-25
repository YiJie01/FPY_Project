<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myCart extends Model
{
    protected $fillable=['orderID','userID','productID','When_pay'];

    public function product(){

        return $this->belongsTo('App\ProductManage');

    }
    public function user(){

        return $this->belongsTo('App\User');

    }
}
