<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

				</div><!-- #main -->
			</div><!--inner_wrapper-->
		</div><!--#body_stuff-->	
		<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
			
			<p>
				<a href="../copyright/" title="the obligatory copyright information">&copy;niklassletteland.com 2011</a>
				| 
				<a href="../sitemap/">sitemap</a> | <a href="../archives/" title="view older versions of and content from this site.">archives</a> 
				| 
				<a href="http://validator.w3.org/check?uri=referer" target="_blank"
					title="This page is coded in standards-compliant HTML5">valid html5</a>
				|
				<a href="http://jigsaw.w3.org/css-validator/check?profile=css3&amp;uri=referer" 
				target="_blank" title="This page is coded in standards-compliant CSS3">valid css 3</a>
				|
				<!--php to get page url for accessibility check-->
				<?php
					function currentPageURL() {
						$pageURL = 'http';
						if ($_SERVER["HTTPS"] == "on") { $pageURL .= "s"; }
						$pageURL .= "://";
						if ($_SERVER["SERVER_PORT"] != "80") {
							$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
						} else {
							$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
						}
						return $pageURL;
					}
				?>
				<a href="http://wave.webaim.org/report?url=<?php echo currentPageURL(); ?>" 
					title="Check to see that this page is accessible, using WAVE from webaim.org"
					target="_blank">accessible</a>
			</p>
	</footer><!-- #colophon -->
	</div><!--wrapper-->
	<script type="text/javascript">
		<!--//--><![CDATA[//><!--
			document.write( '</div><!-- fade_wrapper -->' );
		//--><!]]>
	</script> 	

</body>
</html>

<?php wp_footer(); ?>

</body>
</html>