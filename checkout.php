<?php
	require 'config1.php';

	$grand_total = 0;
	$allItems = '';
	$items = array();

	$sql = "SELECT CONCAT(product_name,'(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while($row = $result->fetch_assoc()){
		$grand_total += $row['total_price'];
		$items[] = $row['ItemQty'];
	}
	$allItems = implode(",", $items);
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Checkout</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
       
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
       
      
   </head>
   <body>
      <div class="header-outs" id="home">
         <div class="header-bar">
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="index.html">Fashion Factory</a></h1>
                  </div>
                  <div class="col-lg-5 col-md-6 search-right">
                     <form class="form-inline my-lg-0">
                        
                        
                     </form>
                  </div>
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                           </li>
                           <li class="toyscart toyscart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down" id="cart-item"></span>
                                 </button>
                              </form>
                           </li>
                           <li class="toyscart toyscart2 cart cart box_1">
                              <form action="login.php" method="post" class="last">
                                 
                                 <button class="top_toys_cart" type="submit" name="submit" value="" >
                                 <span class="far fa-registered" ></span>
                                 </button>
                              </form>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Slideshow 4 -->
       <div class="clearfix"></div>
      <!-- //about -->
      <!--new Arrivals -->
      <!--//about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3"></h3>
            <div class="about-products-w3layouts">
               <p>
               </p>
               <p class="my-lg-4 my-md-3 my-3">
               </p>
               <p>
               </p>
            </div>
         </div>
      </section>
      <!--//Product-about-->
      <!--subscribe-address-->
      <!--//subscribe-address-->
    
       
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" id="em" required>
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" id="pd" required>
                           </div>
                            
                            <button type="submit" class="btn subscrib-btnn" id="login" href="index.html">Login</button>
                            
                          </div>
                         
                     </form>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
       <div class="container">
       	<div class="row justify-content-center">
       		<div class="col-lg-6 px-4 pb-4" id="order">
       			<h4 class="text-center text-info p-2">Complete your order!</h4>
       			<div class="jumbotron p-3 mb-2 text-center">
       				<h6 class="lead"><b>Product(s) :</b><?=$allItems;?></h6>
       				<h6 class="lead"><b>Delivery Charge:</b>Free</h6>
       				<h5><b>Total Amount Payable:</b><?= number_format($grand_total,2)?>/-</h5>
       			</div>
       			<form action="" method="post" id="placeOrder">
       				<input type="hidden" name="products" value="<?= $allItems;?>">
       				<input type="hidden" name="grand_total" value="<?= $grand_total;?>">
       				<div class="form-group">
       					<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
       				</div>
       				<div class="form-group">
       					<input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
       				</div>
       				<div class="form-group">
       					<input type="tel" name="phone" class="form-control" placeholder="Enter Phone-Number" required>
       				</div>
       				<div class="form-group">
       					<textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
       				</div>
       				<h6 class="text-center lead">Select Payment Mode</h6>
       				<div class="form-group">
       					<Select name="pmode" class="form-control">
       						<option value="" selected disabled>-Select Payment Mode-</option>
       						<option value="cod">Cash On Delivery</option>
       					</Select>
       				</div>
       				<div class="form-group">
       					<input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
       				</div>
       			</form>
       		</div>
       	</div>
       </div>
      <!-- //Modal 1-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	 
      <!--slider flexisel -->
      <script src="js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 3,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 2
         			}
         		}
         	});
         	
         });
      </script>
      <!-- //slider flexisel -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
       <script src="js/global.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
       <script type="text/javascript">
        $(function(){
            $('#subscribe').click(function(e){
                var valid=this.form.checkValidity();
                               
                if(valid)
                {
                     var email       =$('#email').val();
                     e.preventDefault();
                     Swal.fire({
                                 'title':'SUBSCRIPTION',
                                 'text':'Sucessful',
                                 'type': 'success'
                               })
                                
                      
                      
                }
                else
                {
                    
                    Swal.fire({
                                 'title':'Fill In The Details First',
                                 'type': 'error'
                               })
                }
                        
            });
                       
        });
    
    </script>
       
       <script type="text/javascript">
        $(function(){
            $('#login').click(function(e){
                var valid=this.form.checkValidity();
                               
                if(valid)
                {
                     var em       =$('#em').val();
                    var pd       =$('#pd').val();
                     e.preventDefault();
                        Swal.fire({
                                 'title':'Log In',
                                 'text':'Sucessful',
                                 'type': 'success'
                               })
                                
                      
                      
                }
                     
            });
                       
        });
    
    </script>
          <script type="text/javascript">
              $(document).ready(function(){
                  $("#placeOrder").submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        url: 'action.php',
                        method: 'post',
                        data: $('form').serialize()+"&action=order",
                        success:function(response){
                          $("#order").html(response);
                        }
                    });
                  });
                  load_cart_item_number();
                 
                  function load_cart_item_number(){
                      $.ajax({
                          url:'action.php',
                          method: 'get',
                          data:{cartItem:"cart_item"},
                          success:function(response){
                              $("#cart-item").html(response);
                          }
                      });
                  }
              });
          </script>
       </body>
</html>