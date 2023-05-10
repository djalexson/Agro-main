<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $post;
$cat = wp_get_post_terms( $post->ID, 'product_cat' )[0]->slug;
echo "<pre>";
var_dump($cat);
echo "</pre>";

$term_id = 0;
$current_term = get_queried_object();
if ($current_term instanceof WP_Term && !is_wp_error($current_term)) {
    $term_id = $current_term->term_id;
}
// Получаем текущую категорию
//$current_term = get_queried_object();
//if ($current_term instanceof WP_Term && !is_wp_error($current_term)) {
//    $term_id = $current_term->term_id;
//}
//$args = array(
//	'post_type' => 'product',
//	'posts_per_page' => 16,
//	'order' => 'ASC',
//);

//if (isset($term_id)) {
//	$args['tax_query'] = array(
//			array(
//					'taxonomy' => 'product_cat',
//					'field' => 'term_id',
//					'terms' => $term_id,
//			),
//	);
//}

//$loop = new WP_Query( $args );


?>

<div id="product-list" data-termid="<?=$term_id?>" data-numitem="16" data-numitemclick="8">

<div class="my-loader">
    <div class="spinner"></div>
</div>

</div>

<div id="load-more">
	<button id="load-more-button">Load More</button>
	
</div>

<script>
	var ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
	const termId =   Number(jQuery('#product-list').attr('data-termid'));
	const numItem =   Number(jQuery('#product-list').attr('data-numitem'));
	const numItemClick =   Number(jQuery('#product-list').attr('data-numitemclick'));
	let page = 	1;
	let loadingMore = false;
	
	
	console.log(termId)
	
	 function loadProducts(count) {
			loadingMore = true;
			jQuery('.my-loader').show();
			jQuery.post(ajaxUrl, {
					action: 'get_products',
					term_id: termId,
					page: page,
					count: count
			}, function(response) {

				jQuery('.my-loader').hide();
				if (response.length == 0) {	
				jQuery('#load-more').hide();
				}else{
					jQuery('#product-list').append(response.map(function(product) {
							return '<div class="product">' +
							'<a href="' + product.permalink + '">' +
                    '<img src="' + product.image + '" alt="' + product.title + '">' +
                    '<h2>' + product.title + '</h2>' +
                    '<span class="price">' + product.price + '</span>' +
                    '</a>' +
                    '</div>';
									}).join(''));}
									
									if (response.length < count) {
										jQuery('#load-more').hide();
									} else {
										page++;
										loadingMore = false;
									}
								});
							}
							
    jQuery('#load-more-button').on('click', function() {
        if (!loadingMore) {
            loadProducts(numItemClick);
        }
    });
	 loadProducts(numItem) 
	
</script>

