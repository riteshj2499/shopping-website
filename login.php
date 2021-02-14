<?php
require_once('config.php');
?>
<! DOCTYPE html
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    
    <title>Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    
    
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/global.js"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    
</head>

<body>
    <div>
        <?php
            
        ?>
    </div>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                
                <div class="card-body">
                    <h2 class="title"><center>Registration</center></h2>
                    <form action="index.html" method="POST" onsubmit="return checkForm(this);" >
                                                <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" id="name" name="name"  required>
                        </div>
                        

                       
                                <div class="input-group">
                                                                        
                                    <input class="input--style-1" id="email"  type="email" placeholder="EMAIL" name="email" required>
                                                                    </div>


                                <div class="input-group">

                                    
                                    <input class="input--style-1"  id="pwd" type="password" placeholder="PASSWORD" name="pwd" required>
                                                                    </div>

                                <div class="input-group">

                                   
                                    <input class="input--style-1"  id="pwd1" type="password" placeholder="CONFIRM PASSWORD" name="pwd1" required>
                                </div>
                            
                            
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" id="register" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
        $(function(){
            $('#register').click(function(e){
                var valid=this.form.checkValidity();
                               
                if(valid)
                {
                     var name           =$('#name').val();
                     
                     var email          =$('#email').val();
                     
                     var pwd            =$('#pwd').val();
                    
                     var pwd1            =$('#pwd1').val();
                     
                     e.preventDefault();
                    
					 if(pwd==pwd1 && pwd.length>=6)
                      {
                         
                        $.ajax({
                            type: 'POST',
                            url: 'process.php',
                            data: {name: name,email: email,pwd: pwd,pwd1: pwd1},
                            success: function(data){
                                Swal.fire({
                                         'title': 'REGISTRATION',
                                         'text': data,
                                         'type': 'success',
										 
                                     }).then(function() {
											window.location = "index.html";
										});
                            }
                            
                        });        
                      
					  }
                else if(pwd!=pwd1)
                {
                    Swal.fire({
                                         'title': 'Error',
                                         'text': "Passwords don't match",
                                         'type': 'error'
										
                                     })
                }
				else if(pwd.length<=6)
                {
                    Swal.fire({
                                         'title': 'Error',
                                         'text': "Password should be more than 6 characters",
                                         'type': 'error'
										
                                     })
                }
				}
				
            });
                       
        });
    
    </script>

</body>

</html>
<!-- end document-->
