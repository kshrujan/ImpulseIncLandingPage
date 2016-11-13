<?php
		$errName="";
		$errEmail="";
		$errMessage="";
		$result="";
		$name="";
		$email="";

	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Impulse Contact Form'; 
		$to = 'shrujank@gmail.com'; 
		$subject = 'Message from Imuplse Contact Form ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage ) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will try to get back to you as soon as possible.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>




<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Landing page for Impulse Batteries." content="">
    <meta name="Shrujan A Kalidindi" content="">

<title>Impulse Batteries</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-social.css">

	<!-- Custom Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="bootstrap/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="bootstrap/css/animate.min.css" type="text/css">

    <!-- Impulse Specific CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/animate.css">
</head>


<body id="page-top">
	<nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid"> <!-- The container fluid class spans the entire width of the viewport. (Designed with mobile phones in mind). One could use "container", which would create a responsive fixed width container. -->
			<div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-bar-collapse"> 
                <!-- 1) data-toggle determines binds the button to an event. (basically tells Bootstrap what to do)
                2) data-target sets CSS selector that the event will occur on. (basically tells Bootstrap which element is being acted on) -->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <!-- These span elements allow Bootstrap to replace the nav bar with the hamburger icon (mobile menu) when it detects a mobile device. -->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll nav-bar-logo-text" href="#page-top"><!-- <img src="images/logo.png" alt="Impulse"> -->Impulse Inc.</a>
            </div>

            <!-- Navigation bar elements. -->
            <div class="collapse navbar-collapse" id="main-nav-bar-collapse">
            	<ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#mission">Our Mission</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#product">Our Product</a>
                    </li>
                    <li>
                    	<a class="page-scroll" href="#news">News</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Our Team</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    
                </ul>
            </div>
            <!-- End of Container Fluid -->
		</div>
  <!-- End of Navbar -->
	</nav>

	<header>
		<div class="header-content">
            <div class="header-content-inner col-lg-8 col-lg-offset-2 wow fadeIn">
                <h1>Next-Gen Battery Technology</h1>
                <hr>
                <p>Impulse is a company created for the sole purpose of creating the battery of the future. One that is not only cheaper than lithium ion alternative, but also more efficient. Are you ready to join us?</p>
                <a href="#mission" class="btn btn-primary btn-xl  page-scroll">Find Out More</a>
                <a href="#contact" class="btn btn-default btn-xl  page-scroll">Contact Us</a>
            </div>
        </div>
	</header>

	<section class="bg1" id="mission">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Our Mission Statement</h2>
					<hr class="hr-light">
					<div class="narrative wow fadeIn">
						<p>
						 We created the company with a single goal in mind; to change the world by developing the next generation battery. Why? Due to the overwhelming evidence supporting global warming, it has become increasingly evident that we must find a more sustainable power source soon. Our team started by taking the time to understand current battery technology and how it has progressed to this point. What we gathered is that while lithium ion cells are revolutionary, they are also expensive.
						</p>
						<p>
						While we expect our initial prototype to be designed more for the everyday consumer, in the future we hope to become the main supplier of battery packs for electric vehicles. The cost of the battery pack is by far one of the main reasons why electric vehicles cost as much as they do. We intend to change that by researching and experimenting with various substances that would not only be cheaper to work with, but also be more energy dense at the same time.
						</p>
						<p>
						Everything from phones to cars have been getting smarter, so why haven't the batteries? At Impulse, we believe that the next-gen batteries must not only make use of new compounds, but also utilize cutting edge software to increase the battery's lifespan. Impulse will develop open source software that can be used in conjunction with the battery to analyze how it's used. In essence, our software seeks to allow batteries to predict how much power the user needs before the user actually asks for it.
						</p>
						<a href="#product" class="btn btn-default btn-xl page-scroll"><img src="images/down-arrow.png" height="10px"></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg2" id="product">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h3>Our Product</h3>
					<a href="#news" class="btn btn-default btn-xl page-scroll"><img src="images/down-arrow.png" height="10px"></a>
				</div>
				<div class="product-summary wow fadeIn">
					
				</div>
			</div>
		</div>
	</section>
	

	<section class="bg5" id="news">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h6>News</h6>
					<hr>
				</div>
				<div class="news-content wow fadeIn">
					<div class="news-spacing">
						<div class="news-container">
							<div class="news-company-banner">
								Business Insider
							</div>
							<div class="news-excerpt">
								"...The core problem here isn't actually that daunting number — it's the power threshold that Li-ion is now approaching, in terms of battery chemistry. Simply put, the chemistry of Li-ion can't ultimately provide the range that a very fuel-efficient, all-gas-powered or hybrid-gas-electric vehicle can.."
							</div>
							<div class="news-link">
								<a href="http://www.businessinsider.com/tesla-change-most-advanced-feature-2016-5" class="btn btn-link">Read More</a>
							</div>				
						</div>
					</div>

					<div class="news-spacing">
						<div class="news-container">
							<div class="news-company-2-banner">
								Nature.com
							</div>
							<div class="news-excerpt">
								"What's holding back the mass acceptance of electric cars is really the price rather than the energy density,” he says. So Wilcke now favours a cheaper breathing battery based on sodium. Theory predicts that sodium–oxygen (Na–O) batteries could provide only half the energy density of Li–O, but that is still.."
							</div>
							<div class="news-link">
								<a href="http://www.nature.com/news/the-rechargeable-revolution-a-better-battery-1.14815" class="btn btn-link">Read More</a>
							</div>
						</div>
					</div>
				</div>	
			</div>			
			<a href="#team" class="btn btn-default btn-xl page-scroll"><img src="images/down-arrow.png" height="10px"></a>
		</div>
	</section>

	<section class="bg3" id="team">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h4>Our Team</h4>
					<hr class="hr-light">
				</div>
				<div class="meet-the-team text-center wow fadeIn">
						<div class="team-spacing">
								<div class="person">
									  <img src="images/shrujan-headshot_photo.jpg" alt="" class="img-circle">
									  <div class="person-name">
									  	Shrujan A Kalidindi
									  </div>
									  <div class="company-title">
										  	Founder & CEO
									  </div>
									   <div class="person-bio">
									   Previously worked as an intern for Adobe Systems Inc to develop software to increase employee productivity. Namely, worked on E.V.A app to help employees locate and reserve open charging spots for their EV's.  
										</div>
								</div>
								<hr class="dark">
								<div class="info" id="more-info-team">
									<a class="btn btn-social-icon btn-linkedin info-btn" href="https://www.linkedin.com/in/shrujan-kalidindi-62098978">
									    <span class="fa fa-linkedin"></span>
									 </a>
									 <a class="btn btn-social-icon btn-facebook info-btn" href="https://www.facebook.com/shrujan.kalidindi">
									    <span class="fa fa-facebook"></span>
									 </a>
									 <a class="btn btn-social-icon btn-google info-btn" data-toggle="modal" data-target="#shrujan-email-modal">
									    <span class="fa fa-google"></span>
									 </a>
										<div class="modal fade" id="shrujan-email-modal" role="dialog">
										    <div class="modal-dialog">
										      <div class="modal-content">
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <div class="modal-title">Contact Shrujan</div>
										        </div>
										        <div class="modal-body">
										          <p>Email: shrujank@gmail.com</p>
										        </div>
										        <div class="modal-footer">
										          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										        </div>
										      </div>
										    </div>
										  </div>
								</div>
						</div>
						<div class="team-spacing">
								<div class="person">
									  <img src="images/person-icon.png" alt="" class="img-circle">
									   <div class="person-name">
									  	Max Schwartz
									  </div>
									  <div class="company-title">
										  	Co-founder & CTO
									  </div>
									   <div class="person-bio">
									   		
										</div>
								</div>
								<hr class="dark">
								<div class="info" id="more-info-team">
									<a class="btn btn-social-icon btn-linkedin info-btn" href="">
									    <span class="fa fa-linkedin"></span>
									 </a>
									 <a class="btn btn-social-icon btn-facebook info-btn" href="">
									    <span class="fa fa-facebook"></span>
									 </a>
									 <a class="btn btn-social-icon btn-google info-btn" data-toggle="modal" data-target="#max-email-modal">
									    <span class="fa fa-google"></span>
									 </a>
										<div class="modal fade" id="max-email-modal" role="dialog">
										    <div class="modal-dialog">
										      <div class="modal-content">
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <div class="modal-title">Contact Max</div>
										        </div>
										        <div class="modal-body">
										          <p>Email: </p>
										        </div>
										        <div class="modal-footer">
										          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										        </div>
										      </div>
										    </div>
										  </div>
								</div>
						</div>
						<div class="team-spacing">
								<div class="person">
									  <img src="images/person-icon.png" alt="" class="img-circle">
									   <div class="person-name">
									   		TBD
									  </div>
									  <div class="company-title">
										  	Product Manager
									  </div>
									   <div class="person-bio">

										</div>
								</div>
								<hr class="dark">
								<div class="info" id="more-info-team">
									<a class="btn btn-social-icon btn-linkedin info-btn" href="">
									    <span class="fa fa-linkedin"></span>
									 </a>
									 <a class="btn btn-social-icon btn-facebook info-btn" href="">
									    <span class="fa fa-facebook"></span>
									 </a>
									 <a class="btn btn-social-icon btn-google info-btn" data-toggle="modal" data-target="#pm-email-modal">
									    <span class="fa fa-google"></span>
									 </a>
										<div class="modal fade" id="pm-email-modal" role="dialog">
										    <div class="modal-dialog">
										      <div class="modal-content">
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <div class="modal-title">Contact TBD</div>
										        </div>
										        <div class="modal-body">
										          <p>Email: </p>
										        </div>
										        <div class="modal-footer">
										          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										        </div>
										      </div>
										    </div>
										  </div>
								</div>
						</div>
				</div>
				<a href="#contact" class="btn btn-default btn-xl page-scroll"><img src="images/down-arrow.png" height="10px"></a>
			</div>
		</div>
	</section>


	<section class="bg4" id="contact"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center wow fadeIn">
					<h5>Contact Us</h5>
					<hr>
					<form class="form-horizontal text-center" role="form" method="post" action="index.php">
						<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control text-input-size-md" id="name" name="name" placeholder="First & Last Name" value="">
							<?php echo "<p class='text-white'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control text-input-size-md" id="email" name="email" placeholder="example@domain.com" value="">
							<?php echo "<p class='text-white'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control text-input-size-md" rows="4" name="message"></textarea>
							<?php echo "<p class='text-white'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</section>



	<!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="bootstrap/js/jquery.easing.min.js"></script>
    <script src="bootstrap/js/jquery.fittext.js"></script>
    <script src="bootstrap/js/wow.min.js"></script>

    <!-- Impulse Javascript -->
    <script src="bootstrap/js/impulse.js"></script>
</body>




</html>
