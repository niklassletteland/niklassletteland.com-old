<?php
	$theme_color = '#';
?>
<?php include('../includes/top.php'); ?>
	
	<title></title>
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

<?php include('../includes/middle.php'); ?>
					
						
						
						
<p>content goes here</p>





<?php include('../includes/footer.php'); ?>
		

	<!-- bottom custom scripts go here -->
	
<?php include('../includes/bottom.php'); ?>