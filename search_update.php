<?php
session_start();


//include funtion.php file
$z=0;
require('function.php');
$con = con();

$s=0;//for know whic page be loded
//here check, where "session with user_id" is set or not
$t=0;//for which table show
if(isset($_SESSION['user_id'])){
$id=$_SESSION['user_id'];
}
else
{

//if session is not set then control goes to homepage

header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}

$sql = "SELECT * FROM `h_caretaker` WHERE user_id = '$id'";
          $result = mysqli_query($con,$sql);
          $row5 = $result->fetch_array();

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      $search = validate($_POST["search"]);

      if($search=="Registretion Number")
        $s=1;
      else if($search=="Room")
        $s=2;
      else if($search=="Name")
        $s=3;

      $check = validate($_POST["check"]);
      if($check!=NULL)
      {

         
            if($check==1)
              {    $t=1;      
                  
                  $reg = validate($_POST["reg"]);

                  $sql1 ="SELECT * FROM `$row5[2]`";
                  //$result1 = mysqli_query($con,$sql1);
                  $result1 = $con->query($sql1);
                  
                  //$row3= mysqli_fetch_assoc($result);
                    while($row3 = $result1->fetch_array())
                    {
                    if($row3[0]==$reg)
                      break;
                    }
              }
              else if($check==2)
              {          
                 $t=2; 
                  $room = validate($_POST["room"]);


                 

                  $sql1 ="SELECT * FROM `$row5[2]`";
                  //$result1 = mysqli_query($con,$sql1);
                  $result1 = $con->query($sql1);
                  
              }   
              else if($check==3)
              {    $t=3;       
                  $first = validate($_POST["first"]);
                  $middle = validate($_POST["middle"]);
                  $last = validate($_POST["last"]);

                  $sql1 ="SELECT * FROM `$row5[2]`";
                  $result1 = $con->query($sql1);

                    while($row3 = $result1->fetch_array())
                    {

                          if($row3[2]==$first && $row3[3]==$middle && $row3[4]==$last)
                            {
                                break;
                            }
                    }
                  
                  
              }   




      }
      



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="favicon.ico">
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
        <li class="active"><a href="caretaker.php" >Home</a></li>
        <li class="active" data-toggle="modal" style="color:red" data-target="#add_blog_modal"><a href="careteker_room.php">Allot Room</a></li>
        <li class="active"><a href="see_complain_caretekar.php">See Complain</a></li>
        <li class="active"><a href="see_wardon_order.php">See wardon order & Add Hostel Committee members</a></li>
      <li class="active"><a href="search_update.php">Search student</a></li>
        
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

      <!-- End-->
  
  
               

                <div class="div2">
   
    <div class="container"  >
      <div class="col-sm-12" >
        <h2 style="opacity:0.9;"><marquee><label align="center" style="color:#FFFFFF;">HOSTEL LIFE IS A MOST REMEBREBEL EVEVENT OF YOUR LIFE</label></marquee></h2>
        <hr>
        

      


      
   <div style="color:#FFFFFF ;border-radius: 20px; padding: 20px 30px 0px 30px;background-color:#071d36;opacity: 0.8; height:600px">

                 <form action='search_update.php' method='post'>
                   <div class='col-sm-12 controls'>
                       <div style="margin-bottom: 25px" class="input-group mainbox col-md-4 col-md-offset-4 col-sm-9 col-sm-offset-6">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                              <select  class="form-control" name="search">
                               <option>Search Student By</option>
                                <option>Registretion Number</option>
                               <option>Room</option>
                               <option>Name</option>
                    
                              </select>
                
                               <div class="col-md-offset-12">
                                   <input type='submit' id='btn-login' action='book.php' class='btn btn-success' value='Search'>
                               </div>
                        </div>
                    </div>
                </form>
                <br>
                <br>

                <?php
                if($s==1)
                {
                  echo "
                <div id='' style='margin-top:50px' class='mainbox col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-3'>
                      <div class='panel panel-info'>
                          <div class='panel-heading'>
                              <div class='panel-title'>Search Student By Registretion number</div>
                              <div style='float:right; font-size: 85%; position: relative; top:-10px'>
                                <a id='signinlink' href='appoint.php'></a>
                              </div>
                          </div>  
                          <div class='panel-body' >
                              <form style='background-image:url(back/10.jpg);' id='book' class='form-horizontal' role='form' action='search_update.php' method='post'>
                                  <br>
                                  <div class='form-group'>
                                      <label for='first_name' class='col-md-3 control-label' style='color:black'>Registretion Number*</label>
                                           <div class='col-md-9'>
                                               <input type='text' class='form-control' name='reg' placeholder='Registretion Number' size='30' id='na' onblur='ncheck();'><span id='spn' style='color:red'></span>
                                            </div>
                                  </div>
                                  <input type='text' style='display:none;' value='1' name='check'>
                                  <div class='form-group'>  //Submit Button                                        
                                  <div class=col-md-offset-7 col-md-2'>
                                  <input type='submit' id='btn-signup' class='btn btn-info'><i class='icon-hand-right'></i>
                              </form>
                         </div>
                      </div>
                </div>
              </div>
              </div>";
                }
?>

              <?php
              if($s==2)
              {
                echo "
              <div id='' style='margin-top:50px' class='mainbox col-md-4 col-md-offset-4 col-sm-7 col-sm-offset-3'>
                      <div class='panel panel-info'>
                          <div class='panel-heading'>
                              <div class='panel-title'>Search Student By Room Number</div>
                              <div style='float:right; font-size: 85%; position: relative; top:-10px'>
                                <a id='signinlink' href='appoint.php'></a>
                              </div>
                          </div>  
                          <div class='panel-body'>
                              <form style='background-image:url(back/10.jpg)' id='book' class='form-horizontal' role='form' action='search_update.php' method='post'>
                                  <br>
                                  <div class='form-group'>
                                      <label for='first_name' class='col-md-3 control-label' style='color:black'>Room Number*</label>
                                           <div class='col-md-9'>
                                               <input type='text' class='form-control' name='room' placeholder='Room Number' size='30' id='na' onblur='ncheck();'><span id='spn' style='color:red'></span>
                                            </div>
                                  </div>
                                  <input type='text' style='display:none;' value='2' name='check'>
                                  <div class='form-group'>                                       
                                  <div class='col-md-offset-7 col-md-2'>
                                  <input type='submit' id='btn-signup' class='btn btn-info'><i class='icon-hand-right'></i>
                              </form>
                         </div>
                      </div>
                </div>
              </div>
            </div>";
          }
          ?>

          <?php 
          if($s==3)
          {
            echo "
            <div id='' style='margin-top:50px' class='mainbox col-md-4 col-md-offset-4 col-sm-7 col-sm-offset-3'>
                      <div class='panel panel-info'>
                          <div class='panel-heading'>
                              <div class='panel-title'>Search Student By Name</div>
                              <div style='float:right; font-size: 85%; position: relative; top:-10px'>
                                <a id='signinlink' href='appoint.php'></a>
                              </div>
                          </div>  
                          <div class='panel-body' >
                              <form style='background-image:url(back/10.jpg);' id='book' class='form-horizontal' role='form' action='search_update.php' method='post'>
                                  <br>
                                  <div class='form-group'>
                                      <label for='first_name' class='col-md-3 control-label' style='color:black'>First Name*</label>
                                           <div class='col-md-9'>
                                               <input type='text' class='form-control' name='first' placeholder='First Name' size='30' id='na' onblur='ncheck();'><span id='spn' style='color:red'></span>
                                            </div>
                                  </div>
                                  <div class='form-group'>
                                      <label for='first_name' class='col-md-3 control-label' style='color:black'>Middle Name</label>
                                           <div class='col-md-9'>
                                               <input type='text' class='form-control' name='middle' placeholder='Middle Name' size='30' id='na' onblur='ncheck();'><span id='spn' style='color:red'></span>
                                            </div>
                                  </div>
                                  <div class='form-group'>
                                      <label for='first_name' class='col-md-3 control-label' style='color:black'>Last Name</label>
                                           <div class='col-md-9'>
                                               <input type='text' class='form-control' name='last' placeholder='Last Name' size='30' id='na' onblur='ncheck();'><span id='spn' style='color:red'></span>
                                            </div>
                                  </div>
                                  <input type='text' style='display:none;' value='3' name='check'>
                                  <div class='form-group'>                                         
                                  <div class='col-md-offset-7 col-md-2'>
                                  <input type='submit' id='btn-signup' class='btn btn-info'><i class='icon-hand-right'></i>
                              </form>
                         </div>
                      </div>
                </div>
              </div>
            </div>";
          }
          ?>

            


  
                <br>
                <br>

                <?php
                  if($t==1)
                  {
                        $a=0;
                         if($row3[0]==$reg)
                        {
                        echo "<table class='table' border='1' align='center'>";
                        echo "<caption style='color:#D7DA0F '></capiton>";

                          echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align='center'><th>Registration No.</th><th>Room No.</th><th>Name</th><th>Email</th><th>Mobile No.</th><th>Course</th><th>Branch</th><th>Year</th><th>Session</th></tr>";
       
                         
                            echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align=''><form action='see_complain_caretekar.php' method='post'><td>$row3[0]</td><td>$row3[1]</td><td>$row3[2] $row3[3] $row3[4]</td><td>$row3[5]</td><td>$row3[6]</td><td>$row3[7]</td><td>$row3[8]</td><td>$row3[9]</td><td>$row3[10]</td></form></tr>";
                          
                              
                          echo "</table>";
                        }else
                        echo "result not found";

                  }
                  else if($t==2)
                  {
                        $a=0;
                        while($row3 = $result1->fetch_array())
                    {
                         if($row3[1]==$room)
                        {
                        echo "<table class='table' border='1' align='center'>";
                        echo "<caption style='color:#D7DA0F '></capiton>";

                          echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align='center'><th>Registration No.</th><th>Room No.</th><th>Name</th><th>Email</th><th>Mobile No.</th><th>Course</th><th>Branch</th><th>Year</th><th>Session</th></tr>";
       
                         
                            echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align=''><form action='see_complain_caretekar.php' method='post'><td>$row3[0]</td><td>$row3[1]</td><td>$row3[2] $row3[3] $row3[4]</td><td>$row3[5]</td><td>$row3[6]</td><td>$row3[7]</td><td>$row3[8]</td><td>$row3[9]</td><td>$row3[10]</td></form></tr>";
                          
                              
                          echo "</table>";
                        }else
                        echo "result not found";
                    }
                  }
                  else if($t==3)
                  {
                        $a=0;
                         if($row3[2]==$first && $row3[3]==$middle && $row3[4]==$last)
                        {
                        echo "<table class='table' border='1' align='center'>";
                        echo "<caption style='color:#D7DA0F '></capiton>";

                          echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align='center'><th>Registration No.</th><th>Room No.</th><th>Name</th><th>Email</th><th>Mobile No.</th><th>Course</th><th>Branch</th><th>Year</th><th>Session</th></tr>";
       
                         
                            echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align=''><form action='see_complain_caretekar.php' method='post'><td>$row3[0]</td><td>$row3[1]</td><td>$row3[2] $row3[3] $row3[4]</td><td>$row3[5]</td><td>$row3[6]</td><td>$row3[7]</td><td>$row3[8]</td><td>$row3[9]</td><td>$row3[10]</td></td></form></tr>";
                          
                              
                          echo "</table>";
                        }else
                        echo "result not found";

                  }
                ?>
                <br>
         
       
                <br><br><br>
   </div>
   <br>
   <hr>

    <footer class="container-fluid">
    <div style="text-align:center;padding:1%;font-weight:bold;color:#D7DA0F">
       devloped By Choubeyji &copy; 2018
    </div>
    </footer>
</body>
</html>