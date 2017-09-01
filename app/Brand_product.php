<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Brand_product extends Model
{
    protected $table="brand_product";
    public function product(){
    	return $this->hasMany('App\Product','id_brand_product','id');
    }
}
