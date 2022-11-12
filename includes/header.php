<?php
	session_start();
	include_once("db_connect.php");
	include_once("functions.php");
	ini_set("display_errors",1);
	error_reporting(E_ERROR);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>
     HandMeDown
    </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">

    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="./css/jquery-ui.css">
    <link href="css/superfish.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/parallax-slider/parallax-slider.css" />
    <script type="text/javascript" src="js/parallax-slider/modernizr.custom.28468.js">
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>

    <script src="js/common-scripts.js"></script>
    <script src="js/wow.min.js"></script>

		<body>
	    <!--header start-->
	    <header class="head-section">
	      <div class="navbar navbar-default navbar-static-top container">
	          <div class="navbar-header">
	              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	              </button>
	              <a class="navbar-brand" href="index.php">H<span>and</span> M<span>e</span> D<span>own</span></a>
	          </div>
	          <div class="navbar-collapse collapse">
	              <ul class="nav navbar-nav">
	                  <li><a href="index.php">Home</a></li>
	                  <li><a href="about.php">About</a></li>
	                  <li><a href="books.php">View Books</a></li>

	                  <?php if($_SESSION['user_details']['user_level_id'] == 3) {?>
	                    <li><a href="request.php">Request New Book/Add Query</a></li>
	                    <li class="dropdown">
	                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
	                      "dropdown" data-toggle="dropdown" href="#">My Administration <i class="fa fa-angle-down"></i>
	                      </a>
	                      <ul class="dropdown-menu">
	                          <li><a href="book.php">Add New Book</a></li>
	                          <li><a href="report-book.php">My Book Report</a></li>
	                          <li><a href="report-book-request.php">My Book Requests</a></li>
	                          <li><a href="report-message.php">My Messages</a></li>
														<li><a href="report-request.php">All Users Book Requests/Queries</a></li>
	                      </ul>
	                  </li>
	                  <?php } ?>
	                  <?php if($_SESSION['user_details']['user_level_id'] == 1) {?>

	                  <li class="dropdown">
	                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
	                      "dropdown" data-toggle="dropdown" href="#">Reports <i class="fa fa-angle-down"></i>
	                      </a>
	                      <ul class="dropdown-menu">
	                          <li><a href="report-book.php">View Book Report</a></li>

	                          <li><a href="report-user.php">System User Report</a></li>




	                          <li><a href="report-request.php">Book Request/Query Report</a></li>
	                      </ul>
	                  </li>
	                  <?php } ?>
						<?php if($_SESSION['login'] == 1) {?>
						<li><a href="change-password.php">Change Password</a></li>
						<li><a href="./lib/login.php?act=logout">Logout</a></li>
						<?php } else { ?>
						<li><a href="./login.php">Login</a></li>
	                    <li><a href="./user.php">Register</a></li>

						<?php }?>
						</ul>
	              </ul>
	          </div>
	      </div>
	    </header>
	    <!--header end-->
