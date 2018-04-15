<?php
require('function.php');
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      // username and password sent from form 
      $con = con();
      $reg = validate($_POST["reg"]);
      $comp = validate($_POST["comp"]);      
      $room = validate($_POST["room"]);
      $hostel = validate($_POST["hostel"]);
      $pass = validate($_POST["pass"]);
      $user = validate($_POST["user_id"]);
      $date1 = date('d/m/Y');

       // fetch data from mnnit_data_base table name
      $ins_qur = "SELECT * FROM `mnnit_data_base` WHERE user_id = '$user' AND password = '$pass' ";

      $result = mysqli_query($con,$ins_qur);
      
      $row = $result->fetch_array();

      $count = mysqli_num_rows($result);
      if($count == 1) 
      {
        if($row[2]==$reg)
        {
         $sql = "INSERT INTO `complain1`(`date1`,`stetus`,`reg_no.`, `hostel_name`, `room_no.`, `complain`) VALUES ('$date1','Received','$reg','$hostel',$room,'$comp')";

        if ($con->query($sql) === TRUE)
           {
              echo "<script>alert('Complain Successfully Registered $hostel $room $reg $comp');window.location='index.php';</script>";
           }
        }
         else
         {
          echo "<script>alert('Registration number does not match');window.location='complain.php';</script>"; 
         }
      }
      else 
     {
      echo "<script>alert('User_id and Password are not Matched');window.location='complain.php';</script>"; 
     }
  }
?>
