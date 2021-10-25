<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userstore extends Model
{
    protected $fillable=['url','userID','productID'];

    public function product(){

        return $this->hasMany('App\ProductManage');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }

    public function order(){

        return $this->belongsTo('App\Order');

    }
}
