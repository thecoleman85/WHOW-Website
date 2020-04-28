<?php
if($_POST["submit"]) {
    $recipient="schneideralexander78@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["firstname"];
    $senderEmail=$_POST["emailaddress"];
    $message=$_POST["subject"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0" />

		<!-- Tab Title -->
		<title>WHOW</title>

		<!-- Link to CSS -->
		<link rel="stylesheet" href="css/contact.css"/>
	</head>

	<!-- Body and whole page of the website -->
	<body>

		<!-- Header of the page with logo and nav bar (same as the home page) -->
		<header>
			<!-- Logo -->
			<a href="index.html">
				<div id="logo">
					<h1>WHOW</h1>
					<h4>Women Helping Other Women</h4>
				</div>
			</a>

			<!-- Navigation Bar -->
			<nav>
		    	<ul>
		        	<li class="activeMainN"><a href="index.html">Home</a></li>
		        	<li class="activeMainN"><a href="about.html">About us</a></li>
		        	<li class="activeMainN"><a href="impact.html">See The Impact</a></li>
		        	<li class="activeMainN"><a href="faq.html">FAQ</a></li>
		        	<li class="activeMainN"><a href="contact.html">Contact</a></li>
		    	</ul>
		    </nav>
		</header>

		<!-- Main content of page -->
		<main>
			<div class="container">
      <form method="post" action="contact.php">

      	<label for="fname">First Name</label>
    		<input type="text" id="fname" name="firstname" placeholder="Your name..">

    		<label for="lname">Last Name</label>
    		<input type="text" id="lname" name="lastname" placeholder="Your last name..">

				<label for="email">Email Address</label>
				<input type="text" id="email" name="emailaddress" placeholder="Your email address..">

    		<textarea id="subject" name="subject" placeholder="Your Message Here." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
		</main>

		<!-- Footer / end of page (same as home page) -->
		<footer>
			<!-- Footer Navigation -->
			<div class="footer-nav">
		        <p><a href="index.html">Home</a> | <a href="about.html">About Us</a> | <a href="impact.html">See The Impact</a> | <a href="faq.html">FAQ</a> | <a href="contact.html">Contact</a></p>
		    </div>

		    <!-- Copyright Section -->
		    <div class="copyright">
		    	<p><em>Copyright &copy; 2020 WHOW</em></p>
	      	</div>
		</footer>

	</body>

</html>
