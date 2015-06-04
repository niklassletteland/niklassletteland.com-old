<?php
	$theme_color = '#ff210d';
?>
<?php include('includes/top.php'); ?>
	
	<title>404 - page not found</title>
	<style type="text/css">
		header nav ul li a# {
			background-color: <?php echo($theme_color); ?>;
			border: 1px solid black;
		}
		@media (max-width: 730px) {
			header nav ul li a# {
				background-color: #949494;
				border: none;
			}
			header nav ul li a#:hover { 
				background-color: #949494;
			}
		}
		#content {
			border: 1px solid <?php echo($theme_color); ?>;
		}
	</style>
</head>

<?php include('includes/middle.php'); ?>
					
								
	<section class="first last">			
		<h2>Four-oh-four</h2>
		
		<p>Uh-oh.</p>
		
		<p>Page not found! Ahhhhh! Panic! There's no going back now. Suit up folks, we're in for a ride. I'll see you on the other side.. maybe.</p>

	</section>



<?php include('includes/footer.php'); ?>
		

	<!-- bottom custom scripts go here -->
	
<?php include('includes/bottom.php'); ?>