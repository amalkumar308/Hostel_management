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









if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      // username and password sent from form 
     

      $reg = validate($_POST["reg"]);  
      $room = validate($_POST["room"]);  
      $first = validate($_POST["first_name"]);  
      $middle = validate($_POST["middle_name"]);  
      $last = validate($_POST["Last_name"]);  
      $email = validate($_POST["email"]);  
      $mob = validate($_POST["mob"]); 
      $diss = validate($_POST["dis"]);
      
     
      
      $sql = "INSERT INTO `h_team_mem`(`hostel_name`,`desigenation.`,`reg_no.`,`room_no.`,`first_name`,`middle_name`,`last_name`,`email`,`mob-no.`) VALUES ('$row5[2]','$diss','$reg','$room','$first','$middle','$last','$email','$mob')";
           if ($con->query($sql) === TRUE)
           {
              echo "<script>alert('Successfully Added');window.location='aee_wardon_order.php';</script>";
   
            }
          else
          {
            echo "<script>alert('Already registered');window.location='see_wardon_order.php';</script>";
          }



}


       
//

?>
