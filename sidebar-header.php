<?php
/**
 * The Sidebar widget area for static frontpage.
 *
 * @package rootstrap
 */
?>
				
	<?php
	// If footer sidebars do not have widget let's bail.
	
	if ( ! is_active_sidebar( 'home-widget-2' ) )
		return;
	// If we made it this far we must have widgets.
	?>
	
	<div class="latest-news hidden-sm hidden-xs">
		<?php if ( is_active_sidebar( 'home-widget-2' ) ) : ?>
			<?php dynamic_sidebar( 'home-widget-2' ); ?>
		<?php endif; ?>
	</div>
