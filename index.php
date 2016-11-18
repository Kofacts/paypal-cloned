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
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,300">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,300" type="text/css" >
	<script type="text/javascript" src="./assets/inc/bs/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#vids").click(function(){
				alert("Hello");
			});
		});
	</script>


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
	<style type="text/css">
		.video:before{
			 background: rgba(0, 0, 0, 0.5);
		}
		.overlay {
		  width: 100%;
		  height: 100%;
		  background: rgba(20,20,20, .5);
		  display: block;
		  position: absolute;
		  top:0;
		  right: 0;
		}
		#learnmore:hover{
			background:#0070ba;
		}

	</style>
	<div id="vids" style="position: absolute;height: auto;  width: 100%; min-height: 650px;  overflow: hidden; outline: none; border: none;" >
		<video loop muted autoplay poster="./assets/images/videoframe.jpg" class="video" style="width:100%; top:0; right: 0; z-index:-1;  position: absolute; height: auto;" class="fullscreen-bg__video">
	        <source src="./assets/images/pay-on-ebay.mp4" type="video/webm">
	        <source src="video/big_buck_bunny.mp4" type="video/mp4">
	        <source src="video/big_buck_bunny.ogv" type="video/ogg">
	    </video>

	    <div class="overlay">

	    	<center style="padding-top: 10%;">
	    	<span style="font-family: Verdana; color: white; font-weight: 100; font-size: 50px; ">We’ve got you covered.</span>
	    	<p style="font-family: Verdana; color:white; font-size: 18px; ">We can reimburse you if something’s not right.</p>
	    	<p style="font-family: Helvetica; color:white; font-size: 18px; font-weight: 30; padding-top: 10px;">Shop with peace of mind, we protect your eligible purchases. If your order doesn’t arrive or isn’t as the seller described, we can help you get your money back.</p>

	    	<style type="text/css">
	    		input[type=submit]:hover{
	    			background: #0070ba;
	    			color: white;
	    		}
	    		input[type=submit]{
	    			background: #0079ad; 
	    			margin-top: 20px; 
	    			outline: none; 
	    			border: none; 
	    			color: black; 
	    			min-height: 35px; 
	    			border-radius: 25px; 
	    			height: 50px; 
	    			width: 321px;
	    			font-size: 15px;
	    			color: white;
	    			font-style: bold;
	    			font-family: 'Lato';
	    			font-weight: 30px;
	    		}
	    	</style>

	    	<input type="submit" name="submit" value="Learn More">

	    	</center>

	    </div>
	 </div>   

	
<section style="position:absolute; margin-top: 660px; width: 100%;">
		
			<div class="container" style="margin: 0 auto; float: center;">
				<button style="background: white; outline: none; border: 0.5px thin gray; border-radius: 30px; height: 30px; width:30px;"><i class="glyphicon glyphicon-question"></i></button>
				<button style="background: white; margin-left: 10px; outline: none; border: 0.5px thin gray; border-radius: 30px; height: 30px; width:30px;"><i class="glyphicon glyphicon-question"></i></button>
			</div>
			
</section>

	

<body>

</body>
</html>