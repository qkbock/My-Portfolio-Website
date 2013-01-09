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
			Algorithmic Animation
			</h1>
			
			<p>
			Interactive animation with algorithmic wave simulation written in C++ with openFrameworks.
			</p>
			
			<p>
			<iframe src="http://player.vimeo.com/video/51083130" width="650" height="365" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</p>		
						
			<p class="artTitle">
			<a id="codeLink" href="https://github.com/qkbock/Code-For-Art---Project-1" target="_blank">See code</a>
			<br>
			written in C++ with openFrameworks
			</p>
						
			
			<p>
			Other work made in openFrameworks:
			</p>
			
			<a href="selfOrganizingSystem.php"><img class="relatedWork" src="images/design/thumbs/selfOrganizingSystem.png" alt="Self-Organizing System" /></a>	
			<a href="yawning.php"><img class="relatedWork" src="images/interaction/thumbs/yawning.png" alt="Yawning Application" /></a>							
			<a href="digitalLongExposure.php"><img class="relatedWork" src="images/photography/thumbs/digitalLongExposure.png" alt="Digital Long Exposure" /></a>							
		</article>
		
		<?php include("phps/footer.php"); ?>
		
	</section>
		
</body>
</html>
