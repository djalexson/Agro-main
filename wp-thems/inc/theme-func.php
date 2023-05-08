<?php
				// свой класс построения меню:
		class My_Walker_Nav_Menu extends Walker_Nav_Menu {
					
					// add classes to ul sub-menus
			function start_lvl( &$output, $depth = 0, $args = NULL ) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes =  $depth == 1 ? 'nav__menu'  :  'nav__dropdown';
		$output .= "\n" . $indent . '<ul class="' . $classes  . '">' . "\n";
	}
	
	// add ma0in/sub classes to li's and links
	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		global $wp_query;
		// Restores the more descriptive, specific name for use within this method.
		$item = $data_object;
foreach ($item ->classes as $key => $value) {

	$link=$value=="menu-item-has-children"?'nav__menu__link--triangle': "" ;
 
}

		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
		
		// tt
		$depth_classes = $depth == 0 ? 'nav__menu__item' : 'nav__dropdown__item';
		$depth_classes_link  =  $depth == 0 ? 'nav__menu__link' : 'nav__dropdown__link';
		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
		global	$activ;
		if ($item->current) {
			$activ = 'active';
		}else{
			
			$activ = '';
		}
	
	// build html
		$output .= $indent . '<li id="navbar-'. $item->ID . '"  class="'. $depth_classes ." ". $activ .'">';
		
		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="'.$depth_classes_link." ". $link .'"';
		
		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
		$args->before,
		$attributes,
		$args->link_before,
		apply_filters( 'the_title', $item->title, $item->ID ),
		$args->link_after,
		$args->after
	);
	
	// build html
	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}

}
class My_Walker_footer_Menu extends Walker_Nav_Menu {
	
	// add classes to ul sub-menus
	function start_lvl( &$output, $depth = 0, $args = NULL ) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'sub-menu',
			( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
			( $display_depth >=2 ? 'sub-sub-menu' : '' ),
			'menu-depth-' . $display_depth
		);
		$class_names = implode( ' ', $classes );
		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
		}

	// add main/sub classes to li's and links
	function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		global $wp_query;

		// Restores the more descriptive, specific name for use within this method.
		$item = $data_object;

		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// depth dependent classes
		$depth_classes = array(
			( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
			( $depth >=2 ? 'sub-sub-menu-item' : '' ),
			( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			'menu-item-depth-' . $depth
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
	global	$activ;
		if ($item->current) {
			$activ = 'active';
	}
	
		// build html
		$output .= $indent . '<li id="footer-'. $item->ID . '"  class="footer_items">';

		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="footer_links"';

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);

		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

}

<<<<<<< HEAD
<<<<<<< HEAD
function my_nav_menu( $args,$Walker,$class) {
	$attr= get_field("mob_menu","options")?'data-menu="'.get_field("mob_menu","options").'"':'';	
=======
//var_dump( get_field());
=======
>>>>>>> fd1596d (ок)
function my_nav_menu( $args,$Walker,$class) {
<<<<<<< HEAD
	$attr= get_field("mob","main-menu")?'data-menu="'.get_field("mob","main-menu" ).'"':'';
	
>>>>>>> 900b25c (ок)
=======
	$attr= get_field("mob_menu","options")?'data-menu="'.get_field("mob_menu","options").'"':'';	
>>>>>>> 39033c2 (wp w2c)
	$args = array_merge( [
		'container'       =>  false,
		'container_id'    =>  false,
		'container_class' =>  false,
		'menu_class'      => $class,
		'echo'            => false,
		'items_wrap'      => '<ul id="%1$s" '.$attr.'  class="%2$s">%3$s</ul>',
		'walker'          => new $Walker()
	], $args );

	echo wp_nav_menu( $args );
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 39033c2 (wp w2c)
}





function dynamic_products_shortcode($atts) {
	// Обработка атрибутов шорткода, если это необходимо
	$atts = shortcode_atts(array(
			'category' => 'all',
			'count' => 4,
	), $atts);

	// Логика обработки шорткода
	$args = array(
			'post_type' => 'product',
			'posts_per_page' => $atts['count'],
	);

	if ($atts['category'] !== 'all') {
			$args['tax_query'] = array(
					array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => $atts['category'],
					),
			);
	}

	$products = new WP_Query($args);

	$output= '<div class="row">';
	
	while ($products->have_posts()) {
		$products->the_post();
		
<<<<<<< HEAD
		$output .= '<div class="col-sm-12 col-xl-3" title="'.get_the_title() .'">';
			$output .= '<div class="catalog__card">';

			// Ссылка на изображение
			$output .= '<a href="' . get_the_permalink() . '" title="'.get_the_title() .'">  ';
=======
		$output .= '<div class="col-sm-12 col-xl-3">';
			$output .= '<div class="catalog__card">';

			// Ссылка на изображение
			$output .= '<a href="' . get_the_permalink() . '"> ';
>>>>>>> 39033c2 (wp w2c)
			$output .= '<img src="' . get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') . '" class="catalog__card_img"  alt="'. get_the_title() .'">';
			$output .= '</a>';

			// Название и описание
<<<<<<< HEAD
			$output .= '<h2 class="catalog__card_title" ><a title="'.get_the_title() .'" href="' . get_the_permalink() . '">' . wp_trim_words( get_the_title() , 2, "..." ) . '</a></h2>';
=======
			$output .= '<h2 class="catalog__card_title"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
>>>>>>> 39033c2 (wp w2c)
			$product = wc_get_product(get_the_ID());
			if ($product->get_price()) {
				$output .= '<p class="catalog__card_price">' . wc_price($product->get_price()) . '</p>';
			} else {
<<<<<<< HEAD
					$output .= '<p  class="catalog__card_price">Цена не указана</p>';
=======
					$output .= '<span  class="catalog__card_price">Цена не указана</span>';
>>>>>>> 39033c2 (wp w2c)
			}			
			// Цена

			$output .= '</div>';
			$output .= '</div>';
		}
		$output .= '</div>';
	
		wp_reset_postdata();
		
		return $output;
}
add_shortcode('dynamic_products', 'dynamic_products_shortcode');

<<<<<<< HEAD
function dynamic_img_shortcode($atts) {
	// Обработка атрибутов шорткода, если это необходимо
	$atts = shortcode_atts(array(
		'id_post' => "on",
	), $atts);
	$output="";
if( $atts["id_post"] != "on"){
	if ( get_field('works_img_all',$atts["id_post"]) ){

		foreach (  get_field('works_img_all',$atts["id_post"]) as $key => $value) {

			if(!empty($value["works_img"])){

				$output .= '<div class="col-sm-6 col-xl-3"><a href="'.$value["works_img"].'" style="display:block;"><img src="'.$value["works_img"].'" alt="photo" class="catalog__photo"></div>';
			}else{
				
				$output .= '<div class="col-sm-6 col-xl-3"><img src="/wp-content/uploads/2023/05/nophoto.png" alt="photo" class="catalog__photo"></div>';
			}
		
		}

	} 
	
	
	
}
return $output ;
// Логика обработки шорткода
}
add_shortcode('dynamic_img', 'dynamic_img_shortcode');
=======
}
>>>>>>> 900b25c (ок)
=======
>>>>>>> 39033c2 (wp w2c)
