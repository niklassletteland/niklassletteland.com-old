	<script>
		$(document).ready( function() {
			
			$('#menu_icon').click( function() {
				$('header nav ul').animate({ right: 0 }, 500);
				$('#menu_close').animate({ right: '215px' }, 500);
			});
			
			$('#menu_close').click( function() {
				$('header nav ul').animate({ right: '-285px' }, 500);
				$('#menu_close').animate({ right: '-70px' }, 500);
			});
		});
		
		// Google Analytics tracking
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-30677947-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>	
	
</body>
</html>