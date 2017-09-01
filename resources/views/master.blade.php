<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="{{asset('')}}">
    <title>
      NguyenXuanTruong
    </title>
    <link rel="stylesheet" href="sources/js/Flux-Slider-master/css/demo.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="sources/js/Flux-Slider-master/js/flux.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="sources/css/style2.css" />
    <link rel="stylesheet" type="text/css" href="sources/css/product.css" />
    <link rel="stylesheet" type="text/css" href="sources/css/detail.css" />
    <link rel="stylesheet" type="text/css" href="sources/css/cart.css" />
    <link rel="stylesheet" type="text/css" href="sources/css/lightslider.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="sources/js/style.js"></script>
    <script src="sources/js/lightslider.js"></script> 
    <script type="text/javascript" src='sources/js/jquery.elevatezoom.js'></script>


</head>
<body>
  <div id="container">
   @include('header')
   @yield('content')
   <section class="send-email">
        <div class="send-email-wrapper">
          <h2>Gửi email để nhận tin khuyến mãi</h2><br>
        <span>Cùng sao 5S Online bắt nhịp với trào lưu chọn xe điện Ngả mũ thán phục với “siêu phẩm SH<br> trong giới xe PEGA (HKbike) – Xe điện được giới trẻ yêu thích sắp đổi tên thương hiệu.</span><br>
        <form class="email-form" method="" action="" target="_blank">
            <input type="text" name="txtEmail" placeholder="nhập email ..." size= 30px; />
            <button type="submit" name="btnSubmit">GỬI EMAIL</button>
        </form>
        </div>
      </section> 
     <footer>
        <div class="footer-wrapper">
            <div class="footer-wrapper-logo">
              <a href=""><img src="sources/images/logo.png" /></a>
            </div>
            <div class="footer-wrapper-list-menu">
               <!--  <span>Về chúng tôi       </span> -->
                <ul>
                    <li class="li-header">Về chúng tôi  </li>
                     <li><a href="">Trang  </a></li>
                    <li><a href="">Sản phẩm</a></li>
                    <li><a href="">Blog </a></li>
                    <li><a href="">Liên hệ </a></li>
                    <li><a href="">Giới thiệu</a></li>
                </ul>
            </div>
            
            <div class="footer-wrapper-list-menu">
                <!-- <span>Về chúng tôi</span> -->
                <ul>
                    <li class="li-header">Về chúng tôi </li>
                     <li><a href="">Trang chủ</a></li>
                    <li><a href="">Sản phẩm</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Liên hệ</a></li>
                    <li><a href="">Giới thiệu</a></li>
                </ul>
            </div>
            <div class="footer-wrapper-list-menu">
               <!--  <span>Thời gian làm việc</span> -->
                <ul>
                    <li class="li-header">Thời gian làm việc </li>
                     <li><a href="">8H30 - 19H30 Hàng </a></li>
                    <li><a href="">ngày</a></li>
                    <li><a href="">Email phản hồi, góp ý </a></li>
                    <li><a href="">về dịch vụ, sản phẩm: </a></li>
                    <li><a href="">hellocafein@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copy-right">
      <div class="copy-right-wrapper">
      <span>© Bản quyền thuộc về </span><h3 style="display: inline-block;font-size: 17px;font-weight: bold">LA_Galaxy</h3><span> Team | Cung cấp bởi</span><a href="" style="font-size: 17px;font-weight: bold;color:orange"> KT-07</a><pre style="display: inline-block;">                                                                                             </pre>
      <span style="margin-right: 0px;">Theo dõi chúng tôi / </span><a href="" style="font-size: 15px;
      color: #5418ec;font-weight: bold">kinglagaxy.com</a>
      </div>
  </div>


</body>
</html>
