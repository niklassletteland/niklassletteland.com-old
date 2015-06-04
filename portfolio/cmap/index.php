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
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">cMap</a>
	</div>
	
	<p>The <a href="http://www.cabrillo.edu/home/about/cmap/" target="_blank">cMap</a> is an interactive map of Cabrillo College, which allows users to 
	easily locate buildings and rooms on campus.</p>

	<div class="img-box" style="max-width:650px">
		<img src="../../img/portfolio/cmap.png" alt="an image of the cMap in action" />
		<p class="caption">clicking a building displays the interior; buildings can be located by choosing one from the drop-down menu</p>
	</div>
	
	<p>The cMap leverages the (enormously awesome) Google Maps v3.0 API. It functions just like the regular Google Maps (allowing users to click and drag to pan, as well
	and zoom in and out and located specific features), only it's hosted on Cabrillo's servers and contains lots of custom data and images that aren't availible
	to users on <a href="http://www.maps.google.com" target="_blank">maps.google.com</a>. The map loads with the zoom and position such that the entire Aptos campus is visible.
	Each building has a label; clicking on a building displays the interior. The drop-down menu at the top is a list containing each
	building; when a building is selected, the cMap zooms in on that building and displays the interior. Specific services and features are marked, such
	as bathrooms, ATMs, vending machines, and parking lots.<p>
	
	<p>Since it's initial launch around a year ago, the cMap has become well known on campus, and is used frequently by staff and students. It has also
	turned out to he highly useful for internal departments such as IT and maintenance.</p>
	
	<p>Creating the cMap primarily entailed a lot of coding in Javascript (as well as the obligatory HTML and CSS). It also involved significant design and
	Photoshop work to create the UI and floor plan overlay images.</p>
	
	<div class="img-box" style="max-width:1369px">
		<img src="../../img/portfolio/cmap-overview.png" alt="an zoomed out image of the cMap, showing the whole campus" />
		<p class="caption">the cMap helps students, staff, and faculty locate buildings an rooms on campus</p>
	</div>
	
	<p>The cMap was inspired by (and much of the original codebase came from) the <a href="http://www.santarosa.edu/map/m/" target="_blank">
	Santa Rosa Junior College's interactive map</a>. Thanks to SRJC for helping Cabrillo College get this interactive map going!</p>
	
	<section>
		<h2>cMap Custom Link Generator</h2>
	
		<p>After coding the initial cMap, we recieved a few requests from staff and faculty to create custom map links to locate a partiuclar building or room. 
		So I created the <a href="http://www.cabrillo.edu/home/about/cmap/generator" target="_blank">custom link generator</a>, which allows users to specify one or 
		more locations on campus. When the map loads, it zooms in on the locations specified, with optional info windows to display additional info.</p>
		
		<p>This can be used for such purposes as specifyig the room where a professor's office hours are held or emailing someone the location of a 
		meeting, as in 
		<a href="http://www.cabrillo.edu/home/about/cmap/index.html?custom&amp;36.98765757888837,-121.92768717301078~Monthly%20Budget%20Review$$3:30pm$$Room%201309A$~1" title="cMap custom link example" target="_blank">this example</a>.
		</p>
		
		<div class="img-box" style="max-width:969px">
			<img src="../../img/portfolio/generator-example.png" alt="an example of the custom link generator" />
			<p class="caption">the custom map generator can be used to specify the location of a meeting</p>
		</div>	
		
		<p>The custom map generator does not save any data to the server; rather, it encodes the custom data in the URL. When the cMap loads, it checks the URL to 
		determine if there is custom map data to be displayed and configures the map appropriately.</p>		
	</section>
	
	<section>
		<h2>More cMap! - Facilities and IT Component cMaps</h2>
		<p>After creating the orignal cMap and custom link generator, I was approached by the Facilities department at Cabrillo College. They wondered if we (the IT 
		department) would be able to leverage the cMap technology to allow them to keep track of components such as HVAC systems, shutoff valves, and the like. After
		some research, we decided it was worth the time to comply with the request, so I created the 'component' cMaps. These maps added a layer of complexity by
		storing all the data in a database, which is dynamically pulled out and altered as the maps are used. They feature an easy-to use, drag-and-drop interface
		for adding components to the inventory, allowing any user without prior website knowledge to easily update the maps. Since introducing the facilities cMap,
		we have expanded the functionality, and are currently using it for keeping track of inventories within the IT and other departments as well; the project has
		since become my primary focus at Cabrillo, and has created much positive attention for our department. I'm not really at liberty to put links to these sites
		on the web or show the codebase, however, additional info may be available upon request.</p>
	</section>
	
	<div class="breadcrumbs last">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">cMap</a>
	</div>

<?php include('../../includes/footer.php'); ?>
		

	
	
	
<?php include('../../includes/bottom.php'); ?>