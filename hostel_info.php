<?php
require('function.php');
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      // username and password sent from form 
      $con = con();
      $val = mysqli_real_escape_string($con,$_POST['hos']);
       //query to check user_id is present or not
      //For particular status
      switch($val)
      {
      	case 1:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'svbh'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname="Swami Vivekanand Boys Hostel";
                  //fetch data from h_wardor table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'svbh'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'svbh'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'svbh'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();

      		break;

      	case 2:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'tilak'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname=" B.G.Tilak Hostel  ";
                  //fetch data from h_wardon table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'tilak'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name     		
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'tilak'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'tilak'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();

      		break;

      case 3:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'patel'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname="  S.V.Patel Hostel   ";
                  //fetch data from h_wardon table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'patel'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'patel'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'patel'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();
      		break;
      
       case 4:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'malviya'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname=" M.M.Malviya Hostel    ";
                  //fetch data from h_wardon table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'malviya'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name	
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'malviya'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'malviya'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();
      		break;
     

      case 5:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'pg'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname=" P.G. Boys Hostel     ";
                  //fetch data from h_wardon table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'pg'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name     		
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'pg'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'pg'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();
      		break;
      

      case 6:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'tandan'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname=" P.D.Tandan Hostel      ";
                  //fetch data from h_wardon table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'tandan'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name      		
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'tandan'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'tandan'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();
      		break;
      

      case 7:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'raman'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname=" C.V.Raman Hostel     ";
                  //fetch data from h_wardon table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'raman'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name     		
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'raman'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'raman'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();
      		break;
      
      case 8:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'kngh'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname="  KNGH Girls Hostel     ";
                  //fetch data from h_wardon table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'kngh'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name      		
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'kngh'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'kngh'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();
          break;

      case 9:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'sngh'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname="  Sarojni Naidu Girls Hostel     ";
                  //fetch data from h_wardon table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'sngh'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name	
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'sngh'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'sngh'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();
          break;

      		case 10:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'tagore'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname="     R.N.Tagore Hostel    ";
                  //fetch data from h_wardon table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'tagore'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name	
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'tagore'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'tagore'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();
          break;

          case 11:
                  //fetch data from h_caretaker table name
      		$sql = "SELECT * FROM h_caretaker WHERE hostel_name = 'pgg'";
      		$result = mysqli_query($con,$sql);
      		$row = $result->fetch_array();
      		$hname="      P.G. Girls Hostel       ";
                  //fetch data from h_wardon table name
      		$sql1 = "SELECT * FROM h_wardon WHERE hostel_name = 'pgg'";
      		$result1 = mysqli_query($con,$sql1);
      		$row1 = $result1->fetch_array();
                  //fetch data from h_team_mem table name	
      		$sql2 = "SELECT * FROM h_team_mem WHERE hostel_name = 'pgg'";
      		$result2 = mysqli_query($con,$sql2);
                  //fetch data from hostel_accom table name
      		$sql3 = "SELECT * FROM hostel_accom WHERE hostel_name = 'pgg'";
      		$result3 = mysqli_query($con,$sql3);
      		$row4 = $result3->fetch_array();
          break;

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
				<li class="active"><a href="login.php">Contact us</a></li>		
			</ul>
			<ul class="nav navbar-nav navbar-right " style="background-color: #e3f2fd;">
     		 <li class="active" style="background-color:inverse"><a href="#"><font size="1" color="red"><span class="glyphicon glyphicon-user" style="font-size:15px;"></span></font>Sign Up</a></li>
     		 <li class="active" style="background-color:inverse"><a href="login.php"><font size="1" color="red"><span class="glyphicon glyphicon-log-in" style="font-size:15px;"></span></font> Login</a></li>
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
				<h4 style="opacity: 1; border-radius: 10px;width:400px;" align="center"><label align="center" style="color:#D7DA0F"> <?php echo $hname;?></label></h4>
 				<div style="color:#FFFFFF ;border-radius: 20px; padding: 20px 30px 0px 30px;background-color:#071d36;opacity: 0.8; ">
				<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;width:200px;" align="">
							<label align="center" style="color:#000080"> 
								<b>Hostel Incharge </b>																		
							</label>
				</h4>

					 <?php
                        $a=0;
                        echo "<table class='table' border='1' align='center'>";
                        echo "<caption style='color:#D7DA0F '></capiton>";
                        echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align='center'><th>Designation</th><th>Name</th><th>Mobile No.</th><th>Email</th></tr>";
                        echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align=''><form action='book.php' method='post'><td>Wardon</td><td>$row1[3] $row1[4] $row1[5]</td><td>$row1[8]</td><td>$row1[7]</td></form></tr>";
                        echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align=''><form action='book.php' method='post'><td>Careteker</td><td>$row[3] $row[4] $row[5]</td><td>$row[8]</td><td>$row[7]</td></form></tr>";
                        echo "</table>";
            ?>
					
<br>
                <h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;width:300px;" align="">
						     	<label align="center" style="color:#000080"> 
							  	<b>Hostel Committee Members </b>					
									</label>
			         	</h4>


				<?php
                        $a=0;
                        echo "<table class='table' border='1' align='center'>";
                        echo "<caption style='color:#D7DA0F '></capiton>";
                        echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align='center'><th>Designation</th><th>Room No.</th><th>Name</th><th>Mobile No.</th><th>Email</th></tr>";
       
                           while($row3=$result2->fetch_array())
                           {
                            echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align=''><form action='book.php' method='post'><td>$row3[1]</td><td>$row3[3]</td><td>$row3[4] $row3[5] $row3[6]</td><td>$row3[8]</td><td>$row3[7]</td></form></tr>";
                           }
                            echo "</table>";
       ?>
<br>
							<h4 style="border-radius: 10px;background-color:#00FF00;border: 5px solid #006400;width:300px;" align="">
							<label align="center" style="color:#000080"> 
								<b>Hostel Accommodation </b>						
							</label>
			      	</h4>
			

								<?php
                        $a=0;
                        echo "<table class='table' border='1' align='center'>";
                        echo "<caption style='color:#D7DA0F '></capiton>";
                        echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align='center'><th>Availabel Accommodation</th><th>Persent Accommodation</th></tr>";
                        echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align=''><td>$row4[1]</td><td>$row4[2]</td></tr>";
                        echo "</table>";

               ?>
         <br><br>
				</div>
       	<br><br><hr>
				</div>
        <hr>

				</div>
			</div>
		</div>
	</div>
</div>
 <!-- Footer-->
<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold;color:#D7DA0F">
		devloped By Choubeyji &copy; 2018
	</div>
</footer>
</body>
</html>