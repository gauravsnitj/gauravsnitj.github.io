<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="css/patient.css">

    <!-- For table -->
    <style>
    table,th,td {
    border: 1px solid black;
    border-collapse:collapse;
    text-align: center;
}
</style>

</head>

<body>

   



    <div id="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  				<div class="container-fluid">
    				<!-- Brand and toggle get grouped for better mobile display -->
    				<div class="navbar-header">
      					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
	      				</button>
	      				<a class="navbar-brand logo" >
	      					<span><i class="fa fa-stethoscope"></i></span>
	      					Panacea     </a>
	    			</div>
		
		    		<!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    	<ul class="nav navbar-nav navbar-right ">
					        <li class="active"><a href="home.php">Home</a></li>

                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu text-col">
                                <li><a href="findhospital.php">Find Hospital</a></li>
                                <li><a href="patient_appoint.php">Appointment</a></li>
                                <li><a href="findhospital.php">Find Hospital</a></li>
                                <li><a href="labtest.php">Lab Test</a></li>
                                <li><a href="callambulance.php">Call Ambulance</a></li>
                                <li><a href="bloodbank.php">Blood Bank</a></li>
                                <li><a href="services.php">Services</a></li>
                                </ul>
                            </li>
                            <li><a href="joinus.php">Join Us</a></li>
							<li><a href="help.php">Help</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
							<li style="color:white;"><b><?php echo "Hi ".$login_session ?></b></li>
              <li><p><button type="button" class="btn btn-default btn-sm gly-"><span class="glyphicon glyphicon-user "><a href="logout.php"></span>Log Out</button></a></li>
              <li><a></a></li>

				      	</ul>

				   
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                   <!-- <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>-->

                     <li>
                        <a href="findhospital.php"><i class="fa fa-fw fa-building"></i> Find Hospital</a>
                    </li>
                    <li>
                        <a href="patient_appoint.php"><i class="fa fa-fw fa-stethoscope"></i> Appointment</a>
                    </li>
                    <li>
                        <a href="labtest.php"><i class="fa fa-fw fa-edit"></i> Lab Test</a>
                    </li>
                    <li>
                        <a href="bloodbank.php"><i class="fa fa-fw fa-tint"></i> Blood Bank</a>
                    </li>
                    <li>
                        <a href="callambulance.php"><i class="fa fa-fw fa-ambulance"></i> Call Ambulance</a>
                    </li>
                    <li>
                    <a href="services.php"><i class="fa fa-fw fa-wrench"></i> Services</a>
                       
                    </li>
                    <li>
                        <a href="joinus.php"><i class="fa fa-fw fa-file"></i> Join Us</a>
                    </li>
                    <li>
                        <a href="doctors_list.php"><i class="fa fa-fw fa-file"></i>Doctors List</a>
                    </li>


                   
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                
                <!-- /.row -->

                <div class="form">
     
       
      <ul class="tab-group">
        <li class="tab active"><a href="#patient_list">Patient List</a></li>
        <li class="tab"><a href="patient_appoint.php">Patient Appointment</a></li>  
      </ul>
      

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
Doctor's Name: <input type="text" name="doctorName" style="width="50%""/><br>
<button name="submit" type="submit">Click</button><br><br>
</form>

<?php 
        
     ?>


<?php
$doctorName=""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $doctorName=$_POST["doctorName"];

        }
  $selectSQL = "SELECT name,age,bloodGroup FROM patient_appointments_database where doctorsName='".$doctorName."'";
  $doctorName="";
 # Execute the SELECT Query
  if( !( $selectRes = mysqli_query( $conn,$selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_error($conn);
  }else{
  // }
    ?>
<table style="width:100%;">
  <!-- <thead> -->
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Blood Group</th>
      <!--  <th>Address Line 2</th>
      <th>Email Id</th>   -->
    </tr>
  <!-- </thead> -->
  <!-- <tbody> -->
    <?php
      // if(!empty($doctorsName))
      // {
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['name']}</td> <td>{$row['age']}</td> <td>{$row['bloodGroup']}</td></tr>\n";
        }
      }
    // }
    ?>
  <!-- </tbody> -->
</table>
    <?php
  }

?>   

<!--  <td>{$row['addr1']}</td><td>{$row['addr2']}</td>  -->


</body>
</html>






















      <!--
      <div class="tab-content"> 
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  

        <script src="js/index.js"></script> 



                
                    
                   
                   
                           

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
