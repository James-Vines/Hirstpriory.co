<?php
/**
 * The Sidebar widget area for static frontpage.
 *
 * @package rootstrap
 */
?>
				
	<?php
	// If footer sidebars do not have widget let's bail.
	
	if ( ! is_active_sidebar( 'home-widget-3' ) && ! is_active_sidebar( 'footer-widget-2' ) )
		return;
	// If we made it this far we must have widgets.
	?>
	
	<div class="home-widget-area row">
		<div class="container">
			<?php if ( is_active_sidebar( 'home-widget-3' ) ) : ?>
			<div class="col-sm-12 col-md-6 home-widget" role="complementary">
				<?php dynamic_sidebar( 'home-widget-3' ); ?>
			</div><!-- .widget-area .first -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
			<div class="col-sm-12 col-md-6 home-widget hidden-sm hidden-xs" role="complementary">
				<?php dynamic_sidebar( 'footer-widget-2' ); ?>
			</div><!-- .widget-area .first -->
			<?php endif; ?>

		</div>
	</div>
