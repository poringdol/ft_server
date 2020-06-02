<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package harmonic
 *
 * Template Name: Front Page
 *
 */

get_header( 'para' ); ?>

<div id="preload">
	<?php
	$front_intro = get_theme_mod( 'harmonic_front_title' );

	if ( 1 != $front_intro ) :
		$slideone_background = esc_attr( get_theme_mod( 'harmonic_front_titleimage' ) ); ?>

		<img src="<?php echo $slideone_background; ?>">

		<?php if ( empty ( $slideone_background) ) : ?>
		      <img src="<?php echo get_template_directory_uri(); ?>/images/bcg_slide-1.jpg">
		<?php endif;
	endif;

	$front_news = get_theme_mod( 'harmonic_front_news' );
	if ( 1 != $front_news ) :
		$slidetwo_background = esc_attr( get_theme_mod( 'harmonic_front_newsimage' ) ); ?>

		<img src="<?php echo $slidetwo_background; ?>">

		<?php if ( empty ( $slidetwo_background) ) : ?>
		    <img src="<?php echo get_template_directory_uri(); ?>/images/bcg_slide-2.jpg">
		<?php endif;
	endif;


	$front_page = get_theme_mod( 'harmonic_front_page' );
	if ( 1 != $front_page ) :
		$slidethree_background = esc_attr( get_theme_mod( 'harmonic_front_pageimage' ) ); ?>

		<img src="<?php echo $slidethree_background; ?>">

		<?php if ( empty ( $slidethree_background) ) : ?>
		    <img src="<?php echo get_template_directory_uri(); ?>/images/bcg_slide-3.jpg">
		<?php endif;
	endif;

	$front_widgets = get_theme_mod( 'harmonic_front_widgets' );

	if ( 1 != $front_widgets && is_active_sidebar( 'sidebar-2' ) ) :
		$slidefour_background = esc_attr( get_theme_mod( 'harmonic_front_widgetimage' ) ); ?>

		<img src="<?php echo $slidefour_background; ?>">

		<?php if ( empty ( $slidefour_background) ) : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/bcg_slide-4.jpg">
		<?php endif;
	endif;

	$front_portfolio = get_theme_mod( 'harmonic_front_portfolio' );
	if ( 1 != $front_portfolio ) :
		$slidefive_background = esc_attr( get_theme_mod( 'harmonic_front_portfolioimage' ) ); ?>

		<img src="<?php echo $slidefive_background; ?>">

		<?php if ( empty ( $slidefive_background) ) : ?>
		    <img src="<?php echo get_template_directory_uri(); ?>/images/bcg_slide-5.jpg">
		<?php endif;
	endif; ?>

</div><!-- #preload -->
<main id="para-template">
	<div id="skrollr-body">
	<?php
	$front_intro = get_theme_mod( 'harmonic_front_title' );
	if ( 1 != $front_intro ) :
		get_template_part( 'content', 'front-intro' );
	endif;

	$front_news = get_theme_mod( 'harmonic_front_news' );
	if ( 1 != $front_news ) :
		get_template_part( 'content', 'front-news' );
	endif;

	$front_page = get_theme_mod( 'harmonic_front_page' );
	if ( 1 != $front_page ) :
		get_template_part( 'content', 'front-page' );
	endif;

	$front_widgets = get_theme_mod( 'harmonic_front_widgets' );
	if ( 1 != $front_widgets && is_active_sidebar( 'sidebar-2' ) ) :
		get_template_part( 'content', 'front-widgets' );
	endif;

	$front_portfolio = get_theme_mod( 'harmonic_front_portfolio' );
	if ( 1 != $front_portfolio ) :
		get_template_part( 'content', 'front-portfolio' );
	endif;?>
	</div>
</main><!-- #para-template -->
<?php get_footer( 'para' ); ?>