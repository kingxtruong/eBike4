<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Brand_product,App\Type_product,App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $brand_products=Brand_product::all();
            $type_products=Type_product::all();
            $arr_brands=array();

            foreach($type_products as $type)
            {
                $brandsOfType=Brand_product::join('product',function($join){
                    $join->on('brand_product.id','=','id_brand_product');
                })->where('id_type_product','=',$type->id)->select('brand_product.id as brand_id','brand_product.name as brand_name')->distinct()->get();
                array_push($arr_brands, array($type->id=>$brandsOfType));
            }
            $view->with(['type_products'=>$type_products,'brand_products'=>$brand_products,'arr_brands'=>$arr_brands]);
           
        });

            view()->composer('header',function($view){
                if(Session('cart'))
                {
                    $oldCart=Session::get('cart');
                    $cart=new Cart($oldCart);

       
                    $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
                }
           
              });

           

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
