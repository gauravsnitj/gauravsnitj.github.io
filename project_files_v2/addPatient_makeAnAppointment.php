<?php include("config.php"); ?>
<?php

//$db = mysqli_connect("localhost","admin","password","mydb");

$name=test_input($_POST['name']);
$email=test_input($_POST['email']);
$mobile_no=test_input($_POST['mobile_no']);
$age=test_input($_POST['age']);
$gender=test_input($_POST['gender']);
$bloodGroup=test_input($_POST['bloodGroup']);
$doctorsName=test_input($_POST['doctorName']);

$res=mysqli_query($conn,"SELECT * FROM patient_appointments_database where email='".$email."'");
if(mysqli_num_rows($res) > 0)
	{
	echo "<script>
      alert('Email Id already Exist');
      window.location.href='patient_appoint.php';
      </script>";
}
else
{


$sql="INSERT INTO patient_appointments_database(name,email,mobile_no,age,gender,bloodGroup,doctorsName) VALUES ('$name','$email','$mobile_no','$age','$gender','$bloodGroup','$doctorsName')";

if(mysqli_query($conn,$sql))
{
    echo "<script>
      alert('Added Successfully.');
      window.location.href='patient_appoint.php';
      </script>";
}
else
{
    die("Failed" . mysqli_error($db));
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



