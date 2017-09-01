<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Type_product extends Model
{
    protected $table="type_product";
    public function product(){
    	return $this->hasMany('App\Product','id_type_product','id');
    }
}
