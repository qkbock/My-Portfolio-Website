//still need to do filter from another page and scrollTo nav.topNav


$(document).ready(function(){
	console.log(window.location);
	$('li#everythingButton>a').click(function(event){
		//Make this button italic and colorful
		$("li#everythingButton").css('font-style', 'italic');
		$("li#everythingButton a").css('color', '#04d899');
		//Make the rest of the buttons black and normal
		$("nav.sideMenu li").not('#everythingButton').css('font-style', 'normal');
		$("nav.sideMenu a").not('li#everythingButton a').css('color', '#000000');
		//Bring everything back
		$("section.work a").fadeIn(300);
		$("section.work h1").slideDown(300);
		if(window.location.pathname == "/~bockq716/bootcamp/index.php"){
			//Suppress the "link"
			event.preventDefault();
		}
	});


	$('li#interactionButton>a').click(function(event){
		//Make this button italic and colorful
		$("li#interactionButton").css('font-style', 'italic');
		$("li#interactionButton a").css('color', '#04d899');
		//Make the rest of the buttons black and normal
		$("nav.sideMenu li").not('#interactionButton').css('font-style', 'normal');
		$("nav.sideMenu a").not('li#interactionButton a').css('color', '#000000');
		//Bring back just this category
		$("section.work a.interaction").fadeIn(300);
		$("section.work h1.interaction").slideDown(300);
		//Hide all other categories
		$("section.work a").not('.interaction').fadeOut(300); 
		$("section.work h1").not('.interaction').slideUp(300);
		if(window.location.pathname == "/~bockq716/bootcamp/index.php"){
			event.preventDefault();
		}
	});
	
	$('li#graphicButton>a').click(function(event){
		//Make this button italic and colorful
		$("li#graphicButton").css('font-style', 'italic');
		$("li#graphicButton a").css('color', '#04d899');
		//Make the rest of the buttons black and normal
		$("nav.sideMenu li").not('#graphicButton').css('font-style', 'normal');
		$("nav.sideMenu a").not('li#graphicButton a').css('color', '#000000');
		//Bring back just this category
		$("section.work a.graphic").fadeIn(300);
		$("section.work h1.graphic").slideDown(300);
		//Hide all other categories
		$("section.work a").not('.graphic').fadeOut(300); 
		$("section.work h1").not('.graphic').slideUp(300);
		if(window.location.pathname == "/~bockq716/bootcamp/index.php"){
			event.preventDefault();
		}
	});
	
	$('li#designButton>a').click(function(event){
		//Make this button italic and colorful
		$("li#designButton").css('font-style', 'italic');
		$("li#designButton a").css('color', '#04d899');
		//Make the rest of the buttons black and normal
		$("nav.sideMenu li").not('#designButton').css('font-style', 'normal');
		$("nav.sideMenu a").not('li#designButton a').css('color', '#000000');
		//Bring back just this category
		$("section.work a.design").fadeIn(300);
		$("section.work h1.design").slideDown(300);
		//Hide all other categories
		$("section.work a").not('.design').fadeOut(300); 
		$("section.work h1").not('.design').slideUp(300);
		if(window.location.pathname == "/~bockq716/bootcamp/index.php"){
			event.preventDefault();
		}
	});
	
	$('li#photographyButton>a').click(function(event){
		//Make this button italic and colorful
		$("li#photographyButton").css('font-style', 'italic');
		$("li#photographyButton a").css('color', '#04d899');
		//Make the rest of the buttons black and normal
		$("nav.sideMenu li").not('#photographyButton').css('font-style', 'normal');
		$("nav.sideMenu a").not('li#photographyButton a').css('color', '#000000');
		//Bring back just this category
		$("section.work a.photography").fadeIn(300);
		$("section.work h1.photography").slideDown(300);
		//Hide all other categories
		$("section.work a").not('.photography').fadeOut(300); 
		$("section.work h1").not('.photography').slideUp(300);
		if(window.location.pathname == "/~bockq716/bootcamp/index.php"){
			event.preventDefault();
		}
	});
	
	$('li#paintingButton>a').click(function(event){
		//Make this button italic and colorful
		$("li#paintingButton").css('font-style', 'italic');
		$("li#paintingButton a").css('color', '#04d899');
		//Make the rest of the buttons black and normal
		$("nav.sideMenu li").not('#paintingButton').css('font-style', 'normal');
		$("nav.sideMenu a").not('li#paintingButton a').css('color', '#000000');
		//Bring back just this category
		$("section.work a.painting").fadeIn(300);
		$("section.work h1.painting").slideDown(300);
		//Hide all other categories
		$("section.work a").not('.painting').fadeOut(300); 
		$("section.work h1").not('.painting').slideUp(300);
		if(window.location.pathname == "/~bockq716/bootcamp/index.php"){
			event.preventDefault();
		}
	});
	
	
	
});

