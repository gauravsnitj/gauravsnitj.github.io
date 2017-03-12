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
    <link rel="stylesheet"  href="css/new.css">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="css/signinpop.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- 
<div align="center"> 
        
    </div> 
    <div id="loginScreen"> <a href="#" class="cancel">&times;</a> 

    <form action = "login.php" method = "post">
     <p></p><br/>
     <p>LOGIN INFORMATION</p><br/>
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit " name="submit"/><br />
               </form>


     
    </div>  -->
    <div id="cover" > 
    </div> 

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
                                <li><a href="labtest.php">Lab Test</a></li>
                                <li><a href="callambulance.php">Call Ambulance</a></li>
                                <li><a href="bloodbank.php">Blood Bank</a></li>
                                <li><a href="services.php">Services</a></li>
                                </ul>
                            </li>
					        <li><a href="joinus.php">Join Us</a></li>
					        
							<li><a href="help.php">Help</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
							<li><p><?php echo "Hello ".$login_session; ?></p></li>
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



                   
                    
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                
                <!-- /.row -->

                <section class= "featured-service-content title-logo">
            
                <div class="row">
                    <div class="col-sm-4 service">
                        <div class="row text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-medkit fa-5x"></i>
                            </div>
                        </div>
                            
                        <div class="row text-center">
                            <div class="about-service">
                                <h3 class="text-center">Find Hospital</h3>
                                <p class="text-center">
                                    Find the list of hospitals in your city along with the address.
                                    Just by entering your state and the district name.
                                    
                                </p>
                            </div>
                        </div>
                                
                    </div>  <!-- col-sm-4 -->

                    <div class="col-sm-4 service">
                        <div class="row text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-stethoscope fa-5x"></i>
                            </div>
                        </div>
                            
                        <div class="row text-center">
                            <div class="about-service">
                                <h3 class="text-center">Appointment with Doctor</h3>
                                <p class="text-center">
                                    Book the appointment with the best doctors available in your city. Fill the simple details online and reach the doctor at specified time.
                                </p>
                            </div>
                        </div>
                            
                    </div>  <!-- col-sm-4 -->
                    
                    <div class="col-sm-4 service">
                        <div class="row text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-tint fa-5x"></i>
                            </div>
                        </div>
                            
                        <div class="row text-center">
                            <div class="about-service">
                                <h3 class="text-center">Blood Bank</h3>
                                <p class="text-center">
                                    Locate the Blood Bank souces in your city. Enter the name of your city and select the any of the given options
.                                </p>
                            </div>
                        </div>
                            
                    </div>  <!-- col-sm-4 -->
                
                    <div class="col-sm-4 service">
                        <div class="row text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-ambulance fa-5x"></i>
                            </div>
                        </div>
                            
                        <div class="row text-center">
                            <div class="about-service">
                                <h3 class="text-center">Call Ambulance</h3>
                                <p class="text-center">
                                    Call the ambulance by filling out location details. Ambulance will reach you as soon as possible.
                                </p>
                            </div>
                        </div>
                            
                    </div>  <!-- col-sm-4 -->
                    <div class="col-sm-4 service">
                        <div class="row text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-heart fa-5x"></i>
                            </div>
                        </div>
                            
                        <div class="row text-center">
                            <div class="about-service">
                                <h3 class="text-center">Transplant Services</h3>
                                <p class="text-center">
                                Transplant services include Comprehensive Tissue Centre along with collaboration with organ and tissue donation programs
                                     
                                </p>
                            </div>
                        </div>
                            
                    </div>  <!-- col-sm-4 -->
                    <div class="col-sm-4 service">
                        <div class="row text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-clock-o fa-5x"></i>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="about-service">
                                <h3 class="text-center">24 Hours Service</h3>
                                <p class="text-center">
                                    We provide all our services for complete 24 hours. All services can be availed at any time of the day.
                                </p>
                            </div>
                        </div>
                    </div>  <!-- col-sm-4 -->
                </div>
        
        </section>


                
                    
                   
                   
                           

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
