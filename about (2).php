<?php
	include('connections/cn.php');

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		if($name=="" || $email=="" || $message=="" )
		{
			$msg="All fileds are Required.";
		}
		else{
		
				$ins=mysql_query("Insert into aboutus (`name`,`email`,`subject`,`message`) values ('$name','$email','$subject','$message')");
		}


	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Urban Beatz | Home :: Urban Beatz</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"></head>
	
<body>


<?php  include"header.php";?>
<!-- about -->
<div class="about">
<div class="container">
			<div class="w3_agile_about_grids">
				<div class="col-md-6 w3_agile_about_grid_left">
					<img src="images/5.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 w3_agile_about_grid_right">
					<h3>About Urban Beatz</h3>
					<h4>Music Album</h4>
					<p>We bring a world class professional
						service at a cost effective price and we never stop working till our client is satisfied.
						Coming from different backgrounds, our team has a unique take and taste on the task
						at hand and we are not afraid to push ourselves inorder to achieve excellence in the
						eyes of our clients. </span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> 
</div>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3l_breadcrumbs_left">
				<ul>
					<li><a href="index.php">Home</a><i>/</i></li>
					<li>Contact Us</li>
				</ul>
			</div>
			<div class="w3_agile_breadcrumbs_right">
				<h2>Mail Us</h2>
				<p>Urban Beatz Present.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- mail -->
	
	<div class="latest-albums">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Send Us An <span>Email</span></h3>
			<p class="w3_agileits_para">Urban Beatz Present.</p>
			<div class="wthree_latest_albums_grids gallery">
				<div class="col-md-8 agile_mail_grid_left">
					<form action="about.php" method="post">
						<input type="text" name="name" placeholder="Name" required="Enter your Name">
						<input type="email" name="email" placeholder="Email" required="Enter your Email Address">
						<input type="text" name="subject" placeholder="Subject" required="Enter subject">
						<textarea name="message" placeholder="Your message here..." required="Enter the Message"></textarea>
						<input type="submit" name="submit" value="Submit Now" >
					</form>
				</div>
				<div class="col-md-4 w3_agileits_mail_grid_right">
					<div class="wthree_mail_grid_right">
						<img src="images/3.png" alt=" " class="img-responsive" />
						<h4>Urban Beatz <span>Present</span></h4>
						<ul class="agileinfo_phone_mail">
							<li><i class="fa fa-home" aria-hidden="true"></i>Address: Perth, Australia.</li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: +61405545786</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
						<ul class="social_agileinfo">
							<li><a target="_blank" href="https://en-gb.facebook.com/login/" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a target="_blank" href="https://twitter.com/login?lang=en" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a target="_blank" href="https://www.instagram.com/accounts/login/?hl=en" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a target="_blank" href="https://www.google.com/gmail/about/#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //mail -->

    <!-- <div class="w3_agile_map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.387390381621!2d77.43463871442411!3d23.228986084848934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c42432745570d%3A0x3df9c3451df70470!2sModi+Heights%2C+Zone-II%2C+Near+Sudarshan+Palace+Hotel%2C+Zone-II%2C+Maharana+Pratap+Nagar%2C+Bhopal%2C+Madhya+Pradesh+462023!5e0!3m2!1sen!2sin!4v1543820506955" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	</div>
-->
<?php include"footer.php"; ?>


</body>
</html>