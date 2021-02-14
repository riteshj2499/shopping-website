<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Cart</title>
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
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
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
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="shop.html" class="nav-link">Shop Now</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="product.html">Children</a>
                           <a class="nav-link " href="product1.html">Women</a>
                           <a class="nav-link " href="product2.html">Men</a>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
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
            <div class="col-lg-10">
              <div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];} else {echo 'none'; } unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];} unset($_SESSION['showAlert']);?></strong>
              </div>
              <div class="table-responsive mt-2">
                <table class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                    <td colspan="7">
                      <h4 class="text-center text-info m-0">Products in your cart!</h4>
                    </td>
                  </tr>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>
                      <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure you want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        require 'config1.php';
                        $stmt = $conn->prepare("SELECT * FROM cart");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $grand_total = 0;
                        while($row = $result->fetch_assoc()):
                    ?>
                    <tr>
                      <td><?= $row['id'] ?></td>
                      <input type="hidden" class="pid" value="<?= $row['id']?>">
                      <td><img src="<?= $row['product_image']?>" width="50"></td>
                      <td> <?= $row['product_name']?> </td>
                      <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?></td>
                      <input type="hidden" class="pprice" value="echo $row['product_price'] ?>">
                      <td><input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;"> </td>
                      <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                      <td>
                        <a href="action.php?remove=<?= $row['id']?>" class="text-danger lead" onclick="return confirm('Are you sure you want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <?php $grand_total += $row['total_price']; ?>
                    <?php endwhile; ?>
                    <tr>
                      <td colspan="3">
                        <a href="index1.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue Shopping</a>
                      </td>
                      <td colspan="2"><b>Grand Total</b></td>
                      <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2);?></b></td>
                      <td>
                        <a href="checkout.php" class="btn btn-info <?= ($grand_total>1)?"":"disabled";?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
              </div>
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

                $(".itemQty").on('change',function(){
                  var $el = $(this).closest('tr');
                    
                  var pid = $el.find(".pid").val();
                  var pprice = $el.find(".pprice").val();
                  var qty = $el.find(".itemQty").val();
                  location.reload(true);
                  $.ajax({
                        url: 'action.php',
                        method: 'post',
                        cache: false,
                        data: {qty:qty,pid:pid,pprice:pprice},
                        success: function(response) {

                          console.log(response);
                        }
                  });

                });
                load_cart_item_number();
                 
                  function load_cart_item_number(){
                      $.ajax({
                          url:'action.php',
                          method: 'get' ,
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