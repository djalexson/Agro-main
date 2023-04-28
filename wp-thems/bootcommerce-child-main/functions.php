<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');


  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(),"1.0");

  // custom.js
  wp_enqueue_script('libs-js', get_stylesheet_directory_uri() . '/assets/js/libs.min.js', array(),"1.0", true);
  wp_enqueue_script('script-js', get_stylesheet_directory_uri() . '/assets/js/app.min.js', array(),"1.0", true);
}

function change_plugin_styles() {
	wp_register_style( 'main', get_stylesheet_directory_uri() . '/assets/css/style.min.css');
	wp_enqueue_style( 'main' );
}
add_action('admin_enqueue_scripts', 'change_plugin_styles');
// WooCommerce
require get_template_directory() . '/woocommerce/woocommerce-functions.php';


// Выключить дубль заголовка вкладок в карточке товара
add_filter('woocommerce_product_description_heading', 'my_product_description_heading',10,1);
function my_product_description_heading($description) {
    $description = '';
    return $description;
}

// Удаление кнопок корзины: 
 remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );



// Добавление своего контента после краткого описания
add_action( 'woocommerce_single_product_summary', 'custom_single_product_summary', 2 );
function custom_single_product_summary(){
global $product;

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'custom_single_excerpt', 20 );
}

function custom_single_excerpt(){
global $post, $product;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description )
return;

// The custom text
$custom_text = '<div class="product-contact"><hr><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FormConsModal">Получить консультацию</button> <a class="btn btn-primary callibri_phone" href="tel:+79282122219">8 928 212 22 19</a> <hr></div>';

?>
<div class="woocommerce-product-details__short-description">
<?php echo $short_description . $custom_text; // WPCS: XSS ok. ?>
</div>
<?php
}


// Откл кол-ва в категории 
add_filter( 'woocommerce_subcategory_count_html', 'woo_remove_category_products_count' );

function woo_remove_category_products_count() {
    return;
}

// Описание под товары: 
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_taxonomy_archive_description', 100 );

// Удаление сортировки 
// remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


/** Перевод **/
function multi_change_translate_text( $translated ) {
    $text       = array(
        'Next' => 'Следующий',
        'Previous' => 'Предыдущий',
		'Posted in' => 'Опубликовано в',
		'Open side menu' => 'Категории',
		'Похожие товары' => 'Другая продукция',
		
    );
    $translated = str_ireplace( array_keys( $text ), $text, $translated );
    return $translated;
}
add_filter( 'gettext', 'multi_change_translate_text', 20 );

