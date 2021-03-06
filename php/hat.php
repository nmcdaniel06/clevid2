<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
    $num = $_POST['number'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'info@clevid.com';
		$to = 'nathan@clevid.com';
		$subject = 'Free Consultation';

		$body = "From: $name\n E-Mail: $email\n Number: $num\n Message:\n $message";

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
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    $_POST=array();
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Clevid</title>

    <!-- Bootstrap -->
		<link href="https://fonts.googleapis.com/css?family=Cabin|Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div class="container">

	<!---NavBar--->

	<nav class="navbar navbar-inverse navbar-static-top">
<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Clevid.com</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		<!--leftMenuHere-->
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li> <a href="/">Home</a></li>
			<!--<li><a href="services.php">Services</a></li>-->
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>

		</ul>
	</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>


	<!---endNavBar--->
	<div class="row">

	  <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-8">
	      <img src="pics/logo.png" alt="clevid logo">
	  </div><!--endCol--------------------------->
		</div><!--endRow------------------------------>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12"><?php echo $result; ?>
		    <p id="tline"><b><em>Clever Ideas</em></b> for Your Personal and Business Growth</p>
		  </div><!--endCol---------------------------->
		</div><!--endRow------------------------------>





    <!-------------END---Navbar------------->
