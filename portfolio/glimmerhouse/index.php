<?php
	$theme_color = '#00BF00';
?>
<?php include('../../includes/top.php'); ?>
	
	<title>portfolio - glimmerhouse.com</title>
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

<?php include('../../includes/middle.php'); ?>
					
					
	<div class="breadcrumbs">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">glimmerhouse</a>
	</div>
	
	<p>This is a Wordpress website I set up for <a href="http://glimmerhouse.com/" target="_blank" title="view the glimmerhouse website" >Glimmerhouse</a> home
	decor items. Glimmerhouse needed an online presence to display items to potential markets (such as the local Imperial Beach 
	Farmers Market) and customers.</p>

	<div class="img-box" style="max-width:1000px">
		<img src="../../img/portfolio/glimmerhouse-1.jpg" alt="the glimmerhouse.com home page" />
		<p class="caption">The Wordpress site makes it easy to upload new items as they are made, and keep viewers up-to-date on market locations and hours</p>
	</div>
	
	<p>We needed something that would allow for easy updating when a new item is made or a new market location is added, so a Wordpress install seemed a reasonable
	course. The theme used is <a href="http://srinig.com/wordpress/themes/emphaino/" title="view theme URI">Emphaino</a>, which features an excellent front-page
	posts display and responsive design.<p>
	
	<div class="img-box" style="max-width:854px">
		<img src="../../img/portfolio/glimmerhouse-2.jpg" alt="display of the responsiveness of the site" />
		<p class="caption">let's not forget the mobile users - the theme resonds beautifully to all screen sizes</p>
	</div>	
	
	<p>Services provided include:</p>
	<ul class="ocd_list">
		<li>setting up hosting and a domain name</li>
		<li>installing and configuring Wordpress</li>
		<li>picking an appropriate theme for Glimmerhouse's needs</li>
		<li>email configuration and association with gmail for ease of use</li>
		<li>light customizations on the theme as requested</li>
		<li>instruction and support on how to update and add content to the theme</li>
	</ul>
	
	<div class="img-box" style="max-width:790px">
		<img src="../../img/portfolio/glimmerhouse-3.jpg" alt="the glimmerhosue contact page" />
		<p class="caption">the embedded Google Maps plugin makes it simple to update market locations</p>
	</div>
	
	<div class="breadcrumbs last">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">glimmerhouse</a>
	</div>

<?php include('../../includes/footer.php'); ?>
		

	
	
	
<?php include('../../includes/bottom.php'); ?>