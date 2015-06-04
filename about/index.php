<?php
	$theme_color = '#3C3CFF';
?>
<?php include('../includes/top.php'); ?>
	
	<title>about</title>
	<style type="text/css">
		header nav ul li a#about {
			background-color: <?php echo($theme_color); ?>;
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
			border: 1px solid <?php echo($theme_color); ?>;
		}
	</style>
</head>

<?php include('../includes/middle.php'); ?>
					
						
						
						
				
				
				<p>I am a web developer based in San Diego, California. I specialize in clean, accessible, hand-coded front-end development, leveraging such
				technologies as HTML(5), CSS(3), and Javascript (including JQuery and the Google Maps v3.0 API). I am passionate about web technologies and interactive, responsive design;
				I think the web should be a fun, beautiful, and useful place.</p>
				<img class="img_float_right" alt="a photo of Niklas" src="../img/nik.jpg">
				<p>While I specialize in front-end development, I also have experience creating web applications and interacting with databases (primaryily using
				PHP and MySQL). I've also done a bit of wrangling with IIS and Microsoft SQL Server. Other technologies I've worked with include Wordpress, Java, Perl, 
				XML, JSON, PuTTY, and Git.</p>
				
				<p>I have some experience with the Adobe Suite, including Illustrator and InDesign, and particularly Photoshop. I'm also quite fond of
				<span class="gambler">typography</span>.</p>
				
				<p>Some of the things I enjoy include, in no particular order: skiing, photography, coding, reading, creating passwords with an optimum 
				rememberability-to-bits-of-entropy ratio, mountain biking, and drinking cappucinos.</p>
				
				
				<!--<section>
					<h2>Skills</h2>
					<p>Here are some things I know how to do:</p>
					<div id="skills_graph">
					
					</div>
				</section>-->
				
				
				<section class="last">
					<h2>Recent Projects</h2>
						<div class="project_box" style="background-image:url('../img/portfolio/tracker_thumb.png');">
							<a href="../portfolio/tracker/">
								<div class="mask"></div>
								<div class="description">
									<p>a custom web-app for tracking projects and hours</p>
								</div>
							</a>
						</div>					
						<div class="project_box mult_two" style="background-image:url('../img/portfolio/athens_thumb.png');">
							<a href="../portfolio/school-of-athens/">
								<div class="mask"></div>
								<div class="description">
									<p>a dynamic image colorization of Raphael's School of Athens painting</p>
								</div>
							</a>
						</div>
						<div class="project_box mult_three" style="background-image:url('../img/portfolio/cmap_thumb.png');">
							<a href="../portfolio/cmap/">
								<div class="mask"></div>
								<div class="description">
									<p>an interactive campus map for cabrillo college using the google maps v3.0 api</p>
								</div>
							</a>
						</div>
					<div style="clear:both"></div>
				</section>




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