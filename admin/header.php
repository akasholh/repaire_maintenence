<?php
// Check if user is logged in, otherwise redirect to login page
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: ../login.php");
    exit;
}?><!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Inance</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
  
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="../js/custom.js"></script>
  <!-- Google Map -->
  <style>
     .hidden {
        display: none;
    }
    .contact_section input{
      color:black;
    }
  </style>

   <script>
    $(document).ready(function() {
    // Get the current URL path and split it by '/'
    var path = window.location.pathname;
    var pathParts = path.split("/");

    // Get the last part of the path (the page/file name)
    var currentPage = pathParts[pathParts.length - 1];

    // Add the 'active' class to the corresponding link in the navigation
    // Example: Assuming your navigation links have IDs or classes, select them accordingly
    $('.collapse ul li a').each(function() {
       
        var href = $(this).attr('href');
       
        // Check if the current link's href attribute ends with the currentPage
        if (href.endsWith(currentPage)) {
            $(this).parent().addClass('active');
        }
    });
});
    </script>
</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
		<div class="header_bottom">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg custom_nav-container ">
					<a class="navbar-brand" href="../index.html">
					<span>
						Inance
					</span>
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class=""> </span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ">
						<li class="nav-item ">
						<a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="service_list.php">Services list</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="contact-list.php">Contact list</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
						</li>
					</ul>
					</div>
				</nav>
        	</div>
      </div>
    </header>
    <!-- end header section -->
</div>
<section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
      <h2> Dashboard:- Welcome <?php echo $_SESSION['fullname']; ?></h2>
      </div>
	  <div class="row">
			        
			        