<?php

/** ------------------------------------------------
	Project Name: Paypal Website Designed Cloned
	Author : 	  Obodugo Prince Rapheal (Kofacts)
	Date : 		  18 Nov. 2016 9:35
	Disclaimer:   The Sole aim of this Project is to get my hands dirty with frontend, 
				  Nothing else other than this.
	Technologies: Bootstrap CSS Framework.
	------------------------------------------------
**/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Paypal Website Cloned!</title>
	<!-- Link all stylesheets and JS files -->
	<link rel="stylesheet" type="text/css" href="./assets/inc/bs/css/bootstrap.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,300" type="text/css" >
	<script type="text/javascript" src="./assets/inc/bs/js/bootstrap.js"></script>


	<!-- Beginning of Header Section for Navigation -->
</head>
	<section style="background:white; color:white; height:64px; font-family: 'Roboto';">
		<header class="navbar navbar-default" style="background:transparent; border:none; border-radius:none; color:white; margin-bottom:0px;">
			<div class="container" style="background-color:white;">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
						<!-- This would be in a row -->
						<div class="row">
							<div class="col-sm-12">
							<!-- This is the logo -->
							<a class="navbar-brand">
							<img  class=" img-responsive" src="./assets/images/paypal_logo.png" style="height:auto; width: 100%;" />
							</a>

							</div>

							<div class="col-sm-3">
							<!-- This the the nav close to it -->
							</div>
						</div>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-family: 'Lato';">
					<ul class="nav navbar-nav navbar-right" id="hoverme">
						<li class="dropdown" style="margin-right: none; font-size: 12px;" >
							<a class="dropdown-toggle"><button style="background: #ddd; outline: none; border: none; color: black; min-height: 35px; line-height: 1.5; border-radius: 25px; width: 83px;"><b>Log in</b></button></a>
						</li>

						<li style="font-size: 12px;">
							<a class="dropdown-toggle"><button style="background: #0070ba; outline: none; border: none; color: white; min-height: 35px; border-radius: 25px; width: 83px;"><b>Sign up</b></button></a>
						</li>

					</ul>
					</div>
			</div>

		</header>
	
	</section>

	<!-- Video Content -->

	<section>
	<style type="text/css">
		.video:before{
			 background: rgba(0, 0, 0, 0.5);
		}
	</style>
	<div style="position: absolute;height: auto;  width: 100%; min-height: 700px;  overflow: hidden; outline: none; border: none;" class="video">
		<video loop muted autoplay poster="./assets/images/videoframe.jpg" class="video" style="width:100%; top:0; right: 0; z-index:-1;  position: absolute; height: auto;" class="fullscreen-bg__video">
	        <source src="./assets/images/pay-on-ebay.mp4" type="video/webm">
	        <source src="video/big_buck_bunny.mp4" type="video/mp4">
	        <source src="video/big_buck_bunny.ogv" type="video/ogg">
	    </video>
	 </div>   
	</section>

<body>

</body>
</html>