<?php
session_start();
require('function.php');
 $con = con();

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
    
            //fetch data from h_caretaker table name

      $sql = "SELECT * FROM `h_caretaker` WHERE user_id = '$id'";
          $result = mysqli_query($con,$sql);
          $row5 = $result->fetch_array();


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
     

      $check = validate($_POST["check"]);

      if($check==1)
      { 
          //accept apperopriate data from form
          $reg = validate($_POST["reg"]);  
          $room = validate($_POST["room"]);  


            //fetch data from mnnit_data_base table name

          $sql1 = "SELECT * FROM `mnnit_data_base` WHERE reg_no. = '$reg'";
          $result1 = mysqli_query($con,$sql1);
          
          $row = $result1->fetch_array();
          $count = mysqli_num_rows($result1);
          if($count == 1) 
          {
            $sql = "INSERT INTO `$row5[2]`(`reg_id.`,`room_no.`,`first_name`, `middle_name`, `last_name`, `email`,`mob-no.`,`course`,`branch`,`year`,`session`) VALUES ('$reg','$room','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]')";
             if ($con->query($sql) === TRUE)
           {
              echo "<script>alert('$room Is Alloted');window.location='careteker_room.php';</script>";
   
            }
          }
          else
          {
            echo "<script>alert('$reg Not on server');window.location='careteker_room.php';</script>";
          }
        }
    else
    {
      // regestration , room no. and basic details sent from form  
     
      $reg = validate($_POST["reg"]);  
      $room = validate($_POST["room"]);  
      $first = validate($_POST["first_name"]);  
      $middle = validate($_POST["middle_name"]);  
      $last = validate($_POST["Last_name"]);  
      $email = validate($_POST["email"]);  
      $mob = validate($_POST["mob"]);  
      $course = validate($_POST["course"]);  
      $branch = validate($_POST["branch"]);  
      $year = validate($_POST["year"]);  
      $session = validate($_POST["sess"]);  
     
              //insert all details into $row5 which are fetched in above query 
      $sql = "INSERT INTO `$row5[2]` (`reg_id.`,`room_no.`,`first_name`, `middle_name`, `last_name`, `email`,`mob-no.`,`course`,`branch`,`year`,`session`) VALUES ('$reg','$room','$first','$middle','$last','$email','$mob','$course','$branch','$year','$session')";
           if ($con->query($sql) === TRUE)
           {
              echo "<script>alert('$room Is Alloted');window.location='careteker_room.php';</script>";
   
           }
           else
           {
             echo "<script>alert('Already registered');window.location='careteker_room.php';</script>";
           }
    } 
}
?>
