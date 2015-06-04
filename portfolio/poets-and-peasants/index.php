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
	</style>		
</head>

<?php include('../../includes/middle.php'); ?>
					
					
	<div class="breadcrumbs">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">poets and peasants</a>
	</div>

	<p>This is a full website I created for the jazz-folk-rock band <a href="http://poetsandpeasants.com/" title="the Poets and Peasants website" target="_blank">Poets and Peasants</a>, 
	who are based in Galesburg, Illinois. I am aquainted with Jake, thier guitarist; so when the nine-piece ensemble concluded that they needed to boost their 
	online presence to help book shows and gain followers, they asked me to make a site.</p>
	
	<p>The main design consideration I was given to work with was to integrate their Bandcamp page with the website, such that visiting the 'music' 
	section of their site would link to Bandcamp, but the transition would appear seamless. Luckily, Bandcamp allows for placing image-mapped links in the
	header, as well as mapping a URL (in this case <a href="http://music/poetsandpeasants.com/" target="_blank">music.poetsandpeasants.com</a>) to a Bandcamp page. Making the site 
	match up with Bandcamp created certain design hurdles, such as the width, screen size response, and color scheme, but in the end I was as able to produce a
	linked setup with the appearance of a single site.</p>
	
	<div class="img-box" style="max-width:1500px;">
		<img src="../../img/portfolio/poets_compare.png" alt="Poets and Peasants music page side by side with about page" />
		<p class="caption">the overall design of the site matches the band's Bandcamp page to produce a seamless transition</p>
	</div>
	
	<p>They also requested that the site match their new album, All Towards Which we Grow. Thus was born the color palatte and general feel for the site.</p>
	
	<div class="img-box" style="max-width:700px;">
		<img src="../../img/portfolio/poets_album.jpg" alt="Poets and Peasants album cover" />
		<p class="caption">Poets and Peasants' first album; they wanted the site to match the design</p>
	</div>
	
	<section>
		<h2>the blog</h2>
		<p>I later worked with Poets and Peasants to build a <a href="http://poetsandpeasants.com/blog" target="_blank">blog</a>, so they could update listeners about new albums and upcoming shows. Since we didn't want 
		to re-do the whole site, I worked with the existing design and built a custom Wordpress child theme to match. The general design is identical to the other
		pages, but the members are able to log in and post whenever they like; this was seen as a better route than requiring them to contact me each time an
		update was needed.</p>
		
		<div class="img-box" style="max-width:700px;">
			<img src="../../img/portfolio/poets_blog.png" alt="Poets and Peasants blog page" />
			<p class="caption">the custom Wordpress blog page, integrated into the overall website</p>
		</div>
	</section>
	
	<section>
		<h2>newer things</h2>
		<p>More recently, Poets and Peasants came out with their <a href="http://music.poetsandpeasants.com/album/poets-peasants" target="_blank">second album</a> 
		(self-titled Poets and Peasants). To increase the visibility of the album, I created a basic splash page (see the image below).</p>
		
		<div class="img-box" style="max-width:700px;">
			<img src="../../img/portfolio/poets_splash.png" alt="Poets and Peasants splash page" />
			<p class="caption">a splash page to promote the new album</p>
		</div>
	</section>
	
	<div class="breadcrumbs last">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">poets and peasants</a>
	</div>
				

<?php include('../../includes/footer.php'); ?>
		

	
	
	
<?php include('../../includes/bottom.php'); ?>