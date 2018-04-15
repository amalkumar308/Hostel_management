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
    
      $sql = "SELECT * FROM `h_caretaker` WHERE user_id = '$id'";
          $result = mysqli_query($con,$sql);
          $row5 = $result->fetch_array();



echo "<script>alert('$sql  kkk<br>  $row5[0]');</script>";





if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      // username and password sent from form 
     

      $check = validate($_POST["check"]);

      if($check==1)
      {
          $reg = validate($_POST["reg"]);  
          $room = validate($_POST["room"]);  




          $sql1 = "SELECT * FROM `mnnit_data_base`";
          $result1 = mysqli_query($con,$sql1);
          
          while($row = $result1->fetch_array())
          {
            if($row[2]==$reg)
            {
            $sql = "INSERT INTO `$row5[2]`(`reg_no.`,`room_no.`,`first_name`, `middle_name`, `last_name`, `email`,`mob-no.`,`course`,`branch`,`year`,`session`) VALUES ('$reg','$room','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]')";
             if ($con->query($sql) === TRUE)
           {
              echo "<script>alert('$room Is Alloted');window.location='careteker_room.php';</script>";
              
   
            }
            else
            {
              echo "<script>alert('$room Is Allready Alloted');window.location='careteker_room.php';</script>";
            }
           

          }
        }
        }
    else
    {
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
     
      
      $sql = "INSERT INTO `$row5[2]` (`reg_no.`,`room_no.`,`first_name`, `middle_name`, `last_name`, `email`,`mob-no.`,`course`,`branch`,`year`,`session`) VALUES ('$reg','$room','$first','$middle','$last','$email','$mob','$course','$branch','$year','$session')";
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


       
//

?>
