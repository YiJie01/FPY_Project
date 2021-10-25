<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sortalbe;

class ProductManage extends Model
{
    protected $fillable=['productname','productprice','image','publisher','status','type','date','introduction','url'];
    protected $primaryKey = 'productid';

    public function list(){

        return $this->belongTo('App\ProductManage');
    }
}
