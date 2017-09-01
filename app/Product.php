<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type_product;
use App\Brand_product;
use App\Color_product;

class Product extends Model
{
    protected $table="product";
    public function type_product(){
    	return $this->belongsTo('App\Type_product','id_type_product','id');
    }
    public function brand_product(){
    	return $this->belongsTo('App\Brand_product','id_brand_product','id');
    }
    public function color_product(){
    	return $this->hasMany('App\Color_product','id_product','id');
    }
}
