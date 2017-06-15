<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rootstrap
 */
?>
<?php do_action( 'rootstrap_content_end' ); ?>
	</div><!-- #content -->
<?php do_action( 'rootstrap_footer_before' ); ?>

	<footer class="footer">
  	<div class="container">
    	<div class="row">
      	<div class="col-md-6 col-sm-12">
          <div class="footer-text"> 
          	© <?php echo date('Y'); ?> Hirst Priory - All Rights Reserved | Site designed by <a target="_blank" href="https://www.jamesvines.com/">James Vines</a>
          </div>
        </div>  
        <div class="col-md-6 col-sm-12">
         	<a href="https://www.facebook.com/Hirstpriory/" target="_blank"> <i class="fa fa-facebook-square fa-3x contact-image"></i></a>
          <a href="https://twitter.com/hirstpriory" target="_blank"> <i class="fa fa-twitter-square fa-3x contact-image"></i></a>
          <a href="https://www.instagram.com/explore/locations/696306382/hirst-priory/" target="_blank"> <i class="fa fa-instagram fa-3x contact-image"></i></a>
          <a href="https://www.linkedin.com/company-beta/9231168/" target="_blank"> <i class="fa fa-linkedin-square fa-3x contact-image"></i></a>
          <a href="https://www.youtube.com/channel/UCAnArBn7cLXucpY8GfM1zTw" target="_blank"> <i class="fa fa-youtube-square fa-3x contact-image"></i></a>
          <a href="https://za.pinterest.com/search/pins/?q=hirst%20priory&rs=typed&term_meta[]=hirst%7Ctyped&term_meta[]=priory%7Ctyped" target="_blank"> <i class="fa fa-pinterest-square fa-3x contact-image"></i></a>
        </div>
      </div>
    </div>
  </footer>
	<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
	<?php do_action( 'rootstrap_footer_end' ); ?>
</div><!-- #page -->
<?php do_action( 'rootstrap_footer_after' ); ?>
<?php do_action( 'rootstrap_body_end' ); ?>
<?php wp_footer(); ?>
</body>
</html>