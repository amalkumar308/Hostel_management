<?php
require('function.php');
//$notice="."


       
//

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico">
	<!--style for document-->
<style type="text/css">
            
            * {
                margin: 0;
                padding: 0;
            }
            body {
                font-family: Calibri;
            }
            h3
            { font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 0px 10px;
                margin-bottom: 1px;
                border: 1px solid goldenrod;
                 border-radius: 15px;
            }
            h2 {

                font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 0px 10px;
                margin-bottom: 1px;
                border: 6px solid red;
                 border-radius: 30px;
            }

            h4 {

                font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 0px 10px;
                margin-bottom: 1px;
                border: 1px solid goldenrod;
                 border-radius: 20px;
            }
            p {

                
               
                color: #fff;
               
                padding: 10px 30px 0px 30px;
                margin-bottom: 1px;
                
                
            }
             
             .mySlides {display:none;}        
            
        </style>
	<title>Mnnit Hostel</title>
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
				<li class="active"><a href="see_complain_student.php">See your complain status</a></li>
							<li></li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right " style="background-color: #e3f2fd;">
     		
     		 <li class="active" style="background-color:inverse"><a href="login.php"><font size="1" color="red"><span class="glyphicon glyphicon-log-in" style="font-size:15px;"></span></font> Login</a></li>
   			 </ul>
		</div>
			</div>
	</nav>
  

	<br><br>

	<!-- End-->
	
	
               

                <div class="div2">
   
		<div class="container"  >
			<div class="col-sm-12" >
				<h2 style="opacity:0.9;"><marquee><label align="center" style="color:#FFFFFF;">HOSTEL LIFE IS A MOST REMEMBERALE EVEVENT OF YOUR LIFE</label></marquee></h2>
				<hr>
				

			<!--hostel details one by one-->

<h4 style="opacity: 1; border-radius: 10px;width:200px;" align="center"><label align="center" style="color:#D7DA0F"> List Of Hostels   :&nbsp;</label></h4>
 				<div style="color:#FFFFFF ;border-radius: 20px; padding: 20px 30px 0px 30px;background-color:#071d36;opacity: 0.8; ">
				
					<ul type="none">
					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>Swami Vivekanand Boys Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
									<input type="text" style="display:none" value="1" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>
					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>B.G.Tilak Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
									<input type="text" style="display:none" value="2" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>

					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>S.V.Patel Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;
									<input type="text" style="display:none" value="3" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>
					
					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>M.M.Malviya Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
									<input type="text" style="display:none" value="4" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>

					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>P.G. Boys Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&nbsp;
									<input type="text" style="display:none" value="5" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>
					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>P.D.Tandan Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&nbsp;
									<input type="text" style="display:none" value="6" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>
					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>C.V.Raman Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;
									<input type="text" style="display:none" value="7" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>
					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>KNGH Girls Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;
									<input type="text" style="display:none" value="8" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>
					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>Sarojni Naidu Girls Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" style="display:none" value="9" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>
					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>R.N.Tagore Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
									<input type="text" style="display:none" value="10" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>
					<li class="active">
						<form id="loginform" class="form-horizontal" role="form" action="hostel_info.php" method="post">
						<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;" align="">&emsp;&emsp;
							<label align="center" style="color:#000080"> 
								<b>P.G. Girls Hostel  </b>					
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="text" style="display:none" value="11" name="hos">
									<input type="submit" id="btn-login" action="hostel_info.php" class="btn btn-success" style="border-radius: 8px;background-color:#000080;border: 0px  #006400;" value="Click Hear">
						
					
							</label>
					
					</h4>
					</form>
					</li>
					
<br><br>
				</div>




					<br><br>
					<hr>


		

                </div>
               


					<hr>

				</div>
			</div>
		</div>
	</div>
</div>




<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold;color:#D7DA0F">
		devloped By Choubeyji &copy; 2018
	</div>
</footer>


</body>
</html>