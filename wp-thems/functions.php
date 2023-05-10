<?php


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

<<<<<<< HEAD
<<<<<<< HEAD
function webaxpro_setup() {
	register_nav_menus(
		array(
		
			'duwn-menu' => esc_html__( 'footer-nav', 'webaxpro' ),
=======
function webaxpro_taxi_setup() {
	//load_theme_textdomain( 'webaxpro-taxi', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'header-nav', 'webaxpro-taxi' ),
			'duwn-menu' => esc_html__( 'footer-nav', 'webaxpro-taxi' ),
>>>>>>> 4624431 (oк)
=======
function webaxpro_setup() {
	register_nav_menus(
		array(
		
			'duwn-menu' => esc_html__( 'footer-nav', 'webaxpro' ),
>>>>>>> 39033c2 (wp w2c)
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	
	
}
<<<<<<< HEAD
<<<<<<< HEAD
add_action( 'after_setup_theme', 'webaxpro_setup' );

=======
>>>>>>> 4624431 (oк)
=======
add_action( 'after_setup_theme', 'webaxpro_setup' );

>>>>>>> 39033c2 (wp w2c)
function pine_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pine_content_width', 1200 );
}
add_action( 'after_setup_theme', 'pine_content_width', 0 );
// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 4624431 (oк)
=======

>>>>>>> 39033c2 (wp w2c)
function bootscore_child_enqueue_styles() {
	
	add_action( 'after_setup_theme', 'webaxpro_taxi_setup' );
  // style.css
 // wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');


  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(),"1.0");
	wp_enqueue_script( 'my-ajax-script', get_stylesheet_directory_uri() . '/js/my-ajax-script.js', array( 'jquery' ), '1.0', true );
	wp_localize_script( 'my-ajax-script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
  // custom.js
//  wp_enqueue_script('libs-js', get_stylesheet_directory_uri() . '/assets/js/libs.min.js', array(),"1.0", true);
  wp_enqueue_script('script-js', get_stylesheet_directory_uri() . '/assets/js/app.min.js', array(),"1.0", true);
}

add_action( 'after_setup_theme', 'truemisha_theme_setup' );
 
function truemisha_theme_setup() {
 
	// включаем поддержку
	add_theme_support( 'editor-styles' );
 
	// путь к таблице стилей относительно папки с темой
	add_editor_style( '/assets/css/style.min.css' );
 
}

/*function change_plugin_styles() {
	wp_register_style( 'main', get_stylesheet_directory_uri() . '/assets/css/style.min.css');
	wp_enqueue_style( 'main' );
}
add_action('admin_enqueue_scripts', 'change_plugin_styles');*/
<<<<<<< HEAD
<<<<<<< HEAD


=======
require get_template_directory() . '/inc/theme-func.php';
// WooCommerce
require get_template_directory() . '/woocommerce/woocommerce-functions.php';
>>>>>>> 4624431 (oк)


//apply_filters( 'post_type_link', $post_link, $post, $leavename, $sample );
//add_filter( 'post_type_link', 'faq_permalink', 1, 2 );
//function faq_permalink( $permalink, $post ){

//	// выходим если это не наш тип записи: без холдера %faqcat%
//	if( strpos( $permalink, '%type-work%' ) === false )
//		return $permalink;

//	// Получаем элементы таксы
//	$terms = get_the_terms( $post, 'type-work' );
//	// если есть элемент заменим холдер
//	if( ! is_wp_error( $terms ) && !empty( $terms ) && is_object( $terms[0] ) )
//		$term_slug = array_pop( $terms )->slug;
//	// элемента нет, а должен быть...
//	else
//		$term_slug = 'no-type-work';

//	return str_replace( '%type-work%', $term_slug, $permalink );
//}

add_filter( 'post_type_link', 'faq_permalink', 1, 2 );
function faq_permalink( $permalink, $post ) {
	if ( $post->post_type === 'works' && $term = get_the_terms( $post, 'type-work' ) ) {
			$term_slug = $term[0]->slug;
			
			// check if the term has a parent category
			if ( $term[0]->parent !== 0 ) {
					$parent_term = get_term( $term[0]->parent, 'type-work' );
					if ( $parent_term ) {
							$term_slug = $parent_term->slug . '/' . $term_slug;
					}
			}
			
			$permalink = str_replace( '%type-work%', $term_slug, $permalink );
	}
	return $permalink;
}




=======




//apply_filters( 'post_type_link', $post_link, $post, $leavename, $sample );
//add_filter( 'post_type_link', 'faq_permalink', 1, 2 );
//function faq_permalink( $permalink, $post ){

//	// выходим если это не наш тип записи: без холдера %faqcat%
//	if( strpos( $permalink, '%type-work%' ) === false )
//		return $permalink;

//	// Получаем элементы таксы
//	$terms = get_the_terms( $post, 'type-work' );
//	// если есть элемент заменим холдер
//	if( ! is_wp_error( $terms ) && !empty( $terms ) && is_object( $terms[0] ) )
//		$term_slug = array_pop( $terms )->slug;
//	// элемента нет, а должен быть...
//	else
//		$term_slug = 'no-type-work';

//	return str_replace( '%type-work%', $term_slug, $permalink );
//}

add_filter( 'post_type_link', 'faq_permalink', 1, 2 );
function faq_permalink( $permalink, $post ) {
	if ( $post->post_type === 'works' && $term = get_the_terms( $post, 'type-work' ) ) {
			$term_slug = $term[0]->slug;
			
			// check if the term has a parent category
			if ( $term[0]->parent !== 0 ) {
					$parent_term = get_term( $term[0]->parent, 'type-work' );
					if ( $parent_term ) {
							$term_slug = $parent_term->slug . '/' . $term_slug;
					}
			}
			
			$permalink = str_replace( '%type-work%', $term_slug, $permalink );
	}
	return $permalink;
}




>>>>>>> 39033c2 (wp w2c)
require_once get_template_directory() . '/inc/theme-func.php';
require get_template_directory()  . '/inc/accordion.php';
// WooCommerce
require get_stylesheet_directory() . '/woocommerce/woocommerce-functions.php';
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

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

add_action( 'admin_print_styles-toplevel_page_wpcf7', function() {
	if (empty($_GET['post'])) {
		return;
	}

	// подключаем редактор кода для HTML.
	$settings = wp_enqueue_code_editor( array( 'type' => 'text/html' ) );

	// ничего не делаем если CodeMirror отключен.
	if ( false === $settings ) {
		return;
	}

	// инициализация
	wp_add_inline_script( 
		'code-editor',
		sprintf( 'jQuery( function() { wp.codeEditor.initialize( "wpcf7-form", %s ); } );', wp_json_encode( $settings ) )  
	);

} );
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 39033c2 (wp w2c)
add_filter('wpcf7_autop_or_not', '__return_false');


// Регистрация AJAX-обработчика
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 741d184 (redy  to short ajax  qvery)
add_action( 'wp_ajax_get_products', 'get_products' );
add_action( 'wp_ajax_nopriv_get_products', 'get_products' );

function get_products() {
//	$term_id = $_POST['term_id'];
	$page = $_POST['page'];
	$posts_per_page = $_POST['count'];
	$term_id = isset($_POST['term_id']) ? intval($_POST['term_id']) : 0;
	
	$offset = ($page - 1) * $posts_per_page;

	$args = array(
			'post_type' => 'product',
			'posts_per_page' => $posts_per_page,
			'order' => 'ASC',
			'offset' => $offset,
			);

 if ($term_id > 0) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        );
<<<<<<< HEAD
    }
	$query = new WP_Query($args);
	$products = array();

	if ($query->have_posts()) {
			while ($query->have_posts()) {
					$query->the_post();
					global $product;
					$product_id = $product->get_id();
					$title = get_the_title($product_id);
					$permalink = get_the_permalink($product_id);
					$image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'medium')[0];
					$price =  wc_get_product($product_id)->get_price() ? wc_price($product->get_price()):"Цена не указана";
					$products[] = array(
							'title' => $title,
							'permalink' => $permalink,
							'image' => $image,
							'price' => $price,
					);
			}
	}

	wp_reset_postdata();

	wp_send_json($products);
}
=======
add_filter('wpcf7_autop_or_not', '__return_false');
>>>>>>> 4624431 (oк)
=======
add_action('wp_ajax_my_ajax_action', 'my_ajax_action_callback');
add_action('wp_ajax_nopriv_my_ajax_action', 'my_ajax_action_callback');

function my_ajax_action_callback() {
    // Получаем данные из AJAX-запроса
    $category = $_POST['category']; // Категория товаров, которую нужно отобразить
    $offset = isset( $_POST['offset'] ) ? intval( $_POST['offset'] ) : 0;

    // Запрос на получение товаров
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 1,
				'offset' => $offset,
        //'product_cat' => $category
    );
    $products = new WP_Query($args);

    // Обрабатываем полученные товары
    if ($products->have_posts()) {
        while ($products->have_posts()) {
            $products->the_post();
            global $product;
            // Выводим информацию о товаре
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<div>' . $product->get_price_html() . '</div>';
        }
    } else {
        echo 'Нет товаров для отображения';
=======
>>>>>>> 741d184 (redy  to short ajax  qvery)
    }
	$query = new WP_Query($args);
	$products = array();

	if ($query->have_posts()) {
			while ($query->have_posts()) {
					$query->the_post();
					global $product;
					$product_id = $product->get_id();
					$title = get_the_title($product_id);
					$permalink = get_the_permalink($product_id);
					$image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'medium')[0];
					$price =  wc_get_product($product_id)->get_price() ? wc_price($product->get_price()):"Цена не указана";
					$products[] = array(
							'title' => $title,
							'permalink' => $permalink,
							'image' => $image,
							'price' => $price,
					);
			}
	}

	wp_reset_postdata();

	wp_send_json($products);
}
>>>>>>> 39033c2 (wp w2c)
