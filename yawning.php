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
			Contagious Yawning Application
			</h1>
			
			<p>
			Yawning is a form of social bonding and empathy in humans.  Yawns are mysteriously "contagious" so that when one person sees or hears another yawn they 
			are compeled to do so as well.  This human computer interaction attempts to establish the same empathy between human and machine.  When the computer 
			"sees" its user yawn, it emits a yawning noise.  When heard, the human yawns in response, once again causing the computer to yawn, etc., etc.
			</p>
			
			<p>
			<iframe src="http://player.vimeo.com/video/55893726" width="650" height="365" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</p>		
						
			<p class="artTitle">
			<a id="codeLink" href="https://github.com/qkbock/Yawning-Application" target="blank_">See code</a>
			<br>
			written in C++ with openFrameworks and ofxFaceTracker
			</p>
						
			
			<p>
			Other work made in openFrameworks:
			</p>
			
			<a href="selfOrganizingSystem.php"><img class="relatedWork" src="images/design/thumbs/selfOrganizingSystem.png" alt="Self-Organizing System" /></a>	
			<a href="algoAnimation.php"><img class="relatedWork" src="images/interaction/thumbs/algoAnimation.png" alt="Algorithmic Animation" /></a>							
			<a href="digitalLongExposure.php"><img class="relatedWork" src="images/photography/thumbs/digitalLongExposure.png" alt="Digital Long Exposure" /></a>							
		</article>
		
		<?php include("phps/footer.php"); ?>
		
	</section>
		
</body>
</html>
