<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Color_product;
use App\Brand_product;
use App\Type_product;
use App\Cart;
use Session;

class PageController extends Controller
{
    public function getHomePage(){
    	//product hot 1:
    	$product_hot1 = Product::whereDate('manufacturing_date','>=','2017-1-1')->where('promotion_price','>',0)->where('num_likes','>',1000)->skip(0)->take(1)->get();
    	$arr_colors_hot1=array();   	
		$colors_hot1=color_product::where('id_product',"=",$product_hot1[0]['id'])->get();
		$arr_temp_hot1=array($product_hot1[0]['id']=>$colors_hot1);
		array_push($arr_colors_hot1, $arr_temp_hot1);
    	
    	//product hot 2:
    	$product_hot2 = Product::whereDate('manufacturing_date','>=','2017-1-1')->where('promotion_price','>',0)->where('num_likes','>',1000)->skip(1)->take(1)->get();
    	$arr_colors_hot2=array();   	
		$colors_hot2=color_product::where('id_product',"=",$product_hot2[0]['id'])->get();
		$arr_temp_hot2=array($product_hot2[0]['id']=>$colors_hot2);
		array_push($arr_colors_hot2, $arr_temp_hot2);

    	//product two hot
    	$products_hot=Product::whereDate('manufacturing_date','>=','2017-1-1')->where('promotion_price','>',0)->where('num_likes','>',700)->where('id','<>',$product_hot1[0]['id'])->where('id','<>',$product_hot2[0]['id'])->skip(0)->take(2)->get();
    	$arr_colors_hot=array();
    	foreach($products_hot as $product)
    	{
    		$colors_hot=color_product::where('id_product',"=",$product->id)->get();
    		$arr_temp_hot=array($product->id=>$colors_hot);
    		array_push($arr_colors_hot, $arr_temp_hot);
    	}

    	//product four new row1
    	$products_new1=Product::whereDate('manufacturing_date','>=','2015-1-1')->skip(0)->take(4)->get();
    	$arr_colors_new1=array();
    	foreach($products_new1 as $product)
    	{
    		$colors_new1=color_product::where('id_product',"=",$product->id)->get();
    		$arr_temp_new1=array($product->id=>$colors_new1);
    		array_push($arr_colors_new1, $arr_temp_new1);
    	}
    	//product four new row2
    	$products_new2=Product::whereDate('manufacturing_date','>=','2015-1-1')->skip(4)->take(4)->get();
    	$arr_colors_new2=array();
    	foreach($products_new2 as $product)
    	{
    		$colors_new2=color_product::where('id_product',"=",$product->id)->get();
    		$arr_temp_new2=array($product->id=>$colors_new2);
    		array_push($arr_colors_new2, $arr_temp_new2);
    	}

    	//product four new row3
    	$products_new3=Product::whereDate('manufacturing_date','>=','2015-1-1')->skip(8)->take(3)->get();
    	$arr_colors_new3=array();
    	foreach($products_new3 as $product)
    	{
    		$colors_new3=color_product::where('id_product',"=",$product->id)->get();
    		$arr_temp_new3=array($product->id=>$colors_new3);
    		array_push($arr_colors_new3, $arr_temp_new3);
    	}


    	// var_dump($products_hot);
    	// exit();
    	return view('pages.home-page',compact('product_hot1','product_hot2','products_hot','arr_colors_hot1','arr_colors_hot2','arr_colors_hot','products_new1','products_new2','products_new3','arr_colors_new1','arr_colors_new2','arr_colors_new3'));
    }
    public function getProducts(){
    	$products=Product::where('id','>',0)->paginate(25);
        $brands=Brand_product::all();
    	$arr_colors=array();
    	foreach($products as $product)
    	{
    		$colors=color_product::where('id_product',"=",$product->id)->get();
    		$arr_temp=array($product->id=>$colors);
    		array_push($arr_colors, $arr_temp);
    	}
    	return view('pages.products',compact('products','arr_colors','brands'));
        
    }
    public function getProductDetail( Request $req){
        // $product=Product::where('id',$req->id)->get();
        $product=Product::where('product.id',$req->id)->join('brand_product',function($join){
            $join->on('product.id_brand_product','=','brand_product.id');
        })->select('product.*','brand_product.name as brand_name')->get();

        
        $arr_colors=array();       
        $colors=color_product::where('id_product',"=",$product[0]['id'])->get();
        $arr_temp=array($product[0]['id']=>$colors);
        array_push($arr_colors, $arr_temp);

        //product same hot,new
        if($product[0]['num_likes']>=1000)
            $hot=">=";
        else
            $hot="<";
        if(strtotime($product[0]['manufacturing_date'])>=strtotime("2017-1-1"))
            $new=">=";
        else
            $new="<";

        $products_related=Product::where('id','<>',$product[0]['id'])->where('num_likes',$hot,1000)->whereDate('manufacturing_date',$new,'2017-1-1')->get();
        
        //other-products
        $arr_related=array();
        array_push($arr_related,$product[0]['id']);
        foreach($products_related as $product1)
        {
            array_push($arr_related, $product1->id);
        }
        $other_products=Product::whereNotIn('id',$arr_related)->skip(0)->take(3)->get();        
        $arr_other_colors=array();
        foreach($other_products as $product2)
        {
            $colors=color_product::where('id_product',"=",$product2->id)->get();
            $arr_temp=array($product2->id=>$colors);
            array_push($arr_other_colors, $arr_temp);
        }
        return view('pages.product-detail',compact('product','arr_colors','products_related','other_products','arr_other_colors'));
    }
    public function getAddToCart( Request $req,$id,$quantity,$check_ajax) 
    {
        $product=Product::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);

        for ($i=1;$i<=$quantity;$i++)
            {
                $cart->add($product,$id);
                $req->session()->put('cart',$cart);
                
            }
  
        if($check_ajax==0)
        {
            return redirect()->back();  
        }
        else
        {
            $arr_data=array('items'=>Session('cart')->items,'totalQty'=>Session('cart')->totalQty,'totalPrice'=>Session('cart')->totalPrice);
            return json_encode($arr_data);
        }
        
    }

    public function getReduceToCart( Request $req,$id,$quantity,$check_ajax) 
            {
                 $product=Product::find($id);
                $oldCart=Session('cart')?Session::get('cart'):null;
                $cart=new Cart($oldCart);

                for ($i=1;$i<=$quantity;$i++)
                    {
                        $cart->reduceByOne($id);
                        //$req->Session()->forget('cart');
                         // $req->session()->put('cart',$cart);
                        
                    }

               if(count($cart->items)>0)
                     $req->session()->put('cart',$cart);
                else
                {
                    $req->Session()->forget('cart');

                }
                if($check_ajax==0)
                {
                    return redirect()->back();  
                }
                else
                {
                    $arr_data=array('items'=>Session('cart')->items,'totalQty'=>Session('cart')->totalQty,'totalPrice'=>Session('cart')->totalPrice,'sessionCart'=>Session('cart'));

                    return json_encode($arr_data);
                }
        
    }

    public function getRemoveItemCart($id)
            {
                $old_cart=Session::has('cart')?Session::get('cart'):null;
                $new_cart=new Cart($old_cart);
                $new_cart->removeItem($id);
                if(count($new_cart->items)>0)
                    Session::put('cart',$new_cart);
                else
                    Session::forget('cart');

                $arr_data=array('items'=>Session('cart')->items,'totalQty'=>Session('cart')->totalQty,'totalPrice'=>Session('cart')->totalPrice);
                return json_encode($arr_data);
                //return redirect()->back();
            }
    


    public function getSearchProducts(Request $req)
    {

        if($req->rad_price ==null)
        {
             $query_operator_price='>';
             $query_price=0;
        }
        else
        {
             $query_operator_price='<=';
             $query_price=$req->rad_price;

        }
        if($req->rad_brand ==null)
        {
             $query_operator_brand='>';
             $query_brand=0;
             $checked_brand=0;

        }
        else
        {
             $query_operator_brand='=';
             $query_brand=$req->rad_brand;
             $checked_brand=$req->rad_brand;

        }


        if($req->rad_other=="otherNew")
        {
            $query_field='manufacturing_date';
            $query_operator_other='>=';
            $query_other='2017-1-1';
        }
        else if(($req->rad_other=="otherHot"))
                {
                    $query_field='num_likes';
                    $query_operator_other='>=';
                    $query_other=1000;
                }
             else if(($req->rad_other=="otherSale"))
                {
                    $query_field='promotion_price';
                    $query_operator_other='>';
                    $query_other=0;
                }   

                else
                {
                    $query_field='id';
                    $query_operator_other='>';
                    $query_other=0;
                }

        $checked_price=$req->rad_price;
        $checked_other=$req->rad_other;
        //var_dump($req->rad_price);
       // exit();
        $products=Product::where('id_brand_product',$query_operator_brand,$query_brand)->where('unit_price',$query_operator_price,$query_price)->where($query_field,$query_operator_other,$query_other)->paginate(25);
        $brands=Brand_product::all();
        $arr_colors=array();
        foreach($products as $product)
        {
            $colors=color_product::where('id_product',"=",$product->id)->get();
            $arr_temp=array($product->id=>$colors);
            array_push($arr_colors, $arr_temp);
        }
        return view('pages.search-products',compact('products','arr_colors','brands','checked_brand','checked_price','checked_other'));
    }

    public function getSearchProductsBy(Request $req,$product_type,$id_brand,$cheap)
    {

        
        if($product_type==0 && $id_brand ==0 && $cheap ==0 )
        {   

                if($req->rad_brand ==null)
                {
                     $query_operator_brand='>';
                     $query_brand=0;
                }
                else
                {
                    $query_operator_brand='=';
                     $query_brand=$req->rad_brand;
                }
                if($req->rad_price ==null)
                {
                     $query_operator_price='>';
                     $query_price=0;
                }
                else
                {
                    $query_operator_price='<=';
                     $query_price=$req->rad_price;
                }
                


                if($req->rad_other=="otherNew")
                {
                    $query_field='manufacturing_date';
                    $query_operator_other='>=';
                    $query_other='2017-1-1';
                }
                else if(($req->rad_other=="otherHot"))
                        {
                            $query_field='num_likes';
                            $query_operator_other='>=';
                            $query_other=1000;
                        }
                     else if(($req->rad_other=="otherSale"))
                        {
                            $query_field='promotion_price';
                            $query_operator_other='>';
                            $query_other=0;
                        }   

                        else
                        {
                            $query_field='id';
                            $query_operator_other='>';
                            $query_other=0;
                        }

                
                $checked_brand=$req->rad_brand;
                $checked_price=$req->rad_price;
                $checked_other=$req->rad_other;

                    $products=Product::where('id_brand_product',$query_operator_brand,$query_brand)->where('unit_price',$query_operator_price,$query_price)->where($query_field,$query_operator_other,$query_other)->paginate(25);
        }
        else
        {
            $checked_brand='';
            $checked_price='';
            $checked_other='';
            if($id_brand!=0 && $product_type !=0){
                $products=Product::where('id_brand_product','=',$id_brand)->where('id_type_product','=',$product_type)->paginate(25);
                $brand=Brand_product::where('id','=',$id_brand)->select('name')->first();
                $end_path=Type_product::where('id','=',$product_type)->select('name')->first()['name'].' '.$brand['name'];
            }
            if($cheap!=0){
                $products=Product::where('unit_price','<=',10000000)->where('id_type_product','>',0)->paginate(25);
                $end_path="Sản phẩm giá rẻ";
            }
        }
        $end_path='Có '.count($products)." sản phẩm được tìm thấy.";
        $brands=Brand_product::all();
        $arr_colors=array();
        foreach($products as $product)
        {
            $colors=color_product::where('id_product',"=",$product->id)->get();
            $arr_temp=array($product->id=>$colors);
            array_push($arr_colors, $arr_temp);
        }
        return view('pages.search-products-by',compact('products','arr_colors','brands','checked_brand','checked_price','checked_other','path_current','path_current_other','end_path'));
    }



    public function getHotNewSale(Request $req,$option) {
             if($option==0)
            {   

                    if($req->rad_brand ==null)
                    {
                         $query_operator_brand='>';
                         $query_brand=0;
                    }
                    else
                    {
                        $query_operator_brand='=';
                         $query_brand=$req->rad_brand;
                    }
                    if($req->rad_price ==null)
                    {
                         $query_operator_price='>';
                         $query_price=0;
                    }
                    else
                    {
                        $query_operator_price='<=';
                         $query_price=$req->rad_price;
                    }
                    


                    if($req->rad_other=="otherNew")
                    {
                        $query_field='manufacturing_date';
                        $query_operator_other='>=';
                        $query_other='2017-1-1';
                    }
                    else if(($req->rad_other=="otherHot"))
                            {
                                $query_field='num_likes';
                                $query_operator_other='>=';
                                $query_other=1000;
                            }
                         else if(($req->rad_other=="otherSale"))
                            {
                                $query_field='promotion_price';
                                $query_operator_other='>';
                                $query_other=0;
                            }   

                            else
                            {
                                $query_field='id';
                                $query_operator_other='>';
                                $query_other=0;
                            }
                    $end_path='Search result ...';
                    $checked_brand=$req->rad_brand;
                    $checked_price=$req->rad_price;
                    $checked_other=$req->rad_other;

                        $products=Product::where('id_brand_product',$query_operator_brand,$query_brand)->where('unit_price',$query_operator_price,$query_price)->where($query_field,$query_operator_other,$query_other)->paginate(25);
            }
            else
            {
                $checked_brand='';
                $checked_price='';
                $checked_other='';
                if($option==1){
                    $products=Product::where('num_likes','>=',1000)->paginate(25);
                    $end_path="Sản phẩm nổi bật !!!";
                }
                if($option==2){
                    $products=Product::whereDate('manufacturing_date','>=','2017-1-1')->paginate(25);
                    $end_path="Sản phẩm mới !!!";
                }
                if($option==3){
                    $products=Product::where('promotion_price','>',0)->paginate(25);
                    $end_path="Sản phẩm khuyến mãi !!!";
                }
                
            }
            $brands=Brand_product::all();
            $arr_colors=array();
            foreach($products as $product)
            {
                $colors=color_product::where('id_product',"=",$product->id)->get();
                $arr_temp=array($product->id=>$colors);
                array_push($arr_colors, $arr_temp);
            }
            return view('pages.hot-new-sale',compact('products','arr_colors','brands','checked_brand','checked_price','checked_other','path_current','path_current_other','end_path'));
    }

    public function getSearchAll(Request $req){
        $products=Product::where('name','like','%'.$req->txtSearch.'%')->orWhere('unit_price',$req->txtSearch)->paginate(25);
        $arr_colors=array();
        $keySearch=$req->txtSearch;
        foreach($products as $product)
        {
            $colors=color_product::where('id_product',"=",$product->id)->get();
            $arr_temp=array($product->id=>$colors);
            array_push($arr_colors, $arr_temp);
        }
        return view('pages.search-all',compact('arr_colors','products','keySearch'));
    }


    public function getCart()
    {
        if(Session::has('cart'))
       { 
        $items=Session::get('cart')->items;
               // print_r($items);
               // exit();
               $brands=Brand_product::all();
               $arr_colors=array();
               foreach($items as $item)
               {
                   $product=$item['item'];
                   $colors=color_product::where('id_product',"=",$product->id)->get();
                   $arr_temp=array($product->id=>$colors);
                   array_push($arr_colors, $arr_temp);
               }
        }
                               
        return view('pages.cart',compact('items','arr_colors'));
        //,compact('items','arr_colors')
    }



    public function getCheckout()
    {
        return view('pages.checkout');
    }
    public function getTestRoute($id,$shin){
        return $id+$shin;
    }
}
