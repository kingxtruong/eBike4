@extends('master')
@section('content')
<main id="main-products">
        <div class="path-page-wrapper">
            <div class="path-page">
                <a href="{{route('homepage')}}" >Trang chủ</a><h3 style="display: inline-block;"></h3><span><a href="{{route('products')}}" style="color: white;">Tất cả sản phẩm</a></span><h3 style="display: inline-block;"></h3><span style="color: #999;">{{$end_path}}</span>
            </div>
        </div>
        <div class="main-products-title-wrapper">
            <!-- <div class="main-products-title">
                <h1 ></h1>
            </div> -->
        </div>
        <section class="products-list">
                  <div class="products-catogory">
                      <div  class="products-catogory-menu">
                          Danh mục
                          <ul class="list-menu">
                              <li><a href="{{route('homepage')}}">Trang chủ</a></li>
                              <li><a href="{{route('products')}}">Sản phẩm</a></li>
                              <li><a href="{{route('hot-new-sale',2)}}">Sản phẩm mới</a></li>
                              <li><a href="{{route('hot-new-sale',1)}}">Sản phẩm hot</a></li>
                              <li><a href="{{route('hot-new-sale',3)}}">Sản phẩm khuyến mãi</a></li>
                          </ul>
                      </div>
                      <div class="products-catogory-Search">
                          <form method="get" action="{{route('search-products-by',['product_type'=>0,'id_brand'=>0,'cheap'=>0])}}">
                              <!-- nhớ chèn _token nếu dùng method POST -->
                              <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
                              
                              <div class="select-by-brand">
                              <span>Thương hiệu</span>
                                <ul>
                                @foreach($brands as $brand)
                                	@if($brand->id == $checked_brand)  
                                  		<li><input type="radio" name="rad_brand" data="{{$brand->name}}" checked="checked"  value="{{$brand->id}}" /><label>{{$brand->name}}</label></li>
                                    @else
                                    	<li><input type="radio" name="rad_brand" data="{{$brand->name}}"  value="{{$brand->id}}" /><label>{{$brand->name}}</label></li>
                                    @endif
                                @endforeach
                                </ul>
                              </div>
                                                         
                             
                              <div class="select-by-price">
                              <input type="hidden" id="checked_price" value="{{$checked_price}}">
                              	<span>Giá sản phẩm</span>
                                <ul>
                                  <li><input type="radio" name="rad_price" data="&lt; 10.000.000 đ"  value="10000000" /><label>&lt; 10.000.000 đ</label></li>
                                  <li><input type="radio" name="rad_price" data="&lt; 15.000.000 đ"  value="15000000" /><label>&lt; 15.000.000 đ</label></li>
                                  <li><input type="radio" name="rad_price" data="&lt; 20.000.000 đ"  value="20000000" /><label>&lt; 20.000.000 đ</label></li> 
                                  <li><input type="radio" name="rad_price" data="&lt; 25.000.000 đ"  value="25000000" /><label>&lt; 25.000.000 đ</label></li>
                                  <li><input type="radio" name="rad_price" data="&lt; 30.000.000 đ"  value="30000000" /><label>&lt; 30.000.000 đ</label></li>                              
                                </ul>
                              </div>
                               
                              
                              <div class="select-by-other">
                             <input type="hidden" id="checked_other" value="{{$checked_other}}">
                             	<span>Tùy chọn khác</span>	
                                <ul>
                                  <li><input type="radio" name="rad_other" data="New" value="otherNew" /><label>New</label></li>
                                  <li><input type="radio" name="rad_other" data="Sale" value="otherSale" /><label>Sale</label></li>
                                  <li><input type="radio" name="rad_other" data="Hot" value="otherHot" /><label>Hot</label></li>
                                </ul>
                              </div>
                              <div class="btn-search"><button id="btnSearch" type="submit" name="btnSearch">Tìm kiếm</button>
                              </div>
                          </form>
                      </div>
                  </div>
               <div class="products-show">
               		@if(count($products)==0)
               			<span style="color: orange;font-weight: bold; margin-left: 475px;">Không tìm thấy sản phẩm liên quan ...</span>
               		@else

               		@foreach($products as $product)
                    <div class="small-car-item">
		                        <ul class="list-color-car">
		                        @foreach($arr_colors as $key=>$val)  	
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
		                          <span class="new-price">  {{number_format($product->promotion_price)}} </span><span class="new-vnd">đ</span><br /><span class="old-price">{{number_format($product->unit_price)}} </span><span class="old-vnd">đ</span>
		                          	@else
		                          	<span class="new-price">  {{number_format($product->unit_price)}} </span><span class="new-vnd">đ</span><br><span class="old-price"></span>
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
                 <!--  <div class="row" align="center" id='button_paginate'>
									<p  id="info_button">{{$products->links()}}</p>
							</div> -->
                  <div class="products-paginate">
                      <div class="wrapper-a">
                        <!-- <span><a href="">&lt&lt</a></span><span><a href="">{{$products->links()}}</a></span><span><a href="">&gt&gt</a></span> -->
                        {{$products->links()}}
                      </div>
                  </div> 
                    @endif
        </section>
    </main>
<script type="text/javascript">
      $(document).ready(function(){
      	 $('input').each(function(index){
    			if($(this).val()==$('#checked_price').val() || $(this).val()==$('#checked_other').val())
    				$(this).attr('checked','checked');
		 });

 		//set event for tag input is checked
		 $('input').each(function(index){
    				if($(this).attr('checked')=='checked')
    					$(this).parent('li').parent('ul').prev('span').html($(this).attr('data'));
		 });


         $('#container #main-products .products-catogory .products-catogory-Search > form > div > ul > li > label').click(function(){
             $(this).parent('li').children('input').prop('checked', true).trigger('change');
             
        });
        $('#container #main-products .products-list .products-catogory .products-catogory-Search > form > div').hover(function(){
            $(this).children('ul').toggle();
        });

        $('#container #main-products .products-list .products-catogory .products-catogory-Search > form > div > ul li').css('background','url("sources/images/icon-unchecked.png") no-repeat left');
        $('#container #main-products .products-catogory input:checked').hide();
        $('#container #main-products .products-catogory input:checked').parent('li').css('background','url("sources/images/icon-checked.png") no-repeat left');

          $("#container #main-products .products-catogory .products-catogory-Search > form > div > ul > li > input").change(function(){
          	$(this).parent('li').parent('ul').prev('span').html($(this).attr('data'));
                  $(this).parent('li').parent('ul').children('li').children('input').show();
                  $(this).parent('li').parent('ul').children('li').css("background",'url("sources/images/icon-unchecked.png") no-repeat left');
                $(this).parent('li').css('background','url("sources/images/icon-checked.png") no-repeat left');
                $(this).hide();
                
          });
         
      });

    </script>
@endsection