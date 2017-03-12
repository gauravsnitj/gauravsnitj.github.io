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

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/signinpop.css">
     <link rel="stylesheet" type="text/css" href="css/infopop.css">

    <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- script for blocking access for pages without login -->

<script type="text/javascript">
      
    function showAlert(){
      alert('Login First...');
      window.location.href='home.php';
  }
</script>
    

</head>

<body>

<div align="center"> 
        
    </div> 
    <div id="loginScreen"> <a href="#" class="cancel">&times;</a> 


     <form action = "login.php" method = "post">
     <p></p><br/>
     <p>LOGIN INFORMATION</p><br/>
                  <label>Email  :</label><input type = "email" name = "email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit " name="submit"/><br />
               </form>
               
    </div> 
    <div id="cover" > 
    </div> 




    <div align="center"> 
        
    </div> 
    <div id="infoScreen"> <a href="#" class="cancel">&times;</a> 

<div class="table-body">
                             
<table>
<tr>
<th>Hospital Name</th>
<th>Address</th>

</tr>
<tr>
<td>Guru Nanak Mission Hospital</td>
<td>Mahavir Marg, Civil Line, Jalandhar</td>
</tr>
<tr class="even">
<td>Johal Hospital</td>
<td>Hoshiarpur Road, Rama Mandi, Jalandhar</td>
</tr>
<tr>
<td>PIIMS</td>
<td>Garha Road, Jalandhar</td>
</tr>
<tr class="even">
<td>Thind Eye Hospital</td>
<td>Mall Road, Model Town,Jalandhar</td>

</tr>

<tr>
<td>Patel Hospital</td>
<td>Civil Lines,Jalandhar</td>
</tr>

<tr>
<td>BBC Heart Care Hospital</td>
<td>Lajpat Nagar,Jalandhar</td>
</tr>

<tr>
<td>Oxford Hospital</td>
<td>Nakodar Chowk,Jalandhar</td>
</tr>

</table>

</div>

     
    </div> 
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
                                <li><a onclick="showAlert()">Appointment</a></li>
                                <li><a href="labtest.php">Lab Test</a></li>
                                <li><a href="callambulance.php">Call Ambulance</a></li>
                                <li><a href="bloodbank.php">Blood Bank</a></li>
                                <li><a href="services.php">Services</a></li>
                                </ul>
                            </li>
                            <li><a onclick="showAlert()">Join Us</a></li>
							<li><a href="help.php">Help</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
							<li><p><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-user"><a href="#loginScreen"></span> LOG IN</button></a></li>
							<li><a></a></li>
							<li><p><button type="button" class="btn btn-default btn-sm gly-"><span class="glyphicon glyphicon-user "><a href="user_signup.php"></span> SIGN UP</button></a></li>
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
                        <a onclick="showAlert()"><i class="fa fa-fw fa-stethoscope"></i> Appointment</a>
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
                        <a onclick="showAlert()"><i class="fa fa-fw fa-file"></i> Join Us</a>
                    </li>





                   
                    
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                 <!-- /.row -->

                 <div class="row">
    <div class="col-md-12">
      <img class="img-responsive title-logo" src="assets/img/hospitalpic2.jpg" alt="mainpic">
    </div>
  </div>


  <div class="row title-logo">
                      <div class="col-lg-2">
                      </div>

                      <div class="col-md-8">
                            <div class= "appointment">
                            
                                <div class="header text-center">
                                    <h2>FIND HOSPITAL</h2>
                                    <a  class="number">
                                        <i class="fa fa-building "></i>
    
                                    </a>
                                    <span class="or"></span>
                                </div>


   

                            <div class="row">
                                    <form method="post" action="#">
                                        <div class= "form">
                                        <div class="col-lg-6">
                                            <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-1">
                                                <input class="form-control" type="text" placeholder="Your City *" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                                <input class="form-control" type="text" placeholder="State *" required>
                                            </div>
                                            </div>

                                           
                                            
                                           
                                        </div>
                                        

                                        
                                            

                                    


                                       <!-- <div class="alert alert-success alert-dismissable">

                                            <button type="button" class="close" data-dismiss="alert"
                                                                 aria-hidden="true">
                                                               &times;
                                                      </button>
                                             Success! Well done its submitted.
                                                   </div>-->

                                                   <p><button type="button" class="btn btn-default btn-sm but-pad1"><a href="#infoScreen"> Submit</button></a>
                                                  
                                        
                                         <!--<input class="btn btn-primary send but-pad1 " " type="submit" value="Submit"/>-->
                                    
                                         </form>
                             </div>

                                       
                                       


                                        
                                   
                        
                                <!-- end of form -->
                            </div><!-- end of appointment-->
    
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
