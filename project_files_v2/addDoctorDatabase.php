
<?php

$db = mysqli_connect("localhost","admin","password","mydb");

$name=test_input($_POST['name']);
//$lastName=test_input($_POST['last_name']);
$mobileNo=test_input($_POST['mobile_no']);
$age=test_input($_POST['age']);
$email=test_input($_POST['email']);
$specialization=test_input($_POST['specialization']);
$city=test_input($_POST['city']);
$experience=test_input($_POST['experience']);
$gender=test_input($_POST['gender']);
//$password=test_input($_POST['password']);

$sql="INSERT INTO doctor_info(name,mobileNo,age,email,specialization,city,experience,gender) VALUES ('$name','$mobileNo','$age','$email','$specialization','$city','$experience','$gender')";

if(mysqli_query($db,$sql))
{
	//echo "Added Successfully";
	header("Location: joinus.php");
}
else
{
	die("Failed" . mysqli_error($db));
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
