<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

	<footer id="colophon" role="contentinfo">
	<div class="box">
		<img src="/images/logo.png" alt="SG Internet Marketing Logo"/>
	</div><!-- /.box -->

		<div class="site-info box">
		<nav id="footer-navigation" class="main-navigation" role="navigation">

			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu' ) ); ?>

		</nav><!-- #footer-navigation -->
	
			<p>SG Internet Marketing, LLC &copy; 2013</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>