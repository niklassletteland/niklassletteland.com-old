<?php
	$theme_color = '#00BF00';
?>
<?php include('../../includes/top.php'); ?>
	
	<title>portfolio - interactive school of athens colorization</title>
	<style type="text/css">
		header nav ul li a#portfolio {
			background-color: <?php echo($theme_color); ?>;
			border: 1px solid black;
		}
		@media (max-width: 730px) {
			header nav ul li a#portfolio {
				background-color: #949494;
				border: none;
			}
			header nav ul li a#portfolio:hover { 
				background-color: #949494;
			}
		}
		#content {
			border: 1px solid <?php echo($theme_color); ?>;
		}
		iframe {
			width: 675px;
			height: 449px;
			margin: 20px auto;
			display: block;
		}
	</style>		
</head>

<?php include('../../includes/middle.php'); ?>
					
					
	<div class="breadcrumbs">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">school of athens colorization</a>
	</div>

	<p>A project that interactively colorizes each of the subjects in Raphael's 
	'<a href="http://en.wikipedia.org/wiki/The_School_of_Athens" title="school of athens on wikipedia" target="_blank">School of Athens</a>'. 
	Check it out below! - hover your mouse over each of the characters in the painting - you'll see the color interactively fade in where your mouse has been.</p>
	
	<iframe src="../../projects/school-of-athens/index.html"></iframe>
	
	<p>This is the second image colorization project I have done for <a href="https://consummatumest.com/" title="consummatumest.com" target="_blank">Paul Martinus</a>, 
	a philosophical practitioner for whom I often do freelance work. After the <a href="../colorize/">first image colorization</a> worked out well, 
	Paul decided that he wanted to include the same sort of effect on Raphael's famous 'School of Athens' image (which is painted in the Vatican). To see
	the image in action on the site, visit Paul's <a href="https://consummatumest.com/galleries/" target="_blank">gallery page</a>.</p>
	
	<p>Each of the image's 54 characters have been painstakingly defined for colorization, including Plato, Aristotle, Socrates, Pythagoras, Heraclitus, and
	Raphael himself (at the far right hand side of the image).</p>
	
	<div class="img-box" style="max-width:664px;">
		<img src="../../img/portfolio/athens-demo.png" alt="the 'school of athens' image colorization in action" />
		<p class="caption">Parmenides is looking pretty moody today</p>
	</div>	
	
	<section>
	
		<h2>More Interactivity - the School of Athens Lightbox</h2>

		<p>The next phase of the project was to create a link within each person in the painting; clicking on a character
		will bring up a larger version of the character in a custom lightbox. Try clicking on any of the characters, such as Diogenes of Sinope (the fellow in blue
		lounging in the center), and a higher-res version cutout of the character will appear, allowing the viewer to get a closer-up view of the action.</p>
		
		<div class="img-box" style="max-width:700px;">
			<img src="../../img/portfolio/diogenes.png" alt="the lightbox that is initialized by clicking a character" />
			<p class="caption">clicking each person will bring up a lightbox with a higher-res image</p>
		</div>
	
	</section>
	
	<p>This project used a modified version of the 'colorize' script I wrote for the original colorized image. It uses HTML5's canvas element to produce the colored
	shapes; JQuery is used to fade in each colorized section as the mouse moves around the image. For performance, a hidden color map is used to determine the cursor 
	position in relation to the colorization hotspots (so that the script doesn't need to rotate through 54 individual polygon shapes and calculate if the cursor's
	coordinates fall within that shape to determine which zone should be colorized).</p>
	
	<div class="img-box" style="max-width:630px;">
		<img src="../../img/portfolio/color-map.png" alt="the color map used to determine which zone to colorize" />
		<p class="caption">the color map used to determine which zone to colorize</p>
	</div>
	
	<!--<p>If you're inclined to read more about how the colorization script works, you can check out my 
	<a href="http://niklassletteland.com/blog/?p=19" title="read about how colorize works">blog post</a> about the first image colorization script I wrote.</p>-->
	
	<div class="img-box" style="max-width:666px;">
		<img src="../../img/portfolio/athens-colorization-multi.png" alt="moving one's mouse quickly allows many zones to become colorized at once" />
		<p class="caption">the image is fun to mess around with; moving one's mouse quickly across the image produces a ghosting effect and allows the user
		to see multiple zones become colorized at once</p>
	</div>	
	
	<div class="breadcrumbs last">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">school of athens colorization</a>
	</div>
				

<?php include('../../includes/footer.php'); ?>
		

	
	
	
<?php include('../../includes/bottom.php'); ?>