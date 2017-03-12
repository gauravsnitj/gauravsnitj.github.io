<?php 
	$sid=$_REQUEST['stid'];
	$connection=mysqli_connect("localhost","admin","password","mydb");
	$query="select * from doctor_info where city_id=$sid";
	$result=mysqli_query($connection,$query);
	$data="";
	$i=1;
	while($row=mysqli_fetch_assoc($result))
	{
		$data[$i]['city_id']=$row['city_id'];
		$data[$i]['name']=$row['name'];
		$i++;
	}
	
	print_r(json_encode($data));
?>