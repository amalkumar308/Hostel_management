<?php
session_start();
unset($_SESSION['user_id']);
      //unset the session of user id 
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
?>
