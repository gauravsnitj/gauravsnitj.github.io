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




      <!-- following is the script code for selecting city and corresponding doctors in that city -->


      <script type="text/javascript" lang="javascript" src="jquery.js"></script>
    <script>
      $(function(){
        $('.city').change(function(){
          $('.doctorName option:gt(0)').remove();
         var sid=$(this).val();
          $.post('getDoctor.php','stid='+sid,function(data){
          
            var ob=jQuery.parseJSON(data);
            $.each(ob,function(){
            
             $('.doctorName').append("<option>"+this.name+"</option>");
            
            })
          
          })
          
        })
      })
    
    </script>












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
                        <a href="doctors_list.php"><i class="fa fa-fw fa-file"></i> Doctors List</a>
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
        <li class="tab"><a href="patient_list.php">Patient List</a></li>
        <li class="tab active"><a href="#patient_appoint">Patient Appointment</a></li>  
      </ul>
      
      
      <div class="tab-content"> 
        
        
        <div id="login">   
          
          
          <form action="addPatient_makeAnAppointment.php" method="POST">
          
            <div class="field-wrap">
            <label>
              Name<span class="req">*</span>
            </label>
            <input type="text" name="name" required autocomplete="off"/>
            </div>
          
         <!-- <div class="field-wrap">
            <label>
              Mobile<span class="req">*</span>
            </label>
            <input type="number"required autocomplete="off"/>
          </div>-->
          
         <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->



                      <div class="top-row">
                          <div class="field-wrap">
                            <label>
                              Mobile No<span class="req">*</span>
                            </label>
                            <input type="number" name="mobile_no" style="width:100%;" style="height:100%;" required autocomplete="off"/>
                          </div>


                            <div class="field-wrap">
                            <label>
                              Age<span class="req">*</span>
                            </label>
                            <input type="number"  name= "age" style="width:100%;" style="height:100%;" required autocomplete="off"/>
                          </div>
                          </div>


                          <div class="field-wrap">
                            <label>
                              Email Address<span class="req">*</span>
                            </label>
                            <input type="email" name="email" style="width:100%;" style="height:100%;" style ="center;"required autocomplete="off"/>
                          </div>
                            


                        <div class="top-row ">
                          <div class="field-wrap">
                            <div class="control-group">
                                <label1 class="control-label">Blood Group<span class="req">*</span></label1>
                                <div class="controls">
                                    <select required name="bloodGroup" class="uniform group">
                                        <option value="">Select</option>
                                        <option selected="selected" value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                          </div>
                           <div class="field-wrap">
                              <div class="control-group">
                                <label2 class="control-label ">Select Gender<span class="req">*</span></label2>
                                <div class="controls">
                                    <select required name="gender" class="uniform group2">
                                      <option value="">Select</option>
                                      <option selected="selected" value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                              </div>
                            </div>
                        </div>


                        <div class="top-row ">
                        <div class="field-wrap">
                          <div class="control-group">
                            <label2 class="control-label ">City Name<span class="req">*</span></label2>
                                <div class="controls">
                            <select class="city uniform group" name="city">
                            <option value="0">Select City</option>
          
                                 <?php 
                                    $query="select * from city_info";
                                    $result=mysqli_query($conn,$query);
          
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                  ?>
                                  <option value="<?php echo $row['city_id']?>"><?php echo $row['city_name']?></option>
                                  <?php }?>
                                  </select>
      
                                  </div>
                                  </div>
                                  </div>
      <!-- 
                                  <br/>
                                  <br/>
                                  <br/>
                                  <br/>
                                  </div> -->
                                  <div class="field-wrap">
                                    <div class="control-group">
                                <label2 class="control-label ">Doctor's Name<span class="req">*</span></label2>
                                <div class="controls">
                                <select name="doctorName" class="doctorName uniform group2">
                                  <option value="0">Select Doctor</option>

                                  </select>

                                  </div>
                                  </div>
                                  </div>
                                </div>

            

                    <button class="button button-block"/>Book Appointment</button>
                  
                  </form>

                </div>
                
              </div><!-- tab-content -->
              
            </div> <!-- /form -->
          

             <!--  <script src="js/index.js"></script> -->


                
                    
                   
                   
                           

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
