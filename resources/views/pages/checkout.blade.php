<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="sources/css/checkout.css" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
       

    <link rel="stylesheet" href="sources/js/awesome-bootstrap-checkbox-master/bower_components/Font-Awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="sources/js/awesome-bootstrap-checkbox-master/demo/build.css"/>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body>

  
    <form>

    	<div class="col-md-4" style="min-height: 500px;">    
    		<div id="link-home" class="col-md-12"><a href="{{route('homepage')}}">Electric Bike</a></div>
    		<div id="title-info-buy" class="col-md-7">Thông tin mua hàng</div>
    		<div  class="col-md-5"><a id="signIn-checkout" href=""><span class="glyphicon glyphicon-user"></span><span>   </span>Đăng nhập</a></div>
    		<input type="email" name="email" class="form-control" placeholder="email">
    		<input type="text" name="name" class="form-control" placeholder="Họ tên">
    		<input type="text" name="phone" class="form-control" placeholder="Số điện thoại">
    		<input type="text" name="address" class="form-control" placeholder="Địa chỉ">
    		<select name="city" class="form-control" id="select-city">
    			<option>--Tỉnh thành--</option>
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    <option>4</option>
		    </select>
		    <select name="district" class="form-control" id="select-district">
    			<option>--Quận huyện--</option>
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    <option>4</option>
		    </select>

		
            <label><input type="checkbox" id="check-other-address">&nbsp Giao hàng đến địa chỉ khác</label>
            <div class="other-address">
            		<div id="title-info-buy" class="col-md-7">Thông tin nhận hàng</div>
		            <input type="text" name="name" class="form-control" placeholder="Họ tên">
		    		<input type="text" name="phone" class="form-control" placeholder="Số điện thoại">
		    		<input type="text" name="address" class="form-control" placeholder="Địa chỉ">
		    		<select name="city" class="form-control" id="select-city">
		    			<option>--Tỉnh thành--</option>
					    <option>1</option>
					    <option>2</option>
					    <option>3</option>
					    <option>4</option>
				    </select>
				    <select name="district" class="form-control" id="select-district">
		    			<option>--Quận huyện--</option>
					    <option>1</option>
					    <option>2</option>
					    <option>3</option>
					    <option>4</option>
				    </select>
		    		
            </div>
            <textarea class="form-control" name="" placeholder="Ghi chú"></textarea>


    	</div>
    	<div id="method-shipping" class="col-md-4" style="min-height: 500px;">    
            <h3 class="panel-title">Vận chuyển</h3>
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="radio-input">
                        <input  type="radio" class="shipping-home" name="shipping-method">
                        
                    </div>  
                    <label class="title">Giao hàng tận nơi</label><label class="cost">40.000₫</label>
                </div>
            </div>
            <h3 class="panel-title">Thanh toán</h3>
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="radio-input">
                        <input type="radio" class="shipping-home" name="shipping-method">

                    </div>
                    <label class="title">Thanh toán khi giao hàng (COD)</label><label class="COD">cod</label>
                </div>
            </div>


    	</div>
    	<div class="col-md-4" id="sidebar">
    		<div class="sidebar">
    			<div class="sidebar_header">
	    			<label class="control-label" style="margin-left: 15px;font-size: 18px;">Đơn hàng </label><label style="margin-left: 15px;font-size: 18px;" class="control-label"> (2 sản phẩm)</label>
	    			<hr class="full_width" style="color: gray;background-color: gray;" />
	    		
    			</div>
                <div class="table-responsive">    
                        <table class="table " id="table-list-products">
                            <tbody id="kingx01">
                                <tr class="active">
                                    <td class="col-md-3"><a href=""><img src="sources/images/smallCar.png" style="" /></a><label class="label label-primary">70</label></td>
                                    <td class="col-md-6"><span class="name-bike"><a href="">Xe điện BRIDGESTONE PKD200</a></span><p  class="color-bike">Đỏ</p></td>
                                    <td class="col-md-3"><span class="price-bike">11.000.000₫</span></td>
                                </tr>
                                <tr class="active">
                                    <td class="col-md-3"><a href=""><img src="sources/images/smallCar.png" style="" /></a><label class="label label-primary">70</label></td>
                                    <td class="col-md-6"><span class="name-bike"><a href="">Xe điện BRIDGESTONE PKD200</a></span><p  class="color-bike">Đỏ</p></td>
                                    <td class="col-md-3"><span class="price-bike">11.000.000₫</span></td>
                                </tr>
                                <tr class="active">
                                    <td class="col-md-3"><a href=""><img src="sources/images/smallCar.png" style="" /></a><label class="label label-primary">70</label></td>
                                    <td class="col-md-6"><span class="name-bike"><a href="">Xe điện BRIDGESTONE PKD200</a></span><p  class="color-bike">Đỏ</p></td>
                                    <td class="col-md-3"><span class="price-bike">11.000.000₫</span></td>
                                </tr>
                                <tr class="active">
                                    <td class="col-md-3"><a href=""><img src="sources/images/smallCar.png" style="" /></a><label class="label label-primary">70</label></td>
                                    <td class="col-md-6"><span class="name-bike"><a href="">Xe điện BRIDGESTONE PKD200</a></span><p  class="color-bike">Đỏ</p></td>
                                    <td class="col-md-3"><span class="price-bike">11.000.000₫</span></td>
                                </tr>
                                <tr class="active">
                                    <td class="col-md-3"><a href=""><img src="sources/images/smallCar.png" style="" /></a><label class="label label-primary">70</label></td>
                                    <td class="col-md-6"><span class="name-bike"><a href="">Xe điện BRIDGESTONE PKD200</a></span><p  class="color-bike">Đỏ</p></td>
                                    <td class="col-md-3"><span class="price-bike">11.000.000₫</span></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <!--  <hr class="full_width" style="color: gray;background-color: gray;" /> -->
                <div class="form-inline">   
                        <div class="form-group col-md-9" >
                            <input type="text" id="code-promotion" class="form-control col-md-9" name="" placeholder="Nhập mã giảm giá">
                        </div>
                        <div class="form-group">
                            <input type="button" class="form-control col-md-3 btn btn-primary" name="" value="Áp dụng"  id="accept-code-promotion">
                        </div>
                </div>
                <div class="price-temp">
                    <div class="price-temp-title">Tạm tính</div>
                    <div class="price-temp-info">1.111.000.000₫</div>
                </div>
                <div class="price-ship">
                    <div class="price-ship-title">Phí vận chuyển</div>
                    <div class="price-ship-info">70.000₫</div>
                </div>
                <div class="accept-order">
                    <div class="link-back-cart col-md-6" id="link-back-cart">
                        <a class="previous-link" href="{{route('cart')}}">
                                <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                <span>Quay về giỏ hàng</span>
                        </a>
                    </div>
                    <div class="accept-order-submit"><input class="btn btn-primary" type="button" name="" value="ĐẶT HÀNG"></div>
                </div>
    		</div>
    	</div>
    </form>


<script type="text/javascript">
    
    $(document).ready(function(){
    	$('#check-other-address').change(function(){
    		$('.other-address').toggle();
    	});
          $('.panel-primary').click(function(){
              $('#kingx').prop('checked', true);
              $(this).children('.panel-body').children('.radio-input').children('input').prop('checked', true);
     
        });
    });
</script>
</body>
</html>