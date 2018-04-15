<?php
session_start();
//include funtion.php file
require('function.php');
$con = con();
//here check, where "session with user_id" is set or not

if(isset($_SESSION['user_id'])){
$id=$_SESSION['user_id'];
}
else
{

//if session is not set then control goes to homepage

header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}

$userid = $_SESSION['user_id'];

    
      $sql = "SELECT * FROM `h_wardon` WHERE user_id = '$id'";
          $result = mysqli_query($con,$sql);
          $row5 = $result->fetch_array();
$b=0;
   
    if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      // username and password sent from form 
      $con = con();
      $val = validate($_POST["val"]);
      if($val == 1)
      {
$b=1;
      }
      else
      {
        $b=2;
      }
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
        <li class="active"><a href="wardon.php" >Home</a></li>
        <li class="active" data-toggle="modal" style="color:red" data-target="#add_blog_modal"><a href="see_complain_wardon.php">See Complain</a></li>
        <li class="active"><a href="notish_wardon.php">Publish Notice</a></li>
        <li></li>
        </ul>
         <ul class="nav navbar-nav navbar-right " style="background-color: #e3f2fd;">
         <li class="active" style="background-color:inverse"><a href="#"><font size="2" color="red"><span class="" style="font-size:15px;"></span></font>Welcome <?php echo "$row5[3] $row5[4] $row5[5]";?></a></li>
         <li class="active" style="background-color:inverse"><a href="logout.php"><font size="2" color="red"><span class="glyphicon glyphicon-off" style="font-size:15px;"></span></font>Log Out</a></li>
         
         </ul>
     </div>
    </div>
  </nav>
  <br><br>

 <div class="div2">
    <div class="container"  >
      <div class="col-sm-12" >
        <h2 style="opacity:0.9;"><marquee><label align="center" style="color:#FFFFFF;">HOSTEL LIFE IS A MOST REMEBREBEL EVEVENT OF YOUR LIFE</label></marquee></h2>
        <hr>
         <div style="color:#FFFFFF ;border-radius: 20px; padding: 20px 30px 0px 30px;background-color:#071d36;opacity: 0.8; ">
         <div class="container">    
         <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-3">
                <div class="panel panel-info">
                 <div class="panel-heading">
                  <div class="panel-title">Write notice</div>
                     <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="appoint.php"></a></div>
                   </div>  
                   <div class="panel-body" >
                     <form style="background-image:url(back/10.jpg);" id="book" class="form-horizontal" role="form" action="notice_backend.php" method="post">



                  <div class="form-group">
                  <label for="last_name" class="col-md-3 control-label" style="color:black">Notice for*</label>
                    <div class="col-md-9">
              
                  
                   <select  class="form-control" name="for1">
                    <option>Careteker</option>
                    <option>Students</option>
                    
                  
                    </select>
                   
                   </div>                
                  </div>
                  <div class="form-group">
                  <label for="user_id" class="col-md-3 control-label" style="color:black">Notice*</label>
                   <div class="col-md-9">
                   <textarea class="form-control" name="not" id="c" onblur="uscheck();" row="10" cols="50"></textarea><span id="spn" style="color:red"></span>
                   </div>
                  </div>
                  <br>

                  <!--Reset Button -->
                 <div class="form-group">
                                                            
                   <div class=" col-md-offset-4 col-md-2">
                     <input type="reset" id="btn-reset" class="btn btn-info"><i class="icon-hand-right" value="Reset" onclick="#"></i>
                   </div>

                    <!--Submit Button -->                                        
                   <div class="col-md-offset-2 col-md-2">
                     <input type="submit" id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i>
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