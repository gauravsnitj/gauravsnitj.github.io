
<?php
include("config.php");
//session_start();
//$conn = mysqli_connect("localhost","admin","password","mydb");

$firstName=test_input($_POST['first_name']);
$lastName=test_input($_POST['last_name']);
$mobileNo=test_input($_POST['mobile_no']);
$age=test_input($_POST['age']);
$email=test_input($_POST['email']);
$gender=test_input($_POST['gender']);
$password=test_input($_POST['password']);

$res=mysqli_query($conn,"SELECT * FROM user_signup where email='".$email."'");
if(mysqli_num_rows($res) > 0)
	{
	echo "<script>
      alert('Email Id already Exist');
      window.location.href='user_signup.php';
      </script>";
}
else
{
$sql="INSERT INTO user_signup(firstName,lastName,mobileNo,age,email,gender,password) VALUES ('$firstName','$lastName','$mobileNo','$age','$email','$gender','$password')";

if(mysqli_query($conn,$sql))
{
	echo "<script>
      alert('Successfully Signed up');
      window.location.href='home.php';
      </script>";
}
else
{
	die("Failed" . mysqli_error($conn));
}

}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
