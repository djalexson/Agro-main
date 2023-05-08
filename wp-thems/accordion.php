<?php
// Создаем функцию для вывода меню через Worker класс
function wp_bootstrap_accordion_menu($location) {
    // Получаем текущее меню
     
		function wp_get_menu_array($current_menu) {

			$array_menus = wp_get_nav_menu_items($current_menu);
			$menu = array();
		
			foreach ($array_menus as $array_menu) {
				if (empty($array_menu->menu_item_parent)){
					$curent_id = $array_menu->ID;
					$menu[$curent_id] = array(
						'id'         =>   $curent_id,
						'title'      =>   $array_menu->title,
						'href'        =>  $array_menu->url,
						'children'    =>   array()
					);
				}
		
				if (isset($curent_id) && $curent_id == $array_menu->menu_item_parent) {
					$submenu_id = $array_menu->ID;
					$menu[$curent_id]['children'][$array_menu->ID] = array(
						'id'         =>   $submenu_id,
						'title'      =>   $array_menu->title,
						'href'        =>  $array_menu->url,
						'children'    =>   array()
					);
				}
		
				if (isset($submenu_id) && $submenu_id == $array_menu->menu_item_parent) {
					$menu[$curent_id]['children'][$submenu_id]['children'][$array_menu->ID] = array(
						'id'         =>   $array_menu->ID,
						'title'      =>   $array_menu->title,
						'href'        =>  $array_menu->url,
					);
				}
			}
		
			return $menu;   
		}
		
	   	$menu_items = wp_get_menu_array($location);
		
			if ($menu_items) {
				 echo '<div class="accordion accordion-flush" id="accordionExample">';
				 
				 foreach ($menu_items as $key => $item) {
					
					 // Получаем данные пункта меню
					 $has_children = $item['children'];
					 $title = $item['title'];
					 $url = $item["href"];
            
            // Выводим пункт меню в виде аккордеона
            echo '<div class="accordion-item">';
            echo '<div class="accordion-header" id="heading'.$key.'">';
          
					  if ($has_children) {
							echo '<button data-href="'.$url.'"  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$key.'" aria-expanded="false" aria-controls="collapse'.$key.'">'.$title.'</button>';
					} else {
							echo '<a class="accordion-button"   href="'.$url.'">'.$title.'</a>';
					}
            echo '</div>';
						if ($has_children) {
            echo '<div id="collapse'.$key.'" class="accordion-collapse collapse" aria-labelledby="heading'.$key.'" data-bs-parent="#accordionExample">';
            echo '<div class="accordion-body">';
            echo '<ul class="catalog__list_hide">';
            
            // Выводим подпункты меню
            if ($has_children) {
                foreach ($has_children as $sub_item) {
                   
                        echo '<li class="catalog__item"><a href="'.$sub_item['href'].'">'.$sub_item['title'].'</a></li>';
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
