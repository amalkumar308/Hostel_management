<?php
require('function.php');
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
                background-color: #EAECEE;
                padding: 10px 0 20px 10px;
                margin-bottom: 50px;
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
        <!-- Title is Given here-->
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
	<script src="./assets/js/jquery.min1.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(background/15.jpg) ;background-repeat:no-repeat;background-attachment: fixed;">

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
				<li></li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right " style="background-color: #e3f2fd;">
     		 <li class="active" style="background-color:inverse"><a href="#"><font size="2" color="red"><span class="glyphicon glyphicon-user" style="font-size:15px;"></span></font>Sign Up</a></li>
     		 <li class="active" style="background-color:inverse"><a href="login.php"><font size="2" color="red"><span class="glyphicon glyphicon-log-in" style="font-size:15px;"></span></font> Login</a></li>
   			 </ul>
		    </div>
			</div>
	</nav>
  

	<br><br>

	<h2 style="opacity:0.9;"><marquee><label align="center" style="color:#FFFFFF;">WELCOME TO MNNIT HOSTEL LIFE</label></marquee></h2>
				<hr>
	<div class="col-sm-12" >
               <div style="color:#FFFFFF ;border-radius: 20px;background-color:#071d36; ">
               	<br>
               		<table>
               			<tr>
               				<th><div align="center"> Photo Gallery</div><div class="container-fluid" style="margin-top: 0px">
		
		
                <div id="sliderFrame"> 
                   <div id="slider" style="opacity: 1; border-radius: 10px;width:500px;">
		
					  <img src="background/10.jpg" alt="" />
					  <img src="background/09.jpg" alt="" />
                      <img src="background/08.jpg" alt="" />
                      <img src="background/07.jpg" alt="" />
                      <img src="background/06.jpg" alt="" />
                    </div>
                    <div id="htmlcaption" style="display: none;">
                                
    </div>
</div>
</div>
</th>

               			<th>
               				<div align="center" width="600px"class="col-sm-12">
               				 <br><br>Notice
               				
               				
               					<marquee direction="up" scrollamount="3">
               						<?php 
               					 $con = con();
               					$sql="SELECT notice FROM `notice` WHERE for_who='Students'" ; 

               					$result = mysqli_query($con,$sql);
               						echo "<br><br><br><br><br><br><br><br><br>";
               					 while($row3=$result->fetch_array())
                             		echo "$row3[0] <br><br>";
                          
               					?>
								<marquee>
               				</div>
               		
               		    </th>
    </table><br><br>

   </div>

<hr>
                <div class="div2">
                <div class="container"  >
		     	<div class="col-sm-12" >
				<h4 style="opacity: 0.8;" align="center"><label align="center" style="color:#D7DA0F">ABOUT</label></h4>				
				<div style="color:#FFFFFF ;border-radius: 20px;background-color:#071d36;;opacity: 0.7; "><br>
				
					<br>
					<p > There are seven Boys and two Girls hostels at present in the Institute. The capacity 
					of boys hostel is 1800 (1044 single seated rooms and 252 triple seated rooms ) and that of 
					girls hostel is 145. Room allotment is done in such a way that students from different parts 
					of country freely intermingle with each other depicting national integration.</p> 

					<p > Hostel messes are run no profit no loss basis. The messes are managed by nominated representatives
					 of students under the overall supervisions of wardens. The foreign students run their separate mess
					  named as international mess. In this mess non vegetarian food is also served.</p> 

					<p > The newly admitted boys students are kept in separate hostels away from senior students to avoid
					 ragging. The hostel administration grants financial assistance to meet the mess bills to many needy
					  students. One new hostel has also been constructed to accommodate additional number of students.</p>  

					<p > Several new facilities are being provided in girls hostel viz. washing machines, refrigerators,
					 computers, internet connectivity. One PCO booth is also working in the girls hostel campus.</p> 

					<p > There is a team of a warden in charge and warden for each of the hostel. They look after the affairs of 
					 the room allocation to the individual students and issuing the 'Concession Forms' for the students going 
					 home during the Institute vacations. All the student complaints regarding the room maintainence are routed 
					 through the warden of the hostel to the concerned authorities.</p> 
<br><br>				
</div>
			
<h4 style="opacity: 0.8;" align="center"><label align="center" style="color:#D7DA0F">FACILITIES</label></h4>
<h4 style="opacity: 1; border-radius: 10px;width:200px;" align="center"><label align="center" style="color:#D7DA0F"> BOYS HOSTEL    :&nbsp;</label></h4> 
<div style="color:#FFFFFF ;border-radius: 20px;background-color:#071d36;;opacity: 0.7; "><br>
				
					<br>
					<ul type="none">
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Geysers and Water coolers with aquaguard on every floor.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;PCO for STD/Local calls.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Books and Stationary shop.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;24 hours internet connectivity with 100 Mbps LAN.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Guest room.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Generator, which in case of power failure provides electricity to the hostels.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;All night canteen.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Magazine and Newspapers are provided.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Students club.</p></li>
					</ul>
<br><br>
</div>
<h4 style="opacity: 1; border-radius: 10px;width:200px;" align="center"><label align="center" style="color:#D7DA0F"> GIRLS HOSTEL    :&nbsp;</label></h4>
 <div style="color:#FFFFFF ;border-radius: 20px;background-color:#071d36;;opacity: 0.7; "><br>
				
					<br>					
					<ul type="none">
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Washing machine.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;PCO inside the hostel.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Generator, which in case of power failures provides electricity to the mess and the common room.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Provisional goods store in the hostel premises.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Four Computers.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Intercom line.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;24 hours internet connectivity with 100 Mbps LAN.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Water cooler and Geysers.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Magazine and Newspapers are provided.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Two motor pumps installed.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Air cooler and Refrigerator.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Stereo system.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Games facilities including Table Tennis boards etc.</p></li>
					</ul>
<br><br>
</div>
<h4 style="opacity: 1; border-radius: 10px;width:150px;" align="center"><label align="center" style="color:#D7DA0F"> MESS   :&nbsp;</label></h4>
<div style="color:#FFFFFF ;border-radius: 20px;background-color:#071d36;;opacity: 0.7; "><br>
	<ul type="none">
	<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;This is run by students in both boys and girls hostel. Mess workers are under their control.</p></li>
	</ul>
<br>
</div>
<h4 style="opacity: 1; border-radius: 10px;width:300px;" align="center"><label align="center" style="color:#D7DA0F"> MAINTENANCE &nbsp;AND &nbsp;REPAIR    :&nbsp;</label></h4>
 <div style="color:#FFFFFF ;border-radius: 20px;background-color:#071d36;;opacity: 0.7; "><br>
				
  <p>Sweeper cleans the hostels everyday. White washing is done annually.Electrician and Carpenters are available from 10am to 6pm.The peon and hostel attendants look after any problem which may arise due to nonfunctioning of any item. </p>
  <br>
 </div>

<h4 style="opacity: 1; border-radius: 10px;width:200px;" align="center"><label align="center" style="color:#D7DA0F"> STUDENTS CLUB    :&nbsp;</label></h4>
 <div style="color:#FFFFFF ;border-radius: 20px;background-color:#071d36;;opacity: 0.7; "><br>
 <br>
					
					<ul type="none">
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Canteen.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Stationary shop.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Three television sets.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Carrom room.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Table Tennis room.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Reading room.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Photography club.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Intercom connection.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Chess Boards.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Enough space for discussions and relaxing.</p></li>
					<li class="active"><p><font  color="#D7DA0F">* </font>&nbsp;&nbsp;&nbsp;Air cooler and Refrigerator.</p></li>
					</ul>
<br><br>				
</div>
<h4 style="opacity: 1; border-radius: 10px;width:200px;" align="center"><label align="center" style="color:#D7DA0F"> FURNISHING    :&nbsp;</label></h4> 
<div style="color:#FFFFFF ;border-radius: 20px;background-color:#071d36;;opacity: 0.7; "><br>	
	<p>Each room in every hostel has a chair, a study table, a tea table, a cot, a fan, a bulb connection, two plug points and two shelves.</p>
<br>
						</div>
						<hr>
				   	   </div>
					   <hr>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>
 <!-- Footer-->
<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold;color:#D7DA0F">
		devloped By Choubeyji &copy; 2018
	</div>
</footer>
</body>
</html>