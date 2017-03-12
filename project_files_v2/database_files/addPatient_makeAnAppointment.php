
<?php

$db = mysqli_connect("localhost","admin","password","mydb");

$name=test_input($_POST['name']);
$email=test_input($_POST['email']);
$mobile_no=test_input($_POST['mobile_no']);
$age=test_input($_POST['age']);
$gender=test_input($_POST['gender']);
$bloodGroup=test_input($_POST['bloodGroup']);
$doctorsName=test_input($_POST['doctors_name']);

$sql="INSERT INTO patient_appointments_database(name,email,mobile_no,age,gender,bloodGroup,doctorsName) VALUES ('$name','$email','$mobile_no','$age','$gender','$bloodGroup','$doctorsName')";

if(mysqli_query($db,$sql))
{
    echo "Added Successfully";
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
