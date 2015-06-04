<?php
	$home = '/SITES/niklassletteland.com/new/';
	//$home = '/new/';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="author" content="Niklas Sletteland"/>
	<link rel="shortcut icon" href="/images/favicon.ico" />
	
	<script src="jquery.js"></script>
	<script type="text/javascript">
		// fade effect
		$(document).ready(function() {
			$( '#fade_wrapper' ).fadeIn(850);		
		});	
	</script>
	
	<style type="text/css">
		#fade_wrapper {
			display:none;	
		}
	</style>		
	
	<link rel="stylesheet" href="<?php echo($home); ?>css/style.css" type="text/css" />
	
	<title>niklas sletteland - about</title>
	<style type="text/css">
		header nav ul li a#about {
			background-color: #3C3CFF;
			border: 1px solid black;
		}
		
		@media (max-width: 730px) {
			header nav ul li a#about {
				background-color: #949494;
				border: none;
			}
			
			header nav ul li a#about:hover { 
				background-color: #949494;
			}
		}
		 
		#content {
			border: 1px solid #3C3CFF;
		}
		
		#map_canvas {
			width: 100%;
			height: 400px;
		}
	</style>
</head>

<body>

	<script type="text/javascript">
			document.write( '<div id="fade_wrapper">' );
	</script> 
	<div id="wrapper">
		<header>
			<h1><a href="<?php echo($home); ?>" title="to home">NIKLAS SLETTELAND</a></h1>
			<nav>
				<div id="menu_icon"></div>
				<div id="menu_close"></div>
				<ul>
					<li><a href="<?php echo($home); ?>about/" id="about">About</a></li>
					<li><a href="<?php echo($home); ?>portfolio/" id="portfolio">Portfolio</a></li>
					<li><a href="<?php echo($home); ?>blog/" id="blog">Blog</a></li>
					<li><a href="<?php echo($home); ?>photography/" id="photography">Photography</a></li>
					<li><a href="<?php echo($home); ?>contact/" id="contact">Contact</a></li>
				</ul>
			</nav>
		</header>
		
		<div id="content">
			<div id="inner_wrapper">
				<img class="img_float_right" alt="a photo of Niklas" src="img/bio_pic.jpg">
				
				<p>I am a web developer based in Santa Cruz, California. I specialize in clean, accessible, hand-coded front-end development, leveraging such
				technologies as HTML(5), CSS(3), and Javascript (including JQuery and the Google Maps v3.0 API). I am passionate about web technologies and interactive, responsive design;
				I think the web should be a fun, beautiful, and useful place.</p>
				
				<p>While I specialize in front-end development, I also have experience creating web applications and interacting with databases (primaryily using
				PHP and MySQL). I've also done a bit of wrangling with IIS and Microsoft SQL Server. Other technologies I've worked with include Wordpress, Java, Perl, 
				XML, JSON, PuTTY, and Git.</p>
				
				<p>I have some experience with the Adobe Suite, including Illustrator and InDesign, and particularly Photoshop. I'm also kind of a 
				<span class="gambler">typography nerd</span>.</p>
				
				<p>Some of the things I enjoy include, in no particular order: skiing, photography, coding, reading, creating passwords with an optimum 
				rememberability-to-bits-of-entropy ratio, mountain biking, and drinking <a href="https://www.facebook.com/niklas.sletteland/media_set?set=a.10150697444212221.411224.726452220&type=3" target="_blank">cappucinos</a>.</p>
				
				
				<!--<section>
					<h2>Skills</h2>
					<p>Here are some things I know how to do:</p>
					<div id="skills_graph">
					
					</div>
				</section>-->
				
				
				<section>
					<h2>Recent Projects</h2>
					<div class="project_box" style="background-image:url('img/cmap.png');">
						<a href="#">
							<div class="mask"></div>
							<div class="description">
								<p>an interactive campus map for cabrillo college using the google maps v3.0 api</p>
							</div>
						</a>
					</div>
					<div class="project_box mult_two" style="background-image:url('img/colorize.png');">
						<a href="#">
							<div class="mask"></div>
							<div class="description">
								<p>a project that interactively colorizes sections of an image using JQuery</p>
							</div>
						</a>
					</div>
					<div class="project_box mult_three" style="background-image:url('img/poets_splash.png');">
						<a href="#">
							<div class="mask"></div>
							<div class="description">
								<p>a splash page to demo the new album from poets and peasants, an excellent band based in galseburg, illinois</p>
							</div>
						</a>
					</div>
					<div style="clear:both"></div>
				</section>
				
				
				<section>
					<h2>Contact Info</h2>
					<a href="mailto:niklassletteland@gmail.com" title="i don't know why you'd want to click this link, but internet norms dictate that it should be included">niklassletteland@gmail.com</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="http://www.linkedin.com/in/niklassletteland" title="facebook for boring people">LinkedIn</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://plus.google.com/104514125302317925054/posts?hl=en" title="what ever happened to MySpace, anyway? that is, what were the driving marketplace factors that led to Facebook's undisputable supremacy as compared to MySpace in the social networking sector? anyway, this link will take you to my Google+ page..">Google+</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="http://www.flickr.com/photos/48266466@N04/" title="i'm a decent photographer. really!">flickr</a>
				</section>
				
				<section class="last">
					<h2>Location Info</h2>
					<p>Why do you want to know where I live? I'm not going to tell you that.</p>
					<p>Instead, here's a map of the Leshan Giant Buddha in China. I've never been there. To be honest, this map is really just 
					here to demonstrate that I can create custom Google Maps.</p>
					<div id="map_canvas"></div>
				</section>

			</div><!--inner_wrapper-->
		</div><!--content-->
		
		<footer>
			<p>
				<a href="../copyright/" title="the obligatory copyright information">&copy;niklassletteland.com 2011</a>
				| 
				<a href="../sitemap/">sitemap</a> 
				<span class="desktop-only">
					|
					<a href="http://validator.w3.org/check?uri=referer" target="_blank"
						title="This page is coded in standards-compliant HTML5">valid html5</a>
					|
					<a href="http://jigsaw.w3.org/css-validator/check?profile=css3&amp;uri=referer" 
					target="_blank" title="This page is coded in standards-compliant CSS3">valid css 3</a>
					|
					<!--php to get page url for accessibility check-->
									<a href="http://wave.webaim.org/report?url=http://niklassletteland.com/about/" 
						title="Check to see that this page is accessible, using WAVE from webaim.org"
						target="_blank">accessible</a>
				</span>
			</p>
		</footer>
	</div><!--wrapper-->
	
	
	<script type="text/javascript">
		// create closing div for fade effect wrapper
		document.write( '</div><!-- fade_wrapper -->' );
		
		$(document).ready( function() {
			
			$('#menu_icon').click( function() {
				$('header nav ul').animate({ right: 0 }, 500);
				$('#menu_close').animate({ right: '215px' }, 500);
			});
			
			$('#menu_close').click( function() {
				$('header nav ul').animate({ right: '-285px' }, 500);
				$('#menu_close').animate({ right: '-70px' }, 500);
			});
			
			$(window).resize(function() {
				$('.project_box').each(function() {
	    			var width = $(this).width();
					$(this).height( width );
				});			
			});
			
			$('.project_box').each(function() {
    			var width = $(this).width();
				$(this).height( width );
			});
			
		});
	
		/*// Google Analytics tracking
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-30677947-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();*/
		
	</script>
	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script>
		function initializeBuddhaMap() {
			var map_canvas = document.getElementById('map_canvas');
			var map_options = {
				center: new google.maps.LatLng(29.563211,103.775157),
				zoom: 15,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map(map_canvas, map_options);
			
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(29.563211,103.775157),
				map: map
			});
			
			var contentString = '<img src="img/leshan-buddha.jpg" alt="the Lesahn Giant Buddha in the southern part of Sichuan province in China" style="float:left; padding: 10px;" />' +
								 '<p style="font-size: 0.7em;">' + 
								 'The Leshan Giant Buddha is carved out of a cliff face that lies at the confluence of the Minjiang, Dadu and Qingyi ' +
								 'rivers in the southern part of Sichuan province in China, near the city of Leshan.</p>' +
								 '<small style="font-size:0.6em">source:<a href="http://en.wikipedia.org/wiki/Leshan_Giant_Buddha">Wikipedia</a></small>';
		
			var infowindow = new google.maps.InfoWindow({
				content: contentString
			}); 

			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});	
		}	
		
		google.maps.event.addDomListener(window, 'load', initializeBuddhaMap);
	</script>
	
</body>
</html>