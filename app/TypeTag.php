<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeTag extends Model
{
    protected $fillable=['id','tagcode','tagname'];

    public function product(){

        return $this->hasMany('App\GameTag');

    }
}
