<?php
   include('config.php');
   session_start();
   
   if(!isset($_SESSION['login_user'])){
      header("location:../login.php");
   		//echo "login_user is not set.";
   }
   else
   {
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from user_signup where firstName = '".$user_check."' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['firstName'];
   }
   
?>