<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    //
    protected $fillable=['name','mainQuestion','subQuestion','Solution'];

    public function alladmin(){
        return $this->belongsTo('App\alladmin');
    }

}
