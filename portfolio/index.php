<?php
	$theme_color = '#00BF00';
?>
<?php include('../includes/top.php'); ?>
	
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
	</style>
</head>

<?php include('../includes/middle.php'); ?>
					
<div class="project_box" style="background-image:url('../img/portfolio/tracker_thumb.png');">
	<a href="tracker/">
		<div class="mask"></div>
		<div class="description">
			<p>a custom web-app for tracking projects and hours</p>
		</div>
	</a>
</div>
<div class="project_box mult_two" style="background-image:url('../img/portfolio/athens_thumb.png');">
	<a href="school-of-athens/">
		<div class="mask"></div>
		<div class="description">
			<p>a dynamic image colorization of Raphael's School of Athens painting</p>
		</div>
	</a>
</div>
<div class="project_box mult_three" style="background-image:url('../img/portfolio/cmap_thumb.png');">
	<a href="cmap/">
		<div class="mask"></div>
		<div class="description">
			<p>an interactive campus map for cabrillo college using the google maps v3.0 api</p>
		</div>
	</a>
</div>
<div class="project_box mult_two" style="background-image:url('../img/portfolio/colorize_thumb.png');">
	<a href="colorize/">
		<div class="mask"></div>
		<div class="description">
			<p>a project that interactively colorizes sections of an image using JQuery</p>
		</div>
	</a>
</div>
<div class="project_box" style="background-image:url('../img/portfolio/poets_thumb.png');">
	<a href="poets-and-peasants/">
		<div class="mask"></div>
		<div class="description">
			<p>band website and Wordpress-based blog for the jazz-rock-folk combo Poets and Peasants</p>
		</div>
	</a>
</div>
<div class="project_box mult_three" style="background-image:url('../img/portfolio/glimmerhouse_thumb.jpg');">
	<a href="glimmerhouse/">
		<div class="mask"></div>
		<div class="description">
			<p>a wordpress website for Glimmerhouse home decor items</p>
		</div>
	</a>
</div>

<div style="clear:both"></div>
				
				

<?php include('../includes/footer.php'); ?>
		

	
	<script>
		$(document).ready( function() {
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
	
	</script>
	
	
	
<?php include('../includes/bottom.php'); ?>