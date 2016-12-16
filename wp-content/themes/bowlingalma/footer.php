<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id="main-core".
 *
 * @package Sento
 */
?>

		</div><!-- #main-core -->
		</div><!-- #main -->
		<?php /* Sidebar */ thinkup_sidebar_html(); ?>
	</div>
	</div><!-- #content -->

	<footer>
		<?php /* Custom Footer Layout */ thinkup_input_footerlayout();
		echo	'';  ?>
		
		<div id="sub-footer">

		<div id="sub-footer-core">
		
			<div class="copyright">
				<p>Theme enfant de Sento, par Youness 2016, Tous droit reserve</p>
			</div>
			<!-- .copyright -->

			<?php if ( has_nav_menu( 'sub_footer_menu' ) ) : ?>
			<?php wp_nav_menu( array( 'depth' => 1, 'container_class' => 'sub-footer-links', 'container_id' => 'footer-menu', 'theme_location' => 'sub_footer_menu' ) ); ?>
			<?php endif; ?>
			<!-- #footer-menu -->

		</div>
		</div>
	</footer><!-- footer -->

</div><!-- #body-core -->

<?php wp_footer(); ?>

</body>
</html>