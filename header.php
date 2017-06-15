<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rootstrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- favicon -->

<?php if ( rootstrap_get_option( 'custom_favicon' ) ) { ?>
<link rel="icon" href="<?php echo rootstrap_get_option( 'custom_favicon' ); ?>" />
<?php } ?>

<!--[if IE]><?php if ( rootstrap_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo rootstrap_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->	

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'nav-before' ); ?>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>						
				<div id="logo" <!-- Your site title as branding in the menu -->
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php if(rootstrap_get_option('logo_uploader')=='') {
						echo bloginfo( 'name' ); ?>
						<span id="site-description"><?php bloginfo( 'description' ); ?></span>
				    <?php } else { ?>
						<img src="<?php echo rootstrap_get_option('logo_uploader'); ?>">	
						<?php } ?>
					</a>
				</div>
		  </div>
			<?php rootstrap_header_menu(); ?>
		</nav><!-- .site-navigation -->	
	<div class="landing-header" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/hirstpriory.png');">
  	<?php get_sidebar( 'header'); ?>

	</div>
	<div class="alert alert-danger landing-alert">
  	<div class="container text-center">
    	<div class="row">
      	<div class="col-md-3 col-sm-6 contact"><i class="fa fa-phone contact-image" aria-hidden="true"></i>&nbsp&nbsp<a class="post-link" href="tel:+441724897270">01724 897270</div>  
      	<div class="col-md-3 col-sm-6 contact"><i class="fa fa-envelope contact-image" aria-hidden="true"></i>&nbsp&nbsp<a href="mailto:info@hirstpriory.co" class="post_link">info@hirstpriory.co</a></div>
      	<div class="col-md-6 col-sm-12 contact"><i class="fa fa-map-marker contact-image" aria-hidden="true"></i>&nbsp&nbspCrowle, North Lincolnshire, DN17 4BU</div>
    	</div>
  	</div>
	</div>

