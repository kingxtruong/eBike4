@extends('master')
@section('content')
 <main id="main">

      <section class="slider" id="slider">
              <div class="slider-wrapper">
                <a href="#"><img src="sources/images/slider_1.jpg" alt="" /></a>
                <a href="#"><img src="sources/images/slider_2.jpg" alt="" /></a>
                <a href="#"><img src="sources/images/slider_3.jpg" alt="" /></a>
              </div>
      </section>
      <div class="productsHightlight">
        <div class="productsHightlight_show">
          <div class="productsHightlight_show_1">
              <ul class="list-color-car">
              @foreach($arr_colors_hot1 as $key=>$val)  	
						    		@foreach($val as $key1=>$val1)	    		
						    			<!-- echo $key1."=>".$val1."<hr />"; -->
						    			@if($key1==$product_hot1[0]['id'])
						    				@foreach($val1 as $val2)
						    					<li class="{{$val2['color']}}"  value="{{$val2['image']}}" car-name="{{$val2['image']}}">
						                            <span class="spclass"></span>
						                          </li>
						    				@endforeach
						    			@endif
						    		@endforeach
						    	@endforeach
               <!--  <li class="red"  value="Red" car-name="kingBike">
                  <span class="spclass"></span>
                </li>
                <li class="blue" value="Blue" car-name="kingBike">
                  <span class="spclass"></span>
                </li>
                <li class="orange" value="Orange" car-name="kingBike">
                  <span class="spclass"></span>
                </li>
                <li class="white" value="White" car-name="kingBike">
                  <span class="spclass"></span>
                </li> -->
              </ul>
              <a href="{{route('product-detail',$product_hot1[0]['id'])}}"><img class="big-car" src="sources/images/products/{{$product_hot1[0]['thumbnail']}}" /></a>
               <img class="new-car" src="sources/images/newBigCar.png" />
               <img class="hot-car" src="sources/images/hotBigCar.png" />
              <img class="sale-car" src="sources/images/saleBigCar.png" />
            

              <span class="car-big-name"><a href="{{route('product-detail',$product_hot1[0]['id'])}}">{{$product_hot1[0]['name']}}</a></span>
              <ul class="star">
               @if($product_hot1[0]['num_likes']>=1500)
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		               <img src="sources/images/star0.png" />
		             </li>

		            @else
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		               <img src="sources/images/star0.png" />
		             </li>
		             @endif
              </ul>
              <div class="unit-price-big-car">
                <span class="new-price">{{$product_hot1[0]['promotion_price']}} đ</span><br /><span class="old-price">{{$product_hot1[0]['unit_price']}} đ</span>
              </div>
              <div class="productsHightlight_show_1-hidden">

                    <a href="" class="like-event" normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg"><img normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg" src="sources/images/like.png"  /></a>
                    <a href="{{route('add-to-cart',['id'=>$product_hot1[0]->id,'quantity'=>1,'check_ajax'=>0])}}" class="cart-event" normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png"><img normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png" src="sources/images/cart.png"  /></a>
                    <a href="" class="show-event" normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png"><img normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png" src="sources/images/show.png"  /></a>

              </div>
          </div>
         <div class="productsHightlight_show_2">
            <div class="productsHightlight_show_2_banner">
              <div class="productsHightlight_show_2_banner_divTitle">
                <a href="{{route('hot-new-sale',1)}}" class="productsHightlight_show_2_banner_title">Sản phẩm nổi bật</a>
              </div>
              <br />

              <div class="productsHightlight_show_2_banner_detail">
                <h4 class="detail-row-1">Ngả mũ thán phục với “siêu phẩm SH</h4><br />
                <h4 class="detail-row-2">trong giới xe điện”này với khả năng di</h4><br />
                    <h4 class="detail-row-3">chuyển lên đến 90km tính nhất</h4>
              </div>
            </div>
            <div class="productsHightlight_show_2_small_car">
            @foreach($products_hot as $product)
                    <div class="small-car-item">
		                        <ul class="list-color-car">
		                        @foreach($arr_colors_hot as $key=>$val)  	
						    		@foreach($val as $key1=>$val1)	    		
						    			<!-- echo $key1."=>".$val1."<hr />"; -->
						    			@if($key1==$product->id)
						    				@foreach($val1 as $val2)
						    					<li class="{{$val2['color']}}"  value="{{$val2['image']}}" car-name="{{$val2['image']}}">
						                            <span class="spclass"></span>
						                          </li>
						    				@endforeach
						    			@endif
						    		@endforeach
						    	@endforeach
		                         <!--  <li class="red"  value="Red" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="blue" value="Blue" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="orange" value="Orange" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="white" value="White" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li> -->

		                        </ul>
		                        <a href="{{route('product-detail',$product->id)}}"><img class="small-car" src="sources/images/products/{{$product->thumbnail}}" /></a>
		                         @if(strtotime($product->manufacturing_date)>=strtotime("2017-1-1"))
		                         <img class="new-car" src="sources/images/newSmallCar.png" />
		                         @endif
		                         @if($product->num_likes>=700)
		                         <img class="hot-car" src="sources/images/hotSmallCar.png" />
		                         @endif
		                         @if($product->promotion_price > 0)
		                        	<img class="sale-car" src="sources/images/saleSmallCar.png" />
		                         @endif
		                        <a href="{{route('product-detail',$product->id)}}"><span class="car-small-name">{{$product->name}}</span></a>
		                        <ul class="star">
		                        @if($product->num_likes>=1500)
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>

		                         @elseif($product->num_likes>=1000)
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                         @elseif($product->num_likes>=700)
		                         <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          @else
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          @endif
		                        </ul>

		                        <div class="unit-price-small-car">
		                        	@if($product->promotion_price > 0)
		                          <span class="new-price">  {{number_format($product->promotion_price)}} đ</span><br /><span class="old-price">{{number_format($product->unit_price)}} đ</span>
		                          	@else
		                          	<span class="new-price">  {{number_format($product->unit_price)}} đ</span><br><span class="old-price"></span>
		                          	@endif
		                        </div>
		                        <div class="small-car-item-hidden">
		                          <a href="" class="like-event" normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg"><img normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg" src="sources/images/like.png"  /></a>
		                          <a href="{{route('add-to-cart',['id'=>$product->id,'quantity'=>1,'check_ajax'=>0])}}" class="cart-event" normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png"><img normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png" src="sources/images/cart.png"  /></a>
		                          <a href="" class="show-event" normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png"><img normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png" src="sources/images/show.png"  /></a>
		                        </div>
                       </div>  
                    @endforeach

            </div>
          </div>
        <div class="productsHightlight_show_3">
           
              <ul class="list-color-car">
              @foreach($arr_colors_hot2 as $key=>$val)  	
						    		@foreach($val as $key1=>$val1)	    		
						    			<!-- echo $key1."=>".$val1."<hr />"; -->
						    			@if($key1==$product_hot2[0]['id'])
						    				@foreach($val1 as $val2)
						    					<li class="{{$val2['color']}}"  value="{{$val2['image']}}" car-name="{{$val2['image']}}">
						                            <span class="spclass"></span>
						                          </li>
						    				@endforeach
						    			@endif
						    		@endforeach
						    	@endforeach
               <!--  <li class="red"  value="Red" car-name="kingBike">
                  <span class="spclass"></span>
                </li>
                <li class="blue" value="Blue" car-name="kingBike">
                  <span class="spclass"></span>
                </li>
                <li class="orange" value="Orange" car-name="kingBike">
                  <span class="spclass"></span>
                </li>
                <li class="white" value="White" car-name="kingBike">
                  <span class="spclass"></span>
                </li> -->
              </ul>
              <a href="{{route('product-detail',$product_hot2[0]['id'])}}"><img class="big-car" src="sources/images/products/{{$product_hot2[0]['thumbnail']}}" /></a>
               <img class="new-car" src="sources/images/newBigCar.png" />
               <img class="hot-car" src="sources/images/hotBigCar.png" />
              <img class="sale-car" src="sources/images/saleBigCar.png" />
            

              <span class="car-big-name"><a href="{{route('product-detail',$product_hot2[0]['id'])}}">{{$product_hot2[0]['name']}}</a></span>
              <ul class="star">
               @if($product_hot2[0]['num_likes']>=1500)
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		               <img src="sources/images/star0.png" />
		             </li>

		            @else
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		                  <img src="sources/images/star0.png" />
		             </li>
		             <li>
		               <img src="sources/images/star0.png" />
		             </li>
		             @endif
              </ul>
              <div class="unit-price-big-car">
                <span class="new-price">{{$product_hot2[0]['promotion_price']}} đ</span><br /><span class="old-price">{{$product_hot2[0]['unit_price']}} đ</span>
              </div>
              <div class="productsHightlight_show_3-hidden">

                    <a href="" class="like-event" normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg"><img normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg" src="sources/images/like.png"  /></a>
                    <a href="{{route('add-to-cart',['id'=>$product_hot2[0]->id,'quantity'=>1,'check_ajax'=>0])}}" class="cart-event" normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png"><img normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png" src="sources/images/cart.png"  /></a>
                    <a href="" class="show-event" normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png"><img normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png" src="sources/images/show.png"  /></a>

              </div>
        </div>
      </div>
      </div>
      <section class="productsNew">
        <div class="productsNew-wrapper">

          <section class="productsNewShow">
            <div class="productsNewShowTitle">
              <div class="productsNewShowTitle_wrapper">
                <a href="{{route('hot-new-sale',2)}}">Hàng mới về</a>
              </div>
            </div>
            <div class="productsNewShow1">
              <div class="productsNewShow1_products">
                	@foreach($products_new1 as $product)
                    <div class="small-car-item">
		                        <ul class="list-color-car">
		                        @foreach($arr_colors_new1 as $key=>$val)  	
						    		@foreach($val as $key1=>$val1)	    		
						    			<!-- echo $key1."=>".$val1."<hr />"; -->
						    			@if($key1==$product->id)
						    				@foreach($val1 as $val2)
						    					<li class="{{$val2['color']}}"  value="{{$val2['image']}}" car-name="{{$val2['image']}}">
						                            <span class="spclass"></span>
						                          </li>
						    				@endforeach
						    			@endif
						    		@endforeach
						    	@endforeach
		                         <!--  <li class="red"  value="Red" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="blue" value="Blue" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="orange" value="Orange" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="white" value="White" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li> -->

		                        </ul>
		                        <a href="{{route('product-detail',$product->id)}}"><img class="small-car" src="sources/images/products/{{$product->thumbnail}}" /></a>
		                         <img class="new-car" src="sources/images/newSmallCar.png" />
		                         @if($product->num_likes>=700)
		                         <img class="hot-car" src="sources/images/hotSmallCar.png" />
		                         @endif
		                         @if($product->promotion_price > 0)
		                        	<img class="sale-car" src="sources/images/saleSmallCar.png" />
		                         @endif
		                        <a href="{{route('product-detail',$product->id)}}"><span class="car-small-name">{{$product->name}}</span></a>
		                        <ul class="star">
		                        @if($product->num_likes>=1500)
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>

		                         @elseif($product->num_likes>=1000)
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                         @elseif($product->num_likes>=700)
		                         <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          @else
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          @endif
		                        </ul>

		                        <div class="unit-price-small-car">
		                        	@if($product->promotion_price > 0)
		                          <span class="new-price">  {{number_format($product->promotion_price)}} đ</span><br /><span class="old-price">{{number_format($product->unit_price)}} đ</span>
		                          	@else
		                          	<span class="new-price">  {{number_format($product->unit_price)}} đ</span><br><span class="old-price"></span>
		                          	@endif
		                        </div>
		                        <div class="small-car-item-hidden">
		                          <a href="" class="like-event" normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg"><img normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg" src="sources/images/like.png"  /></a>
		                          <a href="{{route('add-to-cart',['id'=>$product->id,'quantity'=>1,'check_ajax'=>0])}}" class="cart-event" normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png"><img normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png" src="sources/images/cart.png"  /></a>
		                          <a href="" class="show-event" normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png"><img normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png" src="sources/images/show.png"  /></a>
		                        </div>
                       </div>  
                    @endforeach 
              </div>
              <div class="productsNewShow1_banner">
                <img src="sources/images/banner1.png" />
              </div>
            </div>
            <div class="productsNewShow2">
              <div class="productsNewShow2_banner">
                  <img src="sources/images/banner2.png" />
              </div>
              <div class="productsNewShow2_products">
                
                	@foreach($products_new2 as $product)
                    <div class="small-car-item">
		                        <ul class="list-color-car">
		                        @foreach($arr_colors_new2 as $key=>$val)  	
						    		@foreach($val as $key1=>$val1)	    		
						    			<!-- echo $key1."=>".$val1."<hr />"; -->
						    			@if($key1==$product->id)
						    				@foreach($val1 as $val2)
						    					<li class="{{$val2['color']}}"  value="{{$val2['image']}}" car-name="{{$val2['image']}}">
						                            <span class="spclass"></span>
						                          </li>
						    				@endforeach
						    			@endif
						    		@endforeach
						    	@endforeach
		                         <!--  <li class="red"  value="Red" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="blue" value="Blue" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="orange" value="Orange" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="white" value="White" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li> -->

		                        </ul>
		                        <a href="{{route('product-detail',$product->id)}}"><img class="small-car" src="sources/images/products/{{$product->thumbnail}}" /></a>
		                         <img class="new-car" src="sources/images/newSmallCar.png" />
		                         @if($product->num_likes>=700)
		                         <img class="hot-car" src="sources/images/hotSmallCar.png" />
		                         @endif
		                         @if($product->promotion_price > 0)
		                        	<img class="sale-car" src="sources/images/saleSmallCar.png" />
		                         @endif
		                        <a href="{{route('product-detail',$product->id)}}"><span class="car-small-name">{{$product->name}}</span></a>
		                        <ul class="star">
		                        @if($product->num_likes>=1500)
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>

		                         @elseif($product->num_likes>=1000)
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                         @elseif($product->num_likes>=700)
		                         <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          @else
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          @endif
		                        </ul>

		                        <div class="unit-price-small-car">
		                        	@if($product->promotion_price > 0)
		                          <span class="new-price">  {{number_format($product->promotion_price)}} đ</span><br /><span class="old-price">{{number_format($product->unit_price)}} đ</span>
		                          	@else
		                          	<span class="new-price">  {{number_format($product->unit_price)}} đ</span><br><span class="old-price"></span>
		                          	@endif
		                        </div>
		                        <div class="small-car-item-hidden">
		                          <a href="" class="like-event" normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg"><img normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg" src="sources/images/like.png"  /></a>
		                          <a href="{{route('add-to-cart',['id'=>$product->id,'quantity'=>1,'check_ajax'=>0])}}" class="cart-event" normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png"><img normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png" src="sources/images/cart.png"  /></a>
		                          <a href="" class="show-event" normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png"><img normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png" src="sources/images/show.png"  /></a>
		                        </div>
                       </div>  
                    @endforeach 
              </div>
            </div>
              <div class="productsNewShow3">
                	
                	@foreach($products_new3 as $product)
                    <div class="small-car-item">
		                        <ul class="list-color-car">
		                        @foreach($arr_colors_new3 as $key=>$val)  	
						    		@foreach($val as $key1=>$val1)	    		
						    			<!-- echo $key1."=>".$val1."<hr />"; -->
						    			@if($key1==$product->id)
						    				@foreach($val1 as $val2)
						    					<li class="{{$val2['color']}}"  value="{{$val2['image']}}" car-name="{{$val2['image']}}">
						                            <span class="spclass"></span>
						                          </li>
						    				@endforeach
						    			@endif
						    		@endforeach
						    	@endforeach
		                         <!--  <li class="red"  value="Red" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="blue" value="Blue" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="orange" value="Orange" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li>
		                          <li class="white" value="White" car-name="kingBike">
		                            <span class="spclass"></span>
		                          </li> -->

		                        </ul>
		                        <a href="{{route('product-detail',$product->id)}}"><img class="small-car" src="sources/images/products/{{$product->thumbnail}}" /></a>
		                         <img class="new-car" src="sources/images/newSmallCar.png" />
		                         @if($product->num_likes>=700)
		                         <img class="hot-car" src="sources/images/hotSmallCar.png" />
		                         @endif
		                         @if($product->promotion_price > 0)
		                        	<img class="sale-car" src="sources/images/saleSmallCar.png" />
		                         @endif
		                        <a href="{{route('product-detail',$product->id)}}"><span class="car-small-name">{{$product->name}}</span></a>
		                        <ul class="star">
		                        @if($product->num_likes>=1500)
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>

		                         @elseif($product->num_likes>=1000)
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                         @elseif($product->num_likes>=700)
		                         <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          @else
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          <li>
		                            <img src="sources/images/star0.png" />
		                          </li>
		                          @endif
		                        </ul>

		                        <div class="unit-price-small-car">
		                        	@if($product->promotion_price > 0)
		                          <span class="new-price">  {{number_format($product->promotion_price)}} đ</span><br /><span class="old-price">{{number_format($product->unit_price)}} đ</span>
		                          	@else
		                          	<span class="new-price">  {{number_format($product->unit_price)}} đ</span><br><span class="old-price"></span>
		                          	@endif
		                        </div>
		                        <div class="small-car-item-hidden">
		                          <a href="" class="like-event" normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg"><img normalImage="sources/images/like.png"  effectImage="sources/images/like-active.jpg" src="sources/images/like.png"  /></a>
		                          <a href="{{route('add-to-cart',['id'=>$product->id,'quantity'=>1,'check_ajax'=>0])}}" class="cart-event" normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png"><img normalImage="sources/images/cart.png"  effectImage="sources/images/cart-active.png" src="sources/images/cart.png"  /></a>
		                          <a href="" class="show-event" normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png"><img normalImage="sources/images/show.png"  effectImage="sources/images/show-active.png" src="sources/images/show.png"  /></a>
		                        </div>
                       </div>  
                    @endforeach 
              </div>
          </section>
            </div>
      </section>
      <section class="banner-services">
          <div class="banner-services-wrapper">
            <div class="banner-services_show">
            <img src="sources/images/po1.png" class="po1" /><img src="sources/images/po2.png" class="po2" />
            <img src="sources/images/po3.png" class="po3"/><img src="sources/images/po4.png" class="po4"/>
            <span class="info-po1">WING’S SERVICES DỊCH<br /> VỤ TẬN NƠI CHUYÊN<br /> NGHIỆP CHU ĐÁO</span>
            <span class="info-po2">GIAO HÀNG<br />TẬN NƠI</span>
            <span class="info-po3">DÀI HẠN VÀ<br />ĐẢM BẢO NHẤT</span>
            <span class="info-po4">HỆ THỐNG SHOWROOM<br /> CHUYÊN NGHIỆP & LỚN<br /> NHẤT</span>
          </div>
        </div>
      </section>
      <article class="news-albumn">
          <div class="news-albumn-wrapper">
            <section class="news-car">
          <div class="news-car_title">
            <h4><a href="">Tin Tức</a></h4>
          </div>
          <div class="news-car_thumbnail">
            <a class="thumbnail-to-news" href=""><img src="sources/images/news-thumbnail.jpg" /></a>
            <div class="info-news">
            </div>
            <span class="info-news_date">27/07/2017</span>
            <span class="info-news_title"><a href="" class="title-to-news">Tại sao nên chọn xe điện Sixbike</a></span>
          </div>
          <div class="news-car_list-news">
            <ul>
              <li>
                <a href=""><img src="sources/images/list-style-news.png" width="13px" height="13px"/>   Sử dụng xe điện như thế nào cho hợp lý</a>
              </li>
              <li>
                <a href=""><img src="sources/images/list-style-news.png" width="13px" height="13px"/>   Tư vẫn các dòng xe điện đến từ Nhật</a>
              </li>
              <li>
                <a href=""><img src="sources/images/list-style-news.png" width="13px" height="13px"/>   Những mẫu xe điện cực hợp đi dạo phố</a>
              </li>
            </ul>
          </div>
        </section>
        <section class="albumn-car">
            <div class="albumn-car_title">
              <h4><a href="">Album</a></h4>
            </div>
            <div class="albumn-car_show">
                <div class="albumn-car_show_video">
                <a href=""><img class="thumbnail" src=sources/images/thumbnail-video-albumn.jpg /></a>
                <a href=""><img class="icon-play" src=sources/images/play.png /></a>
            </div>
            <div class="albumn-car_show_image">
                <div class="albumn-car_show_image1"><a href=""><img src="sources/images/thumbnail-albumn1.jpg"></a></div>
                <div class="albumn-car_show_image2"><a href=""><img src="sources/images/thumbnail-albumn2.jpg"></a></div>
            </div>
        </section>
          </div>
      </article>
    </main>
 <script type="text/javascript">
        $(function(){
              if(!flux.browser.supportsTransitions)
                alert("Flux Slider requires a browser that supports CSS3 transitions");

              window.f = new flux.slider('#slider > .slider-wrapper', {
                controls:true
              });
            });
    </script>
@endsection