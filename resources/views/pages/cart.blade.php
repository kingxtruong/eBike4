@extends('master')
@section('content')
<main id="main-products">
         <div class="path-page-wrapper">
            <div class="path-page">
                <a href="{{route('homepage')}}" >Trang chủ</a><h3 style="display: inline-block;"></h3><span style="color: #777;">Giỏ hàng</span>
            </div>
        </div>
        <div class="main-products-title-wrapper">
            <div class="main-products-title">
                <h1 >Giỏ hàng</h1>
            </div>
        </div>
        <section class="cart-list" id="cart-list">
            <div class="cart-list-title">
				<span>Ảnh sản phẩm</span><span>Tên sản phẩm</span><span>Màu sắc</span><span>Đơn giá</span><span>Số lượng</span><span>Thành tiền</span><span>Ghi chú</span>
            </div>
            	@if(Session::has('cart'))
            		<form method="get" action="">
            			@foreach($items as $item)
			            <div class="cart-item" id="cart-item-{{$item['item']->id}}">
							<div class="product-thumbnail"><a href="{{route('product-detail',$item['item']->id)}}"> <img src="sources/images/products/{{$item['item']->thumbnail}}" style="width: 120px;height: 100px;"> </a>
							</div>
							<div class="product-name">
								<span><a href="{{route('product-detail',$item['item']->id)}}">{{$item['item']->name}}</a></span>
								<a class="delete-cart-item" href="" id_product="{{$item['item']->id}}" >Xóa sản phẩm</a>
							</div>
							<div class="select-color">                     
			                    <select class='choose-color'>
			                    	@foreach($arr_colors as $k=>$v)
			                    		@foreach($v as $k1=>$v1)
				                    		@if($k1==$item['item']->id)
				                    			@foreach($v1 as $v2)
				                            			<option image="sources/images/products/{{$v2['image']}}" value="{{$v2['image']}}" color="{{$v2['color']}}" >{{$v2['color']}}</option>
				                                @endforeach
				                            @endif
				                        @endforeach
			                        @endforeach    
			                    </select>   
			                </div>
			                <div class="unit_price">                     
			                    @if($item['item']->promotion_price > 0)<span price="{{$item['item']->promotion_price}}">{{number_format($item['item']->promotion_price)}}</span>@else<span price="{{$item['item']->unit_price}}">{{number_format($item['item']->unit_price)}}@endif</span>₫
			                </div>
			                <div class="product-quantity">  
			                	<input type="text" class="txt_number-cart-item" value="{{$item['qty']}}" maxlength="12" id="txt_number-cart-item" name="txt_number_products">
			                    <input class="btn-plus-cart-item" id_product="{{$item['item']->id}}" type="image" src="sources/images/caret-up.png" alt="SUBMIT" name="" />
			                    <input class="btn-minus-cart-item" id_product="{{$item['item']->id}}" type="image" src="sources/images/caret-down.png" alt="SUBMIT" name="" />  
			                                                    
			                </div>
			                <div class="total_price">                     
			                    <span id="total_price_{{$item['item']->id}}">{{number_format($item['price'])}}</span>₫
			                </div>
			                <div class="note-cart-item">
			                	<textarea rows="5" cols="20" placeholder="........"></textarea>
			                </div>
			            </div>
			            <div class="line-show-action" id="line-show-action-{{$item['item']->id}}">
			   				<hr />
			   			</div>			
			          
			   		@endforeach
			   			<div class="line-show-action">
			   				<hr />
			   			</div>
			   			<div class="total-price_all">
			   				<div class="total-price-all-info">
			   					<span>Tổng tiền : </span><span class="total-price-all-info-show">{{number_format(Session('cart')->totalPrice)}}₫</span>
			   				</div>
			   			</div>
			   			<div class="total-price-action">
			   				<button type="button" id="form-cart-action" name="">Tiến hành đặt hàng</button>
			   			</div>
			   			<div class="cart-list-footer">

			   			</div>

			        </form>
			    @else
			    	<span style="color: orange;font-weight: bold; margin-left: 333px;">Không có sản phẩm nào trong giỏ hàng.      Vào đây để<a href="{{route('products')}}" style="font-size:18px;color: green;font-weight:bold;">&nbsp&nbsp>>mua hàng<<</a></span>
			    @endif
        </section>
 
    </main>
<script type="text/javascript">
	function number_format( number, decimals, dec_point, thousands_sep ) {
	                      
	    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
	    var d = dec_point == undefined ? "," : dec_point;
	    var t = thousands_sep == undefined ? "," : thousands_sep, s = n < 0 ? "-" : "";
	    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
	                              
	    // return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
	     return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) ;
	}
      $(document).ready(function(){

      	//set img(src) when select option color
      	$(".choose-color").change(function () {
                    var image=$(".choose-color option:selected").attr('image');
                    var color=$(".choose-color option:selected").attr('color');
                    $(this).parent('.select-color').parent('.cart-item').children('.product-thumbnail').children('a').children('img').attr('src',$(this).children('option:selected').attr('image'));
                     });

      	$('#form-cart-action').hover(
      		function(){
      			$(this).css('background','orange').css('font-weight','bold').css('border','3px solid #ed810e');
      			// alert(123);
      		},
      		function(){
      			 $(this).css('background','#15d86d').css('font-weight','unset').css('border','none');
      		}
      		);

      	$('input.btn-plus-cart-item').click(function(){

	            var qty=$(this).parent('.product-quantity').children('input.txt_number-cart-item').val();
	            var add_qty=1;
	            var id_product=$(this).attr('id_product');
	            qty++;
	            $(this).parent('.product-quantity').children('input.txt_number-cart-item').val(qty); 
	            var unit_price=$(this).parent('.product-quantity').prev('.unit_price').children('span').attr('price');
	            var item_price=qty*unit_price;
	            $.ajax({
	            url: 'add-to-cart/'+id_product+'/'+add_qty+'/1',
	            type:'get',
	            dataType : 'json',
	            data:{"id":id_product,'quantity':add_qty},
	            success:function(data){
	                $('.total-price-all-info-show').html(number_format(data['totalPrice'])+"đ");
	                $('#total_price_'+id_product).html(number_format(item_price));
	                $('#cart-load').load(location.href + ' #cart-load');
	              }
	           });
	            return false;
	                                             
	        });

 		$('input.btn-minus-cart-item').click(function(){
								           var qty=$(this).parent('.product-quantity').children('input.txt_number-cart-item').val();
								           var reduce_qty=1;
								           var id_product=$(this).attr('id_product');

								           if(qty<2){
								               qty=0;
								               $(this).parent('.product-quantity').children('input.txt_number-cart-item').val(qty);
								           }
								           else{
								               qty--;
								               $(this).parent('.product-quantity').children('input.txt_number-cart-item').val(qty); 
								           }
								           var unit_price=$(this).parent('.product-quantity').prev('.unit_price').children('span').attr('price');
									       var item_price=qty*unit_price;
								           var check_empty_cart=1;
								                                              
								        $('input.txt_number-cart-item').each(function(index){
								               if($(this).val()!=0)
								               {
								                 check_empty_cart=0;
								               }
									          });
                                           if(check_empty_cart==1 )
	                                          {
	                                                     $('#totalPrice_lightbox').html("0");
	                                                     $('#totalQty_lightbox').html("0");
	                                                     $('.total-price-all-info-show').html("0");
	               										 $('#total_price_'+id_product).html("0");
	                                                     $('#cart-load > a > span').html("");
	                                                     $('#dropDownCart').html('<span style="font-weight:bold;color:orange;">Không có sản phẩm trong giỏ hàng .</span>');
	                                          }
	                                           
	                                             $.ajax({
	                                              url: 'reduce-to-cart/'+id_product+'/'+reduce_qty+'/1',
	                                            type:'get',
	                                            dataType : 'json',
	                                                data:{"id":id_product,'quantity':reduce_qty},
                                             success:function(data){
	                                                     $('.total-price-all-info-show').html(number_format(data['totalPrice']));
	               										 $('#total_price_'+id_product).html(number_format(item_price));
	               										 $('#cart-load').load(location.href + ' #cart-load');
	                                            }
	                                            });
                                              	return false;
                                                
              });                                         

 		$('.delete-cart-item').click(function(){

                                                  var id_product=$(this).attr('id_product');
                                             
                                                  $('#cart-item-'+id_product).remove(); 
                                                  $('#line-show-action-'+id_product).remove();
                                                  // $('.product-add-to-cart').html("Bạn vừa xóa "+'<a href="product-detail/'+id_product+'">'+$(this).attr('name_product')+'</a>'+" ra khỏi giỏ hàng");
                                                  if($('.cart-item').length==0)
                                                  {
                                                      $('.total-price-all-info-show').remove();
	                								  
                                                      $('#cart-load > a > span').remove();

                                                      $('#dropDownCart').html('<span style="font-weight:bold;color:orange;">Khôncó sản phẩm nào trong giỏ hàng .</span>');

                                                      $('#cart-list').html(
                                                      	'<span style="color: orange;font-weight: bold; margin-left: 333px;">Không có sản phẩm nào trong giỏ hàng.      Vào đây để<a href="{{route('products')}}" style="font-size:18px;color: green;font-weight:bold;">&nbsp&nbsp>>mua hàng<<</a></span>'
                                                      	);
                                                  }
                                                  $.ajax({
                                                    url:"remove-item-cart/"+id_product,
                                                    type:"get",
                                                    dataType:"json",
                                                    data:{"id":id_product},
                                                    success:function(data)
                                                      { 
                                                        $('.total-price-all-info-show').html(number_format(data['totalPrice']));
                                                        $('#cart-load').load(location.href + ' #cart-load');
                                                      }
                                                  });
           
                                                  return false;
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