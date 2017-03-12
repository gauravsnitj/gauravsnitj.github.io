<?php
include("config.php");
session_start();
if(isset($_POST['submit']))
{
 //$conn=mysqli_connect('localhost','admin','password','mydb');
 if(!$conn) die("connection failed: " . mysqli_connect_error());
 $email=$_POST['email'];
 $password=$_POST['password'];
 if($email!=''&&$password!='')
 {
   $query=mysqli_query($conn,"select * from user_signup where email='".$email."' and password='".$password."'") or die(mysqli_error($conn));
   
   $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
   if($row)
   {
    //$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
    $_SESSION['login_user']=$row['firstName'];
    //echo "login successfully.";
    header('Location: project_files_v2/home.php');
   }
   else
   {

      echo "<script>
      alert('The email or password is incorrect');
      window.location.href='home.php';
      </script>";

    //echo'You entered username or password is incorrect';
   }
 }
 else
 {

    echo "<script>
      alert('The email and password is incorrect');
      window.location.href='home.php';
      </script>";

  //echo'Enter both username and password';
 }
}
?>