<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Color_product extends Model
{
    protected $table="color_product";
    public function product(){
    	return $this->belongsTo("App\Product",'id_product','id');
    }
}
