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
			Self-Organizing System
			</h1>
			
			<p>
			This program makes a "self-organizing" system that has agents which carry complimentary colors: blue or yellow, red or cyan, green or orange. When these agents intersect with a circle they drop off their color and pick up the complimentary color and transport it to another circle. The result is that the circles, which all start off as a middle grey, turn different colors.
			</p>
			
			<p>
			<iframe src="http://player.vimeo.com/video/53025714" width="650" height="365" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</p>		
						
			<p class="artTitle">
			<a id="codeLink" href="https://github.com/qkbock/Project-2---Code-for-Art" target="blank_">See code</a>
			<br>
			written in C++ with openFrameworks
			</p>
						
			<p>You can toggle on and off each of the types of color-carriers and effect other changes as well:
			<br>   r - toggle red/cyan carriers
			<br>   g - toggle green/orange carriers
			<br>   b - toggle blue/yellow carriers
			<br>   B - background turns black
			<br>   W - background turns white
			<br>   G - background turns grey
			<br>   c - reset location and color of circles
			<br>   q - reset color of circles and change the arrangement to be a grid
			<br>   m - show color values of each circle
			</p>
			
			<p>
			Other work made in openFrameworks:
			</p>
			
			<a href="algoAnimation.php"><img class="relatedWork" src="images/interaction/thumbs/algoAnimation.png" alt="Algorithmic Animation" /></a>	
			<a href="yawning.php"><img class="relatedWork" src="images/interaction/thumbs/yawning.png" alt="Yawning Application" /></a>							
			<a href="digitalLongExposure.php"><img class="relatedWork" src="images/photography/thumbs/digitalLongExposure.png" alt="Digital Long Exposure" /></a>							
		</article>
		
		<?php include("phps/footer.php"); ?>
		
	</section>
		
</body>
</html>
