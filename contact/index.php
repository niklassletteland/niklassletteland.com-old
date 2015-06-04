<?php
	$theme_color = '#FFB935';
?>
<?php include('../includes/top.php'); ?>
	
	<title>contact</title>
	<style type="text/css">
		header nav ul li a#contact {
			background-color: <?php echo($theme_color); ?>;
			border: 1px solid black;
		}
		@media (max-width: 730px) {
			header nav ul li a#contact {
				background-color: #949494;
				border: none;
			}
			header nav ul li a#contact:hover { 
				background-color: #949494;
			}
		}
		#content {
			border: 1px solid <?php echo($theme_color); ?>;
		}		
		#map_canvas {
			width: 100%;
			height: 400px;
		}
	</style>
</head>

<?php include('../includes/middle.php'); ?>
					

<section class="first last">
	<!--<h2>some ways to contact me</h2>-->
<script type="text/javascript" language="javascript">
<!--
// Email obfuscator script 2.1 by Tim Williams, University of Arizona
// Random encryption key feature by Andrew Moulden, Site Engineering Ltd
// This code is freeware provided these four comment lines remain intact
// A wizard to generate this code is at http://www.jottings.com/obfuscator/
{ coded = "oR@wRmpBuupsggspBwY.2DO"
  key = "Qi9qFDMOyLUpGuCY8aXgEhnkRzN6ceI5vHxfWZASB3TbowmKJPl2srdV74tj01"
  shift=coded.length
  link=""
  for (i=0; i<coded.length; i++) {
    if (key.indexOf(coded.charAt(i))==-1) {
      ltr = coded.charAt(i)
      link += (ltr)
    }
    else {     
      ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
      link += (key.charAt(ltr))
    }
  }
document.write("<a href='mailto:"+link+"' title='i don&#39;t know why you&#39;d want to click this link, but internet norms dictate that it should be included'>hi@niklassletteland.com</a>")
}
//-->
</script><noscript>Sorry, you need Javascript on to email me.<br /></noscript>						
						
<span class="slash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
<a href="http://www.linkedin.com/in/niklassletteland" title="facebook for boring people" target="_blank">LinkedIn</a>
<span class="slash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
<a href="https://plus.google.com/104514125302317925054/posts?hl=en" title="what ever happened to MySpace, anyway? that is, what were the driving marketplace factors that led to Facebook's undisputable supremacy as compared to MySpace in the social networking sector? anyway, this link will take you to my Google+ page.." target="_blank">Google+</a>
<span class="slash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
<a href="http://www.flickr.com/photos/48266466@N04/" title="i'm a decent photographer. really!" target="_blank">flickr</a>

</section>

<!--
<section class="last">
	<h2>location info</h2>
	<p>Why do you want to know where I live? I'm not going to tell you that.</p>
	<p>Instead, here's a map of the Leshan Giant Buddha in China. I've never been there. To be honest, this map is really just 
	here to demonstrate that I can create custom Google Maps.</p>
	<div id="map_canvas"></div>
</section> -->



<?php include('../includes/footer.php'); ?>
		
		
<!--	
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
			
			var contentString = '<img src="../img/leshan-buddha.jpg" alt="the Lesahn Giant Buddha in the southern part of Sichuan province in China" style="float:left; padding: 10px;" />' +
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
-->
	
<?php include('../includes/bottom.php'); ?>