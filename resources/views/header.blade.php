<header >
     <div class="header-wrapper">

        <div class="header_topbar">
        <div class="header_topbar_phone header_topbar_phone-left"  >
          <span>Mua hàng & CSKH :  <a class="buyCare" href="">01010101010</a>   /  Tư vấn kỹ thuật :  <a class="supportTech" href="#">0979797979</a></span>
        </div>
        <div class="header_topbar_account header_topbar_account-right" >
          <ul>
            <li>
              <a href="" class="signUp">Đăng ký</a>
            </li>
            <li class="slashSymbol">
              /
            </li>
            <li>
              <a href="" class="signIn">Đăng nhập</a>
            </li>
            <li class="slashSymbol">
              /
            </li>
            <li>
              <a href="" class="like">Yêu thích</a>
            </li>
          </ul>
        </div>

      </div>
      <nav>
          <div class="nav_logo nav_logo-location">
          </div>
          <div class="nav_menu nav_menu-location" >
            <ul>
              <li>
                <a href="{{route('homepage')}}">Trang chủ</a>
              </li>
              <li class="nav_menu_product" id="nav_menu_product">
                  <a targer="_blank" href="{{route('products')}}">Sản phẩm ></a>
                  <div class="dropDownProducts">

                    <div class="type_products">

                      <ul>
                        @foreach($type_products as $type_product)
                        <li class="sub">
                              <a href="">{{$type_product->name}}</a>
                               @foreach($arr_brands as $brand)
                               
                                   @foreach($brand as $k=>$v)
                                   
                                    
                                          @if ($k == $type_product->id)
                                            <ul>
                                              @foreach($v as $v1)
                                              <li><a href="{{route('search-products-by',['product_type'=>$type_product->id,'id_brand'=>$v1['brand_id'],'cheap'=>0])}}">{{$type_product->name}} {{$v1['brand_name']}}</a></li>
                                              @endforeach
                                              <li><a href="">Sản phẩm nổi bật</a></li>
                                              <li><a href="">Lựa chọn ưa thích</a></li>
                                              <li><a href="">Mẫu mới</a></li>
                                              <li><a href="">Sản phẩm khuyến mãi</a></li>
                                              <li><a href="">Sản phẩm xuất khẩu</a></li>
                                              <li><a href="">Sản phẩm nhập khẩu</a></li>
                                              <li><a href="">Quà tặng đi kèm</a></li>
                                              <li><a href="">{{$type_product->name}} giá rẻ</a></li>
                                              <li><a href="">{{$type_product->name}} cao cấp</a></li>
                                              <li><a href="">{{$type_product->name}} 5 sao</a></li>
                                            </ul>
                                          @endif
                                 
                                   @endforeach
                                 
                               @endforeach
                                
                        </li>

                        @endforeach
                                <li class="sub">
                                  <a href="">Hàng xuất khẩu</a>
                                  <ul>
                                      <li><a href="">sub ---</a></li>
                                      <li><a href="">sub ---</a></li>
                                      <li><a href="">sub ---</a></li>
                                      <li><a href="">sub ---</a></li>
                                      <li><a href="">sub ---</a></li>
                                      <li><a href="">sub ---</a></li>
                                      <li><a href="">sub ---</a></li>
                                  </ul>
                                </li>
                                <li class="sub">
                                    <a href="">Hàng nhập khẩu</a>
                                    <ul>
                                      <li><a href="">sub 2</a></li>
                                      <li><a href="">sub 2</a></li>
                                      <li><a href="">sub 2</a></li>
                                      <li><a href="">sub 2</a></li>
                                      <li><a href="">sub 2</a></li>
                                      <li><a href="">sub 2</a></li>
                                      <li><a href="">sub 2</a></li>
                                  </ul>
                                </li>
                                 <li class="sub">
                                    <a href="">Hàng cao cấp</a>
                                </li>
                                 <li class="sub">
                                    <a href="{{route('search-products-by',['product_type'=>0,'id_brand'=>0,'cheap'=>1])}}">Hàng giá rẻ</a>
                                </li>
                                 <li class="sub">
                                    <a href="{{route('hot-new-sale',3)}}">Hàng khuyến mãi</a>
                                </li>
                                 <li class="sub">
                                    <a href="">Hàng được tin dùng</a>
                                </li>

                      </ul>

                    </div>
                    <div class="type_products_show">

                    </div>
                  </div>
              </li>
              <li>
                  <a href="https://themes.bizweb.vn/demo/sixbike">Blog</a>
              </li>
              <li>
                  <a href="https://themes.bizweb.vn/demo/sixbike">Liên hệ</a>
              </li>
              <li>
                  <a href="https://themes.bizweb.vn/demo/sixbike">Giới thiệu</a>
              </li>
            </ul>
          </div>
          <div id="cart-load" class="nav_cart nav_cart-location">
          
            <a id="show-cart" href="{{route('cart')}}"><img src="sources/images/bg-cart1.jpg"/>@if(Session::has('cart')) <span id="totalQty-header">{{Session('cart')->totalQty}} </span>  @endif</a>
            <div id="dropDownCart">
            
                @if(Session::has('cart'))
                  @foreach($product_cart as $product)
                        <div class="row-car-item" id="row-car-item-{{$product['item']['id']}}">
                                <div class="image">
                                    <a href="{{route('product-detail',$product['item']['id'])}}"><img src="sources/images/products/{{$product['item']['thumbnail']}}" width="100px" height="80px"></a>
                                </div>
                                <div class="quantity">{{$product['qty']}}</div>
                                <a id="delete-item-cart-{{$product['item']['id']}}"  id_product="{{$product['item']['id']}}" class="delete-item-cart" href="{{route('remove-item-cart',$product['item']['id'])}}"><img src="sources/images/cross-icon.png"  />    
                                </a>
                                <div class="detail">
                                  <p>
                                    <a href="{{route('product-detail',$product['item']['id'])}}">{{$product['item']->name}}</a>
                                  </p>
                                  <p class="unit-price">
                                  @if($product['item']['promotion_price']==0)
                                    {{number_format($product['item']['unit_price'])}}₫
                                  @else
                                    {{number_format($product['item']['promotion_price'])}}₫
                                  @endif
                                  </p>
                                </div>
                        </div>
                   @endforeach    
                        <div class="total-price">
                          <span class="title-price">Tổng cộng :</span> <span class="totalPrice">{{number_format(Session('cart')->totalPrice)}}₫</span>
                        </div>
                        <div class="payment">
                          <a href="">Thanh toán</a>
                        </div>
                  @else
                      <span style="font-weight:bold;color:orange;">Không có sản phẩm nào trong giỏ hàng .</span>
                  @endif
            </div>
       
          </div>
          <div class="nav_formSearch nav_formSearch-location" >
            <form id="formSearch" method="get" action="{{route('search-all')}}">
              <input id="txtSearch" type="search" name="txtSearch" size="20" placeholder="Tìm kiếm ..."/>

              <input id="straightSlash" type="image" src="sources/images/straightSlash.jpg" alt="SUBMIT" name="" />
              <button id="btnSearch" type="submit" name="btnSearch">&nbsp</button>
            </form>
          </div>

      </nav>
          </div>
    </header>



    <script type="text/javascript">
    function number_format( number, decimals, dec_point, thousands_sep ) {
                      
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "," : dec_point;
    var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
                              
    // return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
     return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) ;
}
      $(document).ready(function(){

        if($('#show-cart > .span').text=="")
          $('#show-cart > .span').css('background-color',green);

        $('.row-car-item .delete-item-cart').click(function(){

          var id_product=$(this).attr('id_product');
          var check;
          $("#row-car-item-"+id_product).remove(); 
            if($('.row-car-item').length==0)
            {
                $('#totalQty-header').remove();
                $('#dropDownCart > *').remove() ;
                $('#dropDownCart').html('<span style="color:orange;font-weight:bold;" >Không có sản phẩm nào trong giỏ hàng .</span>');
            }
          $.ajax({
            url:"remove-item-cart/"+id_product,
            type:"get",
            dataType:"json",
            data:{"id":id_product},
            success:function(data)
              { 
                      $('#totalQty-header').html(data['totalQty']);
                      $('.total-price span.totalPrice').html(number_format(data['totalPrice'])+"₫") ;
                      return false;
              }
          });
           
            return false;
        });


        
      })
    </script>