<?php
require('function.php');
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      // username and password sent from form 
      $con = con();
      $for1 = validate($_POST["for1"]);
      $not = validate($_POST["not"]);      
           

       //query to check user_id is present or not
      $sql="INSERT INTO `notice`(for_who,notice) VALUES ('$for1','$not')";

      if($con->query($sql) === TRUE)
           {
              echo "<script>alert('Notice Successfully Published');window.location='wardon.php';</script>";
   
            }
 
}


?>
