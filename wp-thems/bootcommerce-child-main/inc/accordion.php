<?php
// Создаем функцию для вывода меню через Worker класс
function wp_bootstrap_accordion_menu($location) {
    // Получаем текущее меню
       $menu_items = wp_get_nav_menu_items($location);
			 if ($menu_items) {
				 echo '<div class="accordion accordion-flush" id="accordionExample">';
				 var_dump($menu_items);
				 
				 foreach ($menu_items as $item) {
					 // Получаем данные пункта меню
					 $has_children = in_array('menu-item-has-children', $item->classes);
					 $title = $item->title;
            $url = $item->url;
            
            // Выводим пункт меню в виде аккордеона
            echo '<div class="accordion-item">';
            echo '<div class="accordion-header" id="heading'.$item->ID.'"">';
          
					  if ($has_children) {
							echo '<button data-href="'.$url.'" id="collapse'.$item->ID.'" class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapse'.$item->ID.' aria-expanded="false" aria-controls="collapseOne">'.$title.'</button>';
					} else {
							echo '<a class="card-link" href="'.$url.'">'.$title.'</a>';
					}
            echo '</div>';
						if ($has_children) {
            echo '<div id="collapse'.$item->ID.'" class="collapse" data-parent="#accordion">';
            echo '<div class="accordion-body">';
            echo '<ul class="catalog__list_hide">';
            
            // Выводим подпункты меню
            if ($item->menu_item_parent == 0) {
                foreach ($menu_items as $sub_item) {
                    if ($sub_item->menu_item_parent == $item->ID) {
                        echo '<li class="catalog__item"><a href="'.$sub_item->url.'">'.$sub_item->title.'</a></li>';
                    }
                }
            }
            
            echo '</ul>';
            echo '</div>';
            echo '</div>';
					}
            echo '</div>';
        }
        
        echo '</div>';
    }
}
?>
