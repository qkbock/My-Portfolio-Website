<!DOCTYPE html>

<html>
	<head>
		<title>Quincy Bock | Work</title>
		<?php include("phps/styleLink.php"); ?>	
	</head>
	
	<style type="text/css">
	body{
	background-image:url('images/topWave.png');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size: 100%;
	}
	</style>
			
<body>

	<?php include("phps/topMenu.php"); ?>
	<?php include("phps/sideMenu.php"); ?>
	
	
	
	<section class="project">
		<article class="content" id="content1">
			<h1 class="projectHeading">
			Digital "Long Exposure" 
			</h1>
			
			<img src="images/photography/digitalLongExposure.png">
			<p class="artTitle">
			Digital One-Second Exposure (1/100 sec x 100 Taken Over 10 min), East River, September 16, 4:00-4:10 pm, 2012 
			<br>
			digital print
			</p>

			<p>
			For my <a href="waterGrid.php" target="_blank">undergraduate thesis</a>, I developed a system of taking "digital" long exposures of water in which I layered one hundred 1/100th of a second pictures on top of each other with varying opacities.  
			The result is a one second exposure built from discrete packages of time.  With code, I amplified the "digital" nature of these pieces by complying the 
			images computationally.
			</p>

			<img src="images/photography/digitalLongExposureCode.png">

			<p>
			Related work:
			</p>
				
			<a href="waterGrid.php"><img class="relatedWork" src="images/photography/thumbs/waterGrid.png" alt="Photographic Prints" /></a>
			<a href="boxOfGrain.php"><img class="relatedWork" src="images/design/thumbs/boxOfGrain.png" alt="Kinetic Sculpture" /></a>	
		</article>
		
	<?php include("phps/footer.php"); ?>

		
	</section>
	
	
</body>
</html>
