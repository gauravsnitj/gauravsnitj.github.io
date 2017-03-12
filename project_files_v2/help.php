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
					        <li ><a href="home.php">Home</a></li>
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
							<li class="active"><a href="help.php">Help</a></li>
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


                    
                    
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                
                <!-- /.row -->

                <div class="row title-logo">
                     

                      <div class="col-md-12">
                            <div class= "appointment">
                            
                                <div class="header text-center">
                                    <h2>HELP</h2>
                                    <a  class="number">
                                        <i class="fa fa-book fa-fw"></i>
    
                                    </a>
                                    <span class="or"></span>
                                </div>


   

                            <div class="row">
                               <div class="col-lg-12">

                               <p class="question-text">Q. WHAT IS PANACEA HEALTH SERVICES ?</p>
                               <p class="answer-text">PANACEA HEALTH SERVICES is a customer oriented services provider in the field heelath and medicare. It acts as a link between the customers and the health services. Customers can avail top world class facilitie just by clicking and submitting their information.</p><br/>

                               <p class="question-text">Q. WHAT SERVICES ARE PROVIDED BY PANACEA HEALTH SERVICES ?</p>
                               <p class="answer-text">The list of services provided are: <br/>
                               1.Find Hospital<br/>
                               2.Ask Doctor Online<br/>
                               3.Call Ambulence<br/>
                               4.Blood Bank<br/>
                               5.Find Pathology Lab<br/>
                               6.Book Appointment<br/>
                               </p><br/>

                                <p class="question-text">Q. HOW THESE SERVICES CAN BE AVAILED ?</p>
                               <p class="answer-text">The facilities can be availed by becoming a member. There is signup option through which the customers can become part of this website and avail the facilies. Though some of the facilities like find hospital, find lab etc are free without logging in.</p><br/>


                               <p class="question-text">Q. WHO CAN JOIN AS SERVICE PROVIDERS ?</p>
                               <p class="answer-text">The doctors and medical experts with required experience can join us by choosing JOIN US option. They will automatically be added in the list of our service providers.</p><br/>
                               <br><br><br>

                              <p class="question-text">Types Of Doctors:<br>
                              <p class="question-text">Allergist:
                              <p class="answer-text">Allergists work with a wide variety of patients who suffer from issues related to allergies, such as hay, fever, or asthma. They are specially trained to treat these issues and assist patients in dealing with them and what to do when they are encountered.
                                <br><br>
                              <p class="question-text">Audiologist:
                              <p class="answer-text">Audiologists specialize in ear related issues, particularly with regard to hearing loss in children. These doctors work with deaf and mute children to assist in their learning to communicate. They typically work in hospitals, physicians’ offices, audiology clinics, and occasionally in schools.<br><br>
                              
                              <p class="question-text">Cardiologist:
                              <p class="answer-text">Cardiologists specify in the study and treatment of the heart and the many diseases and issues related to it. They assess the medical and family history of patients to determine potential risk for certain cardiovascular diseases and take action to prevent them.  <br><br>
                              
                              <p class="question-text">Dentist:
                              <p class="answer-text">Dentists work with the human mouth, examining teeth and gum health and preventing and detecting various different issues, such as cavities and bleeding gums. Typically, patients are advised to go to the dentist twice a year in order to maintain tooth health.<br><br> 
                              
                              <p class="question-text">Dermatologist:
                              <p class="answer-text">Dermatologists study skin and the structures, functions and diseases related to it. They examine patients to check for such risk factors as basal cell carcinoma (which signals skin cancer) and moles that may eventually cause skin disease if not treated in time.<br><br>

                              <p class="question-text">Epidemiologist:
                              <p class="answer-text">Epidemiologists search for potential diseases that may crop up and cause a great deal of problems for a population and look for vaccinations for current terminal diseases, such as cancer and HIV/AIDS.<br><br>
  
                              <p class="question-text">Gynecologist:
                              <p class="answer-text">Gynecologists work with the female reproductive system to assess and prevent issues that could potentially cause fertility issues. Female patients are typically advised to see a gynecologist once a year.<br><br>
                              
                              <p class="question-text">Neonatologist:
                              <p class="answer-text">Neonatologists care for newborn infants to ensure their successful entry into a healthy and fulfilling life. The focal point of their examinations is on premature and critically ill infants who require immediate treatment at the risk of fatal consequences.<br><br>

                              <p class="question-text">Obstetrician:
                              <p class="answer-text">Obstetricians work in a particular area of gynecology that focuses on neonatal care and childbirth. They also perform other operations related to the female reproductive system including c-sections, hysterectomies, and surgical removal of ovarian tumors.  <br><br>

                                <p class="question-text">Pediatrician:
                              <p class="answer-text">Pediatricians work with infants, children, and adolescents regarding a wide variety of health issues, ranging from the common cold to severe conditions. They make their work environments highly “kid-friendly”, often featuring a range of toys and bright colors.<br><br>

                                <p class="question-text">Physiologist:
                              <p class="answer-text">Physiologists study the states of the human body, including emotions and needs. They particularly focus on the functions of the human body to assess if they are working correctly and attempt to determine potential problems before they become an issue.<br><br>

                                <p class="question-text">Psychiatrist:
                              <p class="answer-text">Psychiatrists, who occupy a more prevalent place in the research field than the medical field, study behavior and mental processes. They often work with patients in one-on-one sessions to alleviate mental illnesses and behavioral disorders.<br><br>
                               

                                

                               </div>


                            
                                    
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
