
    
 
      
    
	 $(document).ready(function(){
        $("#formSearch").hover(function(){

            $("#txtSearch").fadeIn(1000);
            //$("#txtSearch").toggle();
                 
                }
         );

        $("#txtSearch").keypress(function(){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13')
             {
                $('#btnSearch').submit();
             }

            });
     
          $('document').keypress(function(event){
          var keycode = (event.keyCode ? event.keyCode : event.which);
          if(keycode == '13'){
              $("#formSearch").submit();
          }

        });
       
    

      $(".nav_cart").hover(function(){
              $("#dropDownCart").toggle(0);
              // alert("nav_cart");
            });
     
      $("#dropDownCart  .payment a").hover(function(){

          $("#dropDownCart  .payment").css({'background-color':'#16bd1e'});
        },
        function(){
          $("#dropDownCart  .payment").css({'background-color':'#f19028'});
        }
      );

      $('header nav .nav_menu > ul > li > .dropDownProducts .type_products > ul > li.sub').hover(
        function(){
            $(this).children('ul').show();

        },
        function(){
          $(this).children('ul').hide();
        }
      );

      $('nav .nav_menu > ul > li.nav_menu_product').hover(function(){
        $('header nav .nav_menu ul > li > .dropDownProducts').toggle();
      });


      //show div-parent of 3 button event blow
      $(".productsHightlight_show_1").hover(function(){
        $(this).css('border','1px solid green');
        $(this).children('.productsHightlight_show_1-hidden').show(0);
      },function(){
        $(this).css('border','none');
          $(this).children('.productsHightlight_show_1-hidden').hide(0);
      }
    );

    $(".productsHightlight_show_3").hover(function(){
      $(this).css('border','1px solid green');
      $(this).children('.productsHightlight_show_3-hidden').show(0);
    },function(){
      $(this).css('border','none');
        $(this).children('.productsHightlight_show_3-hidden').hide(0);
    }

  );
  $("#main .productsHightlight .productsHightlight_show .productsHightlight_show_2 .productsHightlight_show_2_small_car .small-car-item").hover(function(){
    $(this).css('border','1px solid green');
    $(this).children('.small-car-item-hidden').show(0);
  },function(){
    $(this).css('border','none');
      $(this).children('.small-car-item-hidden').hide(0);
  }
);

$(".small-car-item").hover(function(){
  $(this).css('border','1px solid green');
  $(this).children('.small-car-item-hidden').show();
},function(){
  $(this).css('border','none');
    $(this).children('.small-car-item-hidden').hide();
}
);
      //change attribute src for 3 button event
      $(".productsHightlight_show_1-hidden > a > img").hover(function(){
        $(this).attr('src',$(this).attr('effectImage'))},function(){
        $(this).attr('src',$(this).attr('normalImage'));
      });
      $(".productsHightlight_show_3-hidden > a > img").hover(function(){
        $(this).attr('src',$(this).attr('effectImage'))},function(){
        $(this).attr('src',$(this).attr('normalImage'));
      });
      $("#main .productsHightlight .productsHightlight_show .productsHightlight_show_2 .productsHightlight_show_2_small_car .small-car-item .small-car-item-hidden > a > img").hover(function(){
        $(this).attr('src',$(this).attr('effectImage'))},function(){
        $(this).attr('src',$(this).attr('normalImage'));
      });
      $(".small-car-item .small-car-item-hidden > a > img").hover(function(){
        $(this).attr('src',$(this).attr('effectImage'))},function(){
        $(this).attr('src',$(this).attr('normalImage'));
      });

    });


     $(document).ready(function(){
        $(".list-color-car > li").hover(function(){
            $(this).css('border','2px solid #1af60a');
          //  $(this).parent('ul').next("a").children('img.small-car').attr('src',"images/"+$(this).attr('car-name')+$(this).attr('value')+".png");
            $(this).parent('ul').next("a").children('img.small-car').attr('src',"sources/images/products/"+$(this).attr('car-name'));
            $(this).parent('ul').next("a").children('img.big-car').attr('src',"sources/images/products/"+$(this).attr('car-name'));
        },
        function(){
          $(this).css('border','');
        }

      );

      })

     // jquery for page products.blade.php
  