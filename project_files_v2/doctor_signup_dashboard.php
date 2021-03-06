<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

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


    
    <link rel="stylesheet" type="text/css" href="css/s1.css">





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
					        	<li><a href="askdoctor.php">Ask Doctor</a></li>
					        	<li><a href="#">Appointment</a></li>
					        	<li><a href="#">Service1</a></li>
					        	<li><a href="#">Servic2</a></li>
					        	</ul>
					        </li>

					        <li class="dropdown">
					        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Doctor
					        	<b class="caret"></b></a>
					        	<ul class="dropdown-menu text-col"><li><a href="#">Join Us</a></li>
					        	<li><a href="#"> Doctor's Log In </a></li>
					        	
					        	</ul>
					        </li>
					        
					        
					        <!--<li><a href="blog.php">Blog</a></li>-->
							<li><a href="faq1.php">FAQs</a></li>
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
                        <a href="askdoctor.php"><i class="fa fa-fw fa-heart"></i> Ask Doctor</a>
                    </li>
                    <li>
                        <a href="labtest.php"><i class="fa fa-fw fa-edit"></i> Lab Test</a>
                    </li>
                    <li>
                        <a href="bloodbank.php"><i class="fa fa-fw fa-desktop"></i> Blood Bank</a>
                    </li>
                    <li>
                        <a href="callambulance.php"><i class="fa fa-fw fa-wrench"></i> Call Ambulance</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Services <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="joinus.php"><i class="fa fa-fw fa-file"></i> Join Us</a>
                    </li>
                    
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

      <div id="page-wrapper">


        <div class="container-fluid ">


                   <div class="row">
                        <div class="col-md-12">
                          <img class="img-responsive title-logo" src="assets/img/slider.png" alt="mainpic">
                        </div>
                  </div>
        
          


          <!-- /.row -->
         
            <div class="row">

                <div class="col-lg-3">
                </div>

                <div class=" doctor_body col-lg-6">
                

                    <div class="form ">
                      <div class="tab-content"> 
                        <div id="signup">   
                        <h2>Doctor' Form</h2>
                          
                          <form action="/" method="post">
                          
                          <div class="top-row">
                            <div class="field-wrap">
                              <label>
                                Name<span class="req">*</span>
                              </label>
                              <input style="width:100%;" style="height:100%;" type="text" name="name" required autocomplete="off" />
                            </div>
                        
                          <div class="field-wrap">
                            <label>
                              Mobile No<span class="req">*</span>
                            </label>
                            <input type="tel" name="mob" style="width:100%;" style="height:100%;" required autocomplete="off"/>
                          </div>
                          </div>


                          <div class="top-row">
                            <div class="field-wrap">
                            <label>
                              Age<span class="req">*</span>
                            </label>
                            <input type="number"  name= "age" style="width:100%;" style="height:100%;" required autocomplete="off"/>
                          </div>

                          <div class="field-wrap">
                            <label>
                              Email Address<span class="req">*</span>
                            </label>
                            <input type="email" name="email" style="width:100%;" style="height:100%;" style ="center;"required autocomplete="off"/>
                          </div>
                          </div>

                        

                        <div class="top-row">
                        
                           <div class="field-wrap">
                            <label>
                              City<span class="req">*</span>
                            </label>
                            <input type="text" name="city" style="width:100%;" style="height:100%;" required autocomplete="off"/>
                          </div>
                          
                          
                        
                          <div class="field-wrap">
                            <label>
                              Specialization<span class="req">*</span>
                            </label>
                            <input type="text" name="interest" style="width:100%;" style="height:100%;"required autocomplete="off"/>
                          </div>
                      </div>
                          


                          <div class="top-row">
                          
                           <div class="field-wrap">
                            <label>
                              Experience<span class="req">*</span>
                            </label>
                            <input type="number" name="exper"style="width:100%;" style="height:100%;" required autocomplete="off"/>
                          </div>

                          <div class="field-wrap">
                      
                                <div class="form_row">
                                    <label>Gender<span class="req">*</span>:


                                      </label>


                                      <div class="top-row">
                                        <div class="field-wrap">
                                      
                                            <div class="gender">
                                              <input type="radio" name="gend" value="male" style="padding-left" /> Male <br />

                                                <input type="radio" name="gend" value="female"/> Female
                                            
                                          </div>
                                        </div>
                                    </div>
                                      
                                  
                                    
                                </div>
                            </div>

                          </div>
                          
                          
                          <button type="submit" class="button button-block"/>JOIN US</button>
                          
                            </form>

                            </div>
                            
                            
                            
                          </div><!-- tab-content -->
                          
                        </div> <!-- /form -->
                </div>
            </div>
 
    


                           

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
