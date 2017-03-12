<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/season-change.jpg" type="image/x-icon">
		<title></title>

		
	    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	    <!-- <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700' rel='stylesheet' type='text/css'> -->
	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600' rel='stylesheet' type='text/css'>
	    
	   
	    
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>

		<style type="text/css"> 
  /*.button { 
  			width: 150px;
   			padding: 10px; 
   			background-color: #FF8C00; 
   			box-shadow: -8px 8px 10px 3px rgba(0,0,0,0.2); 
   			font-weight:bold; text-decoration:none; } */
   			#cover{ 
   				position:fixed; 
   				top:0; 
   				left:0; 
   				background:rgba(0,0,0,0.6); 
   				z-index:5; 
   				width:100%; 
   				height:100%; 
   				display:none; } 
   				#loginScreen 
   				{ 
   					height:380px; 
   					width:340px; 
   					margin:0 auto; 


   					position:fixed;
            margin-left: 900px;
            margin-top: 70px; 
   					z-index:10; display:none; 
   					background: #46a1b4; 
   					border:5px solid black; 
   					border-radius:10px; 
            color: black;
            font-size: 15px;
            text-align: center;
            font-weight: bolder;

   					}
   					 #loginScreen:target, 
   					 #loginScreen:target + #cover{ display:block; opacity:2; } 
   					 .cancel { 
   					 			display:block; 
   					 			position:absolute; 
   					 			top:3px; 
   					 			right:2px; 
   					 			background:rgb(245,245,245); 
   					 			color:black; 
   					 			height:25px; 
   					 			width:25px; 
   					 			font-size:20px; 
   					 			text-decoration:none; 
   					 			text-align:center; 
   					 			font-weight:bold; 
   					 		} 
	</style>


	<!-- script for blocking access for pages without login -->

	<script type="text/javascript">
      
	function showAlert(){
      alert('Login First...');
      window.location.href='home.php';
	  }
	</script>

	</head>

	<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	
		
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  				<div class="container-fluid">
    				<!-- Brand and toggle get grouped for better mobile display -->
    				<div class="navbar-header col-lg-4">
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
				    <div class="col-lg-6">
				    	<ul class="nav navbar-nav navbar-right">
					        <li class="active"><a href="#">Home</a></li>

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


					       <!--  <li><a href="services.php">Services</a></li> -->
                            <li><a onclick="showAlert()">Join Us</a></li>
					 
					       
					        
					        
					        <!--<li><a href="blog.php">Blog</a></li>-->
						
							<li><a href="help.php">Help</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
							
							</div>

                            
							<div class="col-md-1 top-mar ">
							<p><button type="button" class="btn btn-default btn-sm gly- "><span class="glyphicon glyphicon-user "><a href="#loginScreen"></span> LOG IN</button></a>
							</div>


							<div class="col-md-1 top-mar">
							<p><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-user"><a href="user_signup.php"></span> SIGN UP</button></a>
							</div>
						
								
							
							</ul>
							</div>
							
							
							



				    </div><!-- navbar-collapse -->
				</div><!-- container-fluid -->
			</nav>


			<div align="right"> 
  		<br><br>
  	</div> 
  	<div id="loginScreen"> <a href="#" class="cancel">&times;</a> 

  	 <form action = "login.php" method = "POST">
  	 <p></p><br/>
  	 <p>LOGIN INFORMATION</p><br/>
                  <label>Email  :</label><input type = "email" name = "email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Login " name="submit"/><br />
               </form>
       </div>


  	<!-- <form>
  	 <p></p><br/>
  	 <p>LOGIN INFORMATION</p><br/>
              <P><span class="title">Username</span> <input name="" type="text" /></P>
                <P><span class="title">Password</span> <input name="" type="password" /></P>
                 
                <P><input name="" type="button" value="Login" /></P>
            </form>-->
  	 
  	<div id="cover" > 
  	</div> 

		
		<section class= "heading-slider">
			<div id="starting-slider" class="owl-carousel owl-theme">
 
			  	<div class="item">
			  		<div class="slider-1">
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>We're Professional</h1>
			  							<p>Team of best Doctors and Health Experts</p>
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="item">
			  		<div class="slider-2">
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>We're Caring</h1>
			  							<p>Our Staff uderstands your problems</p>
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="item">
			  		<div class="slider-3">
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>We're Responsible</h1>
			  							<p>Feel secure with us every moment</p>
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="item">
			  		<div class="slider-5">
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>We have Advanced Technology</h1>
			  							<p>Well equipped laboratories</p>
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="item">
			  		<div class="slider-6">
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>World Class Treatment</h1>
			  							<p>Best facilities</p>
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			 
			</div>
		</section>

		<section class= "starting-text">
      		<div class="container">
      			<div class="row">
      				<div class="welcome">
        				<h2 class="welcome-title">Welcome To Our Health Care Services</h2>
        				 <div class="row">
  <div class="col-md-2">
    </div>  

    <div class="col-md-2">
    <div class="hovereffect">
    <img class="img-responsive" src="assets/img/bloodbank.png" alt="">
            <div class="overlay">
                <h2 left-padding 5px><a href="bloodbank.php">Blood Bank</a></h2>
            </div>
            </div>
    </div>

    <div class="col-md-2">
    <div class="hovereffect">
      <img class="img-responsive" src="assets/img/labtest.png">
       <div class="overlay">
                <h2><a href="labtest.php">Lab  Test</a></h2>
            </div>
            </div>      
    </div>

    <div class="col-md-2">
    <div class="hovereffect">
      <img class="img-responsive" src="assets/img/consultdoctor.png">
      <div class="overlay">
        <h2><a href="askdoctor.php">Ask Doctor</a></h2>
      </div>
      </div>
    </div>

    <div class="col-md-2">
    <div class="hovereffect">
      <img class="img-responsive" src="assets/img/findhospital.png">
      <div class="overlay">
        <h2><a href="findhospital.php">Find Hospital</a></h2>
      </div>
      </div>
      
    </div>
        				
		      	
        			</div>
        		</div>
      		</div>
	  	</section>


		<section id= "services">
			<div class= "container">
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<h2 class= "headline text-center">
							<!--Why Choose Us
						</h2>
						<p class="sub-headline text-center">
							Lorem ipsum dolor sit amet, consectetur
						</p>-->
					</div>
				</div>
				
				<div class= "row">
					<div class= "col-lg-3 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/donor1.jpg" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">24*7 Service</h4>
								<p></p>
								<a href="services.php" class="rm-btn btn btn-primary">
										Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class= "col-lg-3 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/donation2.jpg" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Transplant Service</h4>
								<p></p>
								<a href="services.php" class="rm-btn btn btn-primary">
										Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class= "col-lg-3 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/service3.jpg" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Call Ambulance</h4>
								<p></p>
								<a href="callambulance.php" class="rm-btn btn btn-primary">
										Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class= "col-lg-3 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="assets/img/service1.jpg" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading">Join Us</h4>
								<p></p>
								<a onclick="showAlert()" class="rm-btn btn btn-primary">
										Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</section>






		<section id= "testimonial" class="text-center">
			<div class="testimonial-wrapper">
				<div class="container">
		    		<div class="row client-content text-center">

		    		<div class="col-md-3">
		    		</div>
		    			<div class="col-md-6">
		    				<div class="row">
								<h1>Testimonial</h1>
							</div>
							<div class="row">
								<div class="sub-headline">
									<p>What Our Patients Say About Us</p>
								</div>
							</div>
		    				
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  

		  					<!-- Wrapper for slides -->
		  					<div class="carousel-inner" role="listbox">
		    					<div class="item active">
		      						<div id="client-speech">
										<div class="item">
											<div class="row">
												<div class="col-md-12">
													<i class="fa fa-quote-left"></i>
												</div>
												<div class="col-md-8 col-md-offset-2">
													<p class="client-comment text-center">
														The whole staff was very cordial and took take care of each and every requirement. 
													</p>
												</div>
												<div class="col-md-12">
													<i class="fa fa-quote-right"></i>
												</div>
												<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
													<img class="img-circle img-responsive center-block" src="assets/img/client3.jpg" alt="Image">
												</div>	
											</div>
											<div class= "row text-center">
												<p class="client-name text-center">Julia Doe</p>
											</div>
										</div>
									</div>
		   						</div>
		    				<div class="item">
		      				<div id="client-speech">
										<div class="item">
											<div class="row">
												<div class="col-md-12">
													<i class="fa fa-quote-left"></i>
												</div>
												<div class="col-md-8 col-md-offset-2">
													<p class="client-comment text-center">
														A quick and ontime ambulance service saved mylife. I was given first aid in the ambulance itself.
													</p>
												</div>
												<div class="col-md-12">
													<i class="fa fa-quote-right"></i>
												</div>
												<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
													<img class="img-circle img-responsive center-block" src="assets/img/client1.jpg" alt="Image">
												</div>	
											</div>
											<div class= "row text-center">
												<p class="client-name text-center">John Doe</p>
											</div>
										</div>
									</div>
		    					</div>
		    					<div class="item">
		      						<div id="client-speech">
										<div class="item">
											<div class="row">
												<div class="col-md-12">
													<i class="fa fa-quote-left"></i>
												</div>
												<div class="col-md-8 col-md-offset-2">
													<p class="client-comment text-center">
														Panacea provides us best available option in terms of doctors, hospitals and other health services.
													</p>
												</div>
												<div class="col-md-12">
													<i class="fa fa-quote-right"></i>
												</div>
												<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
													<img class="img-circle img-responsive center-block" src="assets/img/client4.jpg" alt="Image">
												</div>	
											</div>
											<div class= "row text-center">
												<p class="client-name text-center">Jane Doe</p>
											</div>
										</div>
									</div>
		    					</div>
		  					</div>

  						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <i class="fa fa-angle-left fa-3x"></i>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <i class="fa fa-angle-right fa-3x"></i>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
		    			</div>
		    			</div>
		    		</div> <!--  client-content  -->
		    	</div>
			</div>	
	    </section>	<!-- testimonial -->


		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<ul class="text-center contact">
				        	<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Share in Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
							</li>
							<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Share in Twitter" class="twitter"><i class="fa fa-twitter"></i></a>
							</li>
							<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Share in Google +" class="google-plus"><i class="fa fa-google-plus"></i></a>
							</li>
							<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Share in Instagram" class="instagram"><i class="fa fa-instagram"></i></a>
							</li>
							<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Share in Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a>
							</li>
							<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Connect with Skype" class="skype"><i class="fa fa-skype"></i></a>
							</li>
				      	</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copy-right-text text-center">
							&copy; Copyright 2016, Panacea Health Services
						</div>
					</div>
				</div>
			</div>
		</section>

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>



		<script>
      		new WOW().init();
		</script>

		<script>
			$(document).ready(function() {
  				$("#starting-slider").owlCarousel({
  					autoPlay: 3000,
      				navigation : false, // Show next and prev buttons
      				slideSpeed : 700,
      				paginationSpeed : 1000,
      				singleItem:true
  				});
			});
		</script>

		<script type="text/javascript">
		 $(document).ready(function(){
		 	if(document.URL.indexOf("#")==-1)
		 	{
		 		url=document.URL+"#";
		 		location="#";

		 		location.reload(true);
		 	}
		 });
		 </script>


		<script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>



	</body>
</html>