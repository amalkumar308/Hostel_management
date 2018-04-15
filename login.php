<?php
require('function.php');
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      // username and password sent from form 
      $con = con();
      $val = mysqli_real_escape_string($con,$_POST['hos']);
        
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico">
   <!-- provide internal style to whole document -->
<style type="text/css">
            
            * {
                margin: 0;
                padding: 0;
            }
            body
            {
                font-family: Calibri;
            }
            h3
            { 
                font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 0px 10px;
                margin-bottom: 1px;
                border: 1px solid goldenrod;
                border-radius: 15px;
            }
            h2 
            {

                font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 0px 10px;
                margin-bottom: 1px;
                border: 6px solid red;
               border-radius: 30px;
            }

            h4 
            {

                font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 0px 10px;
                margin-bottom: 1px;
                border: 1px solid goldenrod;
                border-radius: 20px;
            }
            p 
            {
                color: #fff;
                padding: 10px 30px 0px 30px;
                margin-bottom: 1px;
            }
             
             .mySlides {display:none;}        
            
        </style>
	<title>Mnnit Hostel</title>
  <!-- Title is Given here-->
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	
	<link href="./assets/css/font-awesome.css" rel="stylesheet">
	<link href="./assets/css/blog_page.css" rel="stylesheet">
	<link href="./assets/fonts/font.css" rel="stylesheet">
	<link href="./assets/css/index.css" rel="stylesheet">
	<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script src="themes/1/js-image-slider.js" type="text/javascript"></script>

    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/jquery.min1.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(background/20.jpg) ;background-repeat:no-repeat;background-attachment: fixed;">

	<div style="background-color:none;">
	<!-- Static navbar -->
	<br>
<nav class="navbar navbar-light navbar-fixed-top" style="background-color: #e3f2fd;">
		 <div class="container" hight="100">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: grey;">
        <span class="icon-bar" style="background-color: red;"></span>
        <span class="icon-bar" style="background-color: red;"></span>
        <span class="icon-bar" style="background-color: red;"></span> 
      </button>
      <a class="navbar-brand" href="#"><?php echo "<img src='background/12.webp' alt='Smiley face' height='30' width='30'>";?></a>
			</div>
      	<div class="collapse navbar-collapse active" id="myNavbar">
		    <ul class="nav navbar-nav" style="background-color: #e3f2fd;">
				<li class="active"><a href="index.php" >Home</a></li>
        <li class="active" data-toggle="modal" style="color:red" data-target="#add_blog_modal"><a href="hostels.php">Hostels</a></li>
        <li class="active"><a href="complain.php">Complain</a></li>
        <li class="active"><a href="see_complain_student.php">See your complain stetus</a></li>
        <li class="active"><a href="login.php">Contact us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right " style="background-color: #e3f2fd;">
     		 <li class="active" style="background-color:inverse"><a href="signup.php"><font size="1" color="red"><span class="glyphicon glyphicon-user" style="font-size:15px;"></span></font>Sign Up</a></li>
     		 <li class="active" style="background-color:inverse"><a href="login.php"><font size="1" color="red"><span class="glyphicon glyphicon-log-in" style="font-size:15px;"></span></font> Login</a></li>
   			 </ul>
		</div>
			</div>
	</nav>
	<br><br>
<div class="div2">
		<div class="container"  >
			<div class="col-sm-12" >
<h4 style="opacity: 1; border-radius: 10px;width:400px;" align="center"><label align="center" style="color:#D7DA0F">Official Login</label></h4>
 				<div style="color:#FFFFFF ;border-radius: 20px; padding: 20px 30px 0px 30px;background-color:#071d36;opacity: 0.8; ">
        <div class="container">    
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-3">
                <div class="panel panel-info">
                 <div class="panel-heading">
                  <div class="panel-title">Fill Appropriate Details</div>
                     <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="appoint.php"></a></div>
                     </div>  
        <div style="padding-top:30px" class="panel-body" >

          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

          <form id="loginform" class="form-horizontal" role="form" action="login_backend.php" method="post">

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="user_id" type="text" class="form-control" name="user_id" value="" placeholder="User Id">                                        
            </div>

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="login-password" type="password" class="form-control" name="pass" placeholder="Password">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
               <select  class="form-control" name="dis">
                    <option>Select Your designation</option>
                    <option>Warden</option>
                    <option>Caretaker</option>
                    
                    </select>
             </div>

             
             <div style="margin-top:10px" class="form-group">
              <!-- Submit Button -->

              <div class="col-sm-12 controls">
                <input type="submit" id="btn-login" action="login_backend.php" class="btn btn-success"></a>
              </div>
            </div>
          <!--Candidate SignUp Page Link -->
            <div class="form-group">
              <div class="col-md-12 control">
                <div style="border-top: 1px solid#888; padding-top:15px; color:blue;font-size:85%" >
                  Don't have an account! 
                  <a href="signup.php">
                    Sign Up Here
                  </a>
                </div>
              </div>
            </div>    
          </form>     
         </div>                     
      </div>
                     <br>
                    </form>
                  </div>
                </div>
                <br><br><br>
               </div> 
            </div>
         </div>
        <br><br>
</div>
<br>
<hr>
 <!-- Footer-->
<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold;color:#D7DA0F">
		devloped By Choubeyji &copy; 2018
	</div>
</footer>
</body>
</html>