<?php

/**
 * The template for displaying all WooCommerce pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
<<<<<<< HEAD

get_template_part("temlates_blocks/header_gg")
?>
		
		<!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>
		
    <main>
			<?php if(is_singular( 'product' )): ?>
				
				<?php woocommerce_breadcrumb(); ?>
				<!-- Breadcrumb -->
				<?php endif; ?>
				<div class="row">
					<div class="col">
          <?php if ( is_singular( 'product' ) ) {
						woocommerce_content();
					}else{
wc_get_template( 'archive-product.php' );
} ?>
=======
?>
14
<div id="content" class="site-content container py-5 mt-4">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <main id="main" class="site-main">

      <!-- Breadcrumb -->
      <?php woocommerce_breadcrumb(); ?>
      <div class="row">
        <div class="col">
          <?php woocommerce_content(); ?>
>>>>>>> 900b25c (ок)
        </div>
        <!-- sidebar -->
           <!-- row -->
      </div>
    </main><!-- #main -->
<<<<<<< HEAD

=======
  </div><!-- #primary -->
</div><!-- #content -->
>>>>>>> 900b25c (ок)
<?php
get_footer();
