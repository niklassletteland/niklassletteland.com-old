<?php
	$theme_color = '#00BF00';
?>
<?php include('../../includes/top.php'); ?>
	
	<title>portfolio</title>
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
			width: 670px;
			height: 360px;
			margin: 20px auto;
			display: block;
		}
	</style>		
</head>

<?php include('../../includes/middle.php'); ?>
					
					
	<div class="breadcrumbs">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">colorize</a>
	</div>

	<p>A project that interactively colorizes sections of an image using JQuery. Check it out below! - hover your mouse over various sections of the image and
	you'll see the color interactively fade in where your mouse has been.</p>
	
	<iframe src="../../projects/colorize/index.html"></iframe>
	
	<p>This was a project I did for <a href="https://consummatumest.com/" title="consummatumest.com">Paul Martinus</a>, a philosophical practitioner for whom I 
	often do freelance work. He wanted something more dynamic than a simple image for the front page of his website - something that would draw in visitors 
	and keep them interested.</p>
	
	<p>Paul originally conceptualized the idea for a dynamic colorization a while back, and came to me when he decided he wanted to implement it on his home page.
	The idea was to define certain regions of the image - such as the sun on the right-hand side - that would become colorized when the user hovered over that section
	of the image.</p>
	
	<p>The project is currently not live on Paul's website; we plan to revisit the project in the future. While Paul was satisfied with the result, we plan to
	add a greater degree of interactivity to the project, to get it to a point where it's an even more immersive and dynamic effect. You can see the current version
	embedded above on this page, though! Additionally, this project led to <a href="../school-of-athens" title="another, live colorization project">another colorization</a>, 
	this time of the famous School of Athens image in the Vatican. The School of Athens colorization project can be seen live on the 
	<a href="https://consummatumest.com/athens" title="view the School of Athens colorization in action" target="_blank">consummatumest.com galleries</a> page.</p>
	
	<div class="img-box" style="max-width:649px;">
		<img src="../../img/portfolio/colorize-examples.png" alt="consummatumest.com homepage" />
		<p class="caption">examples of colorization zones in action</p>
	</div>
	
	<p>The desired functionality was pretty complex - not just to colorize individual sections, but to define multi-region and multiphase sections. (For instance,
	try hovering over the sheppard in the bottom-left corner. First his robes become colorized; then his hands, head, and feet; then finally the cane, in three discrete 
	steps. Each section to saturate in a certain phase is not necessarily contiguious - e.g. the hands, head, and feet are all separate physical regions.)</p>
	
	<div class="img-box" style="max-width:662px;">
		<img src="../../img/portfolio/sheppard.png" alt="the sheppard region of the image being colorized" />
		<p class="caption">the sheppard shape required the colorization of geographcially separate sections in discrete temporal phases</p>
	</div>
	
	<p>I had never seen an implementation of the type of dynamic interaction he was looking for, but I figured it could be done. So I did some research, 
	and decided the best way to achieve what he was looking for was to leverage HTML5 canvas and JQuery. Each of the regions to colorize is defined as a shape on
	a canvas element, with a clipped background image. The canvases for each shape are interactively added to and removed from the page with JQuery. For the sake of
	performance, a hidden color-mapped version of the image is used to test the mouse location in reference to each zone (iterating through over 100 separate canvas
	shapes to test if the mouse is within one of them every time the mouse moves would not have been processor or memory friendly!). <!--If you're inclined to geek-out 
	more about how the image colorization works, my <a href="http://niklassletteland.com/blog/?p=19">blog post</a> about it should help).--></p>
	
	<div class="breadcrumbs last">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">colorize</a>
	</div>
				

<?php include('../../includes/footer.php'); ?>
		

	
	
	
<?php include('../../includes/bottom.php'); ?>