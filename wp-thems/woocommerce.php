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
        </div>
        <!-- sidebar -->
           <!-- row -->
      </div>
    </main><!-- #main -->

<?php
get_footer();
