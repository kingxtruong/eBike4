@extends('master')
@section('content')
<main id="main-detail">
        <section class="path-page-wrapper">
            <div class="path-page">
                <a class="home-page" href="file:///E:/KingBikeWeb/KingBikeWeb/index.html" >Trang chủ</a><h3 style="display: inline-block;"></h3> <a class="hot-page" href="file:///E:/KingBikeWeb/KingBikeWeb/index.html" >Hot</a><h3 style="display: inline-block;"></h3> <a class="new-page" href="file:///E:/KingBikeWeb/KingBikeWeb/index.html" >New</a><h3 style="display: inline-block;"></h3><span>Xe điện BRIDGESTONE PKD18</span>
            </div>
        </section>
     	<section class="show-detail">
            <section class="product-detail">
                <div class="product-detail-image">
                           <img id="images-detail" src="sources/images/products/{{$product[0]['thumbnail']}}" style="width: 385px; height: 355px" alt="image product" data-zoom-image=""/>
                </div>
                <div class="product-detail-info">
                    <h1>{{$product[0]['name']}}</h1>
                    <span>Hãng: </span><span>{{$product[0]['brand_name']}}</span><img src="sources/images/straightSlash.jpg" style="height: 14px;margin-left: 10px;margin-right: 10px;" alt=""><span>Mã SP:</span><span>{{$product[0]['id']}}</span>
                    <ul class="star">
                               
                                @if($product[0]['num_likes']>1500)
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
                                  @elseif($product[0]['num_likes']>1000)
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
                                  @elseif($product[0]['num_likes']>700)
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
                    <div class="unit-price">
                                 @if($product[0]['promotion_price']>0)
                                  <span class="new-price">{{number_format($product[0]['promotion_price'])}} </span><span class="new-vnd">đ</span><span class="VAT">(Đã bao gồm VAT)</span>
                                  <br /><span class="old-price">{{number_format($product[0]['unit_price'])}} </span><span class="old-vnd">đ</span>
                                  @else
                                  <span class="new-price">{{number_format($product[0]['unit_price'])}} </span><span class="new-vnd">đ</span><span class="VAT">(Đã bao gồm VAT)</span>
                                  @endif


                                  
                                 
                    </div>
                    <span class="status-title">Tình trạng: </span>
                                  @if($product[0]['num_products']>0)
                                   <span class="status">Còn hàng</span> 
                                   @else
                                   <span class="status">Hết hàng</span>
                                   @endif

                                  <div class="gift">
                                      <p class="gift-title">QUÀ TẶNG ĐI KÈM</p>
                                       <ul class="list-gift">
                                            <li>Tặng mũ bảo hiểm phong cách Italy trị giá 220 nghìn đồng</li>
                                            <li>Mua trả góp lãi suất 0%</li>
                                            <li>Miễn phí vận chuyển bán kính 20km</li>
                                            <li>Tặng gói cứu hộ xe điện tận nơi miễn phí trong 1 năm</li>
                                            <li>Tặng thẻ giảm giá 300 nghìn đồng</li>
                                       </ul>
                                  </div>
                                  <div class="form-product">
                                        <form id="form-product" method="get" action="" enctype="multipart/form-data">
                                            <div class="select-color">
                                                <label >Màu sắc</label>
                                                <select id='choose-color'>
                                                    
                                                        @foreach($arr_colors as $key=>$val)   
                                                            @foreach($val as $val1)              
                                                                    @foreach($val1 as $val2)
                                                                      <option image="{{$val2['image']}}" value="{{$val2['color']}}" style="
                                                                       ">{{$val2['color']}}</option>
                                                                    @endforeach
                                                              
                                                            @endforeach
                                                        @endforeach
                                                </select>
                                                <label class="lbl-color"></label>
                                            </div>
                                            <div class="form-action">
                                                <div class="product-quantity">                          
                                                    <span class="qtyminus" data-field="quantity">-</span>
                                                    <input id="txt_qty" type="text" class="txt_qty" value="1" maxlength="12" id="txt_qty" name="txt_qty">    
                                                    <span class="qtyplus" data-field="quantity">+</span>                                        
                                                </div>
                                                <button type="button" id="add-to-cart" class="add-to-cart" show-ordering="#ordering-hidden" title="Cho vào giỏ hàng"
                                                product-id="{{$product[0]['id']}}" product-name="{{$product[0]['name']}}" product-name="{{$product[0]['name']}}" product-thumbnail="{{$product[0]['thumbnail']}}"><i class=""></i> <span>Thêm vào giỏ hàng</span>
                                                </button>



<!-- //////////////////////////////////////////////////////////////////////// -->
                                                <!--ordering-hidden  -->
                                               
                                                <div id="ordering-hidden" class="ordering-hidden">
                                                </div>
                                           
                                                <div class="contact">Mua hàng gọi ngay:<a href="tel:1800.6601">1800.6601</a></div>
                                            </div>
                                        </form>
                                  </div>
                </div>
            </section>
            <div style="    margin-top: 40px;
             font-size: 20px;">Sản phẩm liên quan</div>
            <section class="product-related">
                <div class="demo1">
                        <div class="item1">
                                <ul id="content-slider" class="content-slider">
                                        @foreach($products_related as $product)
                                        <li data-thumb="sources/images/products/{{$product->thumbnail}}"> 
                                        <a href="{{route('product-detail',$product->id)}}"><img src="sources/images/products/{{$product->thumbnail}}"  /></a>
                                         </li>


                                        @endforeach
                                         <!-- <li data-thumb="img/thumb/cS-9.jpg"> 
                                        <a href=""><img src="sources/img/cS-2.jpg" /></a>
                                         </li> -->
                                 </ul>
                        </div>
                </div>
            </section>
     	</section>
     	<section class="tab-info">
     		<section class="tab-title">
     			<ul class="tab-list">
     				<li class="description">
     					<h3><span>Mô tả</span></h3>
     				</li>
     				<li class="custom">
     					<h3><span>Tab tùy chỉnh</span></h3>
     				</li>
     				<li class="evaluate">
     					<h3><span>Đánh giá (APP)</span></h3>
     				</li>
     			</ul>
     		</section>
     		<section class="tab-show">
     			<div class="tab-show-description">
     				<div class="rte">
										
                                										<p>Xe điện NIJIA DELUXE</p>
                                <p>Xe điện NIJIA DELUXE&nbsp;sẽ cho bạn cảm giác đó. NIJIA DELUXE được thiết kế cải tiến vượt trội, nâng cấp thêm động cơ so với phiên bản M6. Nếu bạn đã từng trải nghiệm em M6 trên đường phố, thì chắc chắn em xe điện NIJIA DELUXE này sẽ còn làm bạn thích thú và ấn tượng hơn rất nhiều.</p>
                                <p>Nhờ động cơ khỏe khoắn kết hợp với bách xe được trang bị thêm thắng cơ an toàn, bộ giảm sóc sẽ cho bạn những phút giây bon bon trên đường thoải mái.</p>
                                <p>Thiết kế độc lập nhưng hài hoà kiểu dáng.<br>
                                Từ ghi-đông, cốp xe, sàn xe, yên xe được thiết kế tạo sự khoẻ khoắn. Kết hợp với giỏ xe phía trước có kiểu dáng thông minh, tạo sự tiện dụng khi sử dụng.</p>
                                <p>Thoải mái khi sử dụng.<br>
                                Giỏ xe&nbsp;<br>
                                Giỏ xe được bố trí ở phần thân trước xe rất thông minh, theo cách thiết kế mới. Giỏ xe được thiết kế thanh gọn, tiện dụngcó thể dễ dàng mở ra và đựng vật dụng bạn muốn. Chắc chắn rằng, với tiện dụng của giỏ xe em NIJIA DELUXE này sẽ làm nhiều bạn yêu thích.</p>
                                <p>Động cơ<br>
                                Động cơ em NIJIA DELUXE này thì bạn khỏi phải chê rồi, NIJIA DELUXE được trang bị động hiện đại, khỏe khoắn, đặc biệt vi vu trên đường rất em đấy.</p>
																		
									</div>
     			</div>
     			<div class="tab-show-custom">
     				Các nội dung Hướng dẫn mua hàng viết ở đây
     			</div>
     			<div class="tab-show-evaluate"></div>
     		</section>
     	</section>
        <section class="products-other-type">
            <div class="products-other-type-title">
                <a href="">Sản phẩm khác</a>
            </div>
            <div class="products-other-type-show">
                @foreach($other_products as $product)
                    <div class="small-car-item">
                                <ul class="list-color-car">
                                @foreach($arr_other_colors as $key=>$val)     
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
    </main>

    <!-- tab -->
    <script type="text/javascript">
    	$(document).ready(function(){
    		
    		$('.tab-list .description').css('background-color','orange');
    		$('.tab-list .custom').css('background-color','#111');
    		$('.tab-list .evaluate').css('background-color','#111');

    		$('.tab-list .description').click(function(){
    			$(this).css('background-color','orange');
    			$('.tab-list .custom').css('background-color','#111');
    			$('.tab-list .evaluate').css('background-color','#111');
    			
    			$('.tab-show-custom').css('display','none');
    			$('.tab-show-evaluate').css('display','none');
    			$('.tab-show-description').fadeIn(2000);
    		});
    		$('.tab-list .custom').click(function(){
    			$(this).css('background-color','orange');
    			$('.tab-list .description').css('background-color','#111');
				$('.tab-list .evaluate').css('background-color','#111');
				$('.tab-show-description').css('display','none');
				$('.tab-show-evaluate').css('display','none');
    			$('.tab-show-custom').fadeToggle(2000);
    			
    		});
    		$('.tab-list .evaluate').click(function(){
    			$(this).css('background-color','orange');
    			$('.tab-list .description').css('background-color','#111');
    			$('.tab-list .custom').css('background-color','#111');
    			$('.tab-show-description').css('display','none');
    			$('.tab-show-custom').css('display','none');
    			$('.tab-show-evaluate').show(2000);
    			
    		});

    	});
    </script>

    <!-- slide show list products as same type -->
    <script>
    	 $(document).ready(function() {
			     $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
		});
    </script>
   
<!-- zoom image product and change color  and  button/span plus-minus -->
     <script >
             $(document).ready(function(){
                    //change color for label-color when select color
                   $('#container #main-detail .show-detail .product-detail .product-detail-info .select-color .lbl-color').css('background-color',$(".select-color select option:selected").attr('value'))


                    $(".select-color select").change(function () {
                    var image=$(".select-color select option:selected").attr('image');
                    var color=$(".select-color select option:selected").attr('value');
                    $('.product-detail-image  img').remove();
                    $('.product-detail-image').append('<img style="width: 385px; height: 355px" />');
                       $('.product-detail-image  img').attr('src',"sources/images/products/"+image);
                    $('.product-detail-image  img').attr('data-zoom-image',"sources/images/products/"+image);

                    $('#container #main-detail .show-detail .product-detail .product-detail-info .select-color select').css('color','#999');
                    $('#container #main-detail .show-detail .product-detail .product-detail-info .select-color select').next('label').css('background-color',color);

                    //zoom
                    $('.product-detail-image  img').elevateZoom({

                            zoomWindowFadeIn: 500,
                            zoomWindowFadeOut: 500,
                            lensFadeIn: 500,
                            lensFadeOut: 500

                    });  


                     });

                    

                    $('.product-detail-image  img').elevateZoom({

                    zoomWindowFadeIn: 500,
                    zoomWindowFadeOut: 500,
                    lensFadeIn: 500,
                    lensFadeOut: 500

                    });

             

                    $('.product-quantity .qtyminus').click(function(){
                        var qty=$(this).next('input').val();
                        if(qty<2){
                            qty=1;
                            $(this).next('input').val(qty);
                        }
                        else{
                            qty--;
                            $(this).next('input').val(qty); 
                        }
                          
                    });

                    $('.product-quantity .qtyplus').click(function(){
                        var qty=$(this).prev('input').val();
                        qty++;
                        $(this).prev('input').val(qty); 
                    });


                 
            });

     </script>

    
<!-- show lightbox form-ordering-hidden -->
    <script type="text/javascript">

function number_format( number, decimals, dec_point, thousands_sep ) {
                      
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "," : dec_point;
    var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
                              
    // return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
     return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) ;
}


         $(document).ready(function() {
             // $('#txt_qty').change(function() {
             //    // $('span').text('Trường nhập đã được thay đổi');
             //    // alert('txt_qty is change');
             // });
            $('button.add-to-cart').click(function(e) {
                      e.preventDefault();
                      var totalQty;
                      var totalPrice;
                      var items;
                      var product_id=$(this).attr('product-id');
                      var product_name=$(this).attr('product-name');
                      var product_color=$("#choose-color").find(":selected").val();
                      var product_thumbnail=$("#images-detail").attr('src');
                      var add_qty=parseInt($('#txt_qty').val());
                      var check_ajax=1;
                      $.ajax({
                        url: 'add-to-cart/'+product_id+'/'+add_qty+'/'+check_ajax,
                        type:'get',
                        dataType : 'json',
                        data:{"id":product_id,"quantity":add_qty,"check_ajax":check_ajax},
                        success:function(data)
                        {
                                
                                       totalQty=data['totalQty'];
                                       totalPrice=data['totalPrice'];
                                       items=data['items'];
                                       
                                       var html = '';
                                          // add html for div#ordering-hidden
                                            // html +='<span style="font-size:15px;color:orange;text_align:center;">Vui lòng chọn số lượng sản phẩm</span>';
                                            
                                               html +='<div class="product-add-to-cart">';
                                               html +='Sản phẩm <a href="product-detail/'+product_id+'">'+product_name+'</a><span></span> đã thêm vào giỏ hàng</div>';
                                                html +='<div class="number-product">';
                                                    html +='Giỏ hàng của bạn <span id="totalQty_lightbox">'+totalQty+'</span></div>';
                                                  html +='<div class="form-ordering-hidden-wrapper">';
                                                          html +='<form class="form-ordering-hidden" method="get" >'; 
                                                              html += '<div class="products-show">';
                                                                 $.each (items, function (key,item){    

                                                                      // html += '<span>'+item+'</span>';
                                                                 html += '<div class="product-item" id="product-item-'+item["item"]["id"]+'">';
                                                                   html += '<div class="product-thumbnail"><a href="product-detail/'+item['item']['id']+'">';
                                                                   html += '<img src="sources/images/products/'+item['item']['thumbnail']+'" style="width: 120px;height: 100px;border: 1px solid #949694;"></a></div>';                        
                                                                        html +='<div class="product-info">';
                                                                        html +='<p class="product-info-name"><a href="product-detail/'+item['item']['id']+'">'+item['item']['name']+'</a><span></span></p>';
                                                                            html +='<p class="product-info-price">';
                                                                            if(item['item']['promotion_price']==0)
                                                                              html += number_format(item['item']['unit_price'])+'₫</p></div>' ;
                                                                            else 
                                                                              html +=number_format(item['item']['promotion_price'])+'₫</p></div>';
                                                                               html +='<div class="product-action">';
                                                                                     html +='<div class="number-products">';
                                                                                         html += '<input type="text" class="txt_number_products" value="'+item['qty']+'" maxlength="12" id="txt_number_products" name="txt_number_products" readonly="readonly"/>';
                                                                                          html +='<input id="btn-plus" type="image" src="sources/images/caret-up.png" alt="SUBMIT" name="" id_product='+item['item']['id']+' />';
                                                                                          html +='<input id="btn-minus" type="image" src="sources/images/caret-down.png" alt="SUBMIT" name="" id_product='+item['item']['id']+' /> ';
                                                                                         html += ' </div>';
                                                                                         html +=' <div class="delete-products">';
                                                                                          html += ' <a class="ordering-hidden-delete-item" href="" name_product="'+item['item']['name']+'" id_product='+item['item']['id']+'>Xóa sản phẩm</a></div>';
                                                                                      html +='</div>';
                                                                                  html +='</div>';
                                                                  });     
                                                                             html +='</div>';
                                                                                       
                                                                                  html +='<div class="form-action">';
                                                                                           html +=' <div class="continue-buy">';
                                                                                              html +='  <a href="" id="continue-buy"><img src="sources/images/caret-left-green.png"> Tiếp tục mua hàng</a>';
                                                                                           html +=' </div>';
                                                                                           html +=' <div class="totalPrice-buy">';
                                                                                               html +=' <div class="totalPrice">';
                                                                                               html +=' Tổng tiền :  <span id="totalPrice_lightbox">'+number_format(totalPrice)+' </span>'+' đ';
                                                                                               html +=' </div>';
                                                                                               html +=' <div class="buy">';
                                                                                                  html +='  <a href="cart" id="go-to-buy" class="go-to-buy" name="go-to-buy">Giỏ hàng chi tiết</a>';
                                                                                               html +=' </div>';
                                                                                           html +=' </div>';
                                                                                       html +=' </div>';
                                                                    html +='</form>';
                                                              html += '   </div>';

                                           $('#ordering-hidden').html(html);
                                       
                                          $('#cart-load').load(location.href + ' #cart-load');

                                         $('.number-products > input#btn-plus').click(function(){

                                              var qty=$(this).parent('.number-products').children('input.txt_number_products').val();
                                              var add_qty=1;
                                              var id_product=$(this).attr('id_product');
                                              qty++;
                                              $(this).parent('.number-products').children('input.txt_number_products').val(qty); 
                                              $.ajax({
                                                url: 'add-to-cart/'+id_product+'/'+add_qty+'/1',
                                                type:'get',
                                                dataType : 'json',
                                                data:{"id":id_product,'quantity':add_qty},
                                                success:function(data){
                                                    $('#totalPrice_lightbox').html(number_format(data['totalPrice']));
                                                     $('#totalQty_lightbox').html(data['totalQty']);
                                                    $('#cart-load').load(location.href + ' #cart-load');
                                                }

                                             });
                                              return false;
                                             
                                          });

                                          $('.number-products > input#btn-minus').click(function(){
                                              var qty=$(this).parent('.number-products').children('input.txt_number_products').val();
                                              var reduce_qty=1;
                                              var id_product=$(this).attr('id_product');

                                              if(qty<2){
                                                  qty=0;
                                                  $(this).parent('.number-products').children('input.txt_number_products').val(qty);
                                              }
                                              else{
                                                  qty--;
                                                  $(this).parent('.number-products').children('input.txt_number_products').val(qty); 
                                              }
                                              var check_empty_cart=1;
                                              
                                              $('input.txt_number_products').each(function(index){
                                                  if($(this).val()!=0)
                                                  {
                                                    check_empty_cart=0;
                                                  }
                                             });
                                              if(check_empty_cart==1 )
                                              {
                                                         $('#totalPrice_lightbox').html("0");
                                                         $('#totalQty_lightbox').html("0");
                                                         $('#cart-load > a > span').html("");
                                                         $('#dropDownCart').html('<span style="font-weight:bold;color:orange;">Không có sản phẩm nào trong giỏ hàng .</span>');
                                              }
                                               
                                                 $.ajax({
                                                  url: 'reduce-to-cart/'+id_product+'/'+reduce_qty+'/1',
                                                type:'get',
                                                dataType : 'json',
                                                data:{"id":id_product,'quantity':reduce_qty},
                                                success:function(data){
                                                         $('#totalPrice_lightbox').html(number_format(data['totalPrice']));
                                                         $('#totalQty_lightbox').html(data['totalQty']);
                                                         $('#cart-load').load(location.href + ' #cart-load');
                                                }
                                                });
                                              return false;
                                                
                                            });


                                         $('.ordering-hidden-delete-item').click(function(){

                                                  var id_product=$(this).attr('id_product');
                                             
                                                  $('#product-item-'+id_product).remove(); 
                                                  $('.product-add-to-cart').html("Bạn vừa xóa "+'<a href="product-detail/'+id_product+'">'+$(this).attr('name_product')+'</a>'+" ra khỏi giỏ hàng");
                                                  if($('.product-item').length==0)
                                                  {
                                                      $('#totalPrice_lightbox').html("0");
                                                      $('#totalQty_lightbox').html("0");
                                                      $('#cart-load > a > span').html("");
                                                      $('#dropDownCart').html('<span style="font-weight:bold;color:orange;">Khôncó sản phẩm nào trong giỏ hàng .</span>');
                                                      //return false;
                                                  }
                                                  $.ajax({
                                                    url:"remove-item-cart/"+id_product,
                                                    type:"get",
                                                    dataType:"json",
                                                    data:{"id":id_product},
                                                    success:function(data)
                                                      { 
                                                        $('#totalPrice_lightbox').html(number_format(data['totalPrice']));
                                                        $('#totalQty_lightbox').html(data['totalQty']);
                                                        $('#cart-load').load(location.href + ' #cart-load');
                                                        // return false;
                                                      }
                                                  });
           
                                                  return false;
                                              });

                                          $("#continue-buy").click(function(){
                                            $('#over, .ordering-hidden').fadeOut(300 , function() {
                                                 $('#over').remove();
                                                 return false;
                                             });
                                            return false;
                                          });
                               

                                         

                        }
                       });
                         

                          //SHOW CÁI LIGHT-BOX
                          var ordering_lightbox = $(this).attr('show-ordering');   
                          $(ordering_lightbox).fadeIn(300);
                          $('body').append('<div id="over">');
                          $('#over').fadeIn(300); 

                      return false;
                  
            });

           // khi click đóng hộp thoại
           $(document).on('click', "a.close, #over", function() {
                 $('#over, .ordering-hidden').fadeOut(300 , function() {
                     $('#over').remove();
                 });
                return false;
           });
          });
    </script>
@endsection