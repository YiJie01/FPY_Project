<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameTag extends Model
{
    protected $fillable=['id','tagid','productid'];

    public function product(){

        return $this->hasMany('App\ProductManage');

    }
}
