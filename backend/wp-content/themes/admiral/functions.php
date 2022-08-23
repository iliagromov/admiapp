<?php

// CPT TAXONOMY

include('configure/cpt-taxonomy.php');

// Utilities

include('configure/utilities.php');

// CONFIG

include('configure/configure.php');

// JAVASCRIPT & CSS

include('configure/js-css.php');

// SHORTCODES

include('configure/shortcodes.php');

// ACF

include('configure/acf.php');

// HOOKS ADMIN

if (is_admin()) {
	include('configure/admin.php');
}

add_action('after_setup_theme', function () {
	register_nav_menu('headerNavigation', 'Header navigation');
	register_nav_menu('menuNavigation', 'Catalog navigation');
	register_nav_menu('footerNavCol1', 'Footer Проживание');
	register_nav_menu('footerNavCol2', 'Footer Бани');
	register_nav_menu('footerNavCol3', 'Footer Кухня');
	register_nav_menu('footerNavCol4', 'Footer Отдых');
	register_nav_menu('footerNavCol5', 'Footer Информация');
});

function wp_nav_custom_menu($menu_name)
{
	// $menu_name = 'nav-primary'; // specify custom menu name $marker="icon-heart"
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '' . "\n";
		foreach ((array) $menu_items as $key => $menu_item) {

			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t" . '<a class="page-link" href="' . $url . '">' . $title . '</a>' . "\n";
		}
	} else {
		$menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

function mobile_menu($location) {
	$menu = '';

	$locations = get_nav_menu_locations();
	if($locations && isset($locations[$location])) {

			$menuObject = wp_get_nav_menu_object($locations[$location]);
			$items = wp_get_nav_menu_items($menuObject);

			$parentMenu = [];
			$childMenu = [];

			foreach((array) $items as $key => $item) {
					if(!$item->menu_item_parent) {
							$parentMenu[] = $item;
					}
					else {
							$childMenu[$item->menu_item_parent][] = $item;
					}
			}

			$menu .= '<ul class="list-unstyled mPopupNav__menu main_nav-mobile text-center mb-4--list main_nav-mobile text-center mb-4--list-level_1">';

			foreach($parentMenu as $key => $item) {

					$hasChild = !empty($childMenu[$item->db_id]);

					// Открываем элемент первого уровня
					$menu .= '<li class="mPopupNav__link '.($hasChild ? 'has_child hasChild' : '').' main_nav-mobile text-center mb-4--item">';
					$menu .= '<a class="main_nav-mobile text-center mb-4--link" href="'.(!$hasChild ? $item->url : '#').'">';
					$menu .= '<span>'.$item->title.'</span></a>';
					$menu .= '</a>';

					// Если есть подменю, выводим его
					if(isset($childMenu[$item->db_id]) && !empty($childMenu[$item->db_id])) {

							$menu .= '<div class="childItem">';
							$menu .= '<div class="childItem__goBackBtn _level_1">';
							$menu .= '<span>'.$item->title.'</span>';
							$menu .= '</div>';
							$menu .= '<div class="mPopupNavScroll ps">';
							$menu .= '<ul class="childItem__childNav">';

							foreach($childMenu[$item->db_id] as $childItem) {
									// Выводим элемент второго уровня
									$menu .= '<li class="main_nav--item main_nav--item-level_2">';
									$menu .= '<a class="main_nav--link" href="'.$childItem->url.'"><span>'.$childItem->title.'</span></a>';
									$menu .= '</li>';
							}

							$menu .= '</ul>';
							$menu .= '</div>';
							$menu .= '</div>';
					}

					// Закрываем элемент первого уровня
					$menu .= '</li>';

			}
			$menu .= '</ul>';
	}

	return $menu;
}

// Добавляем класс к элементу li меню
add_filter('nav_menu_css_class', 'filter_menu_li_class', 10, 4);
function filter_menu_li_class($classes, $item, $args, $depth) {

    $footerMenus = [
        'footer_menu_1',
        'footer_menu_2',
        'footer_menu_3',
        'footer_menu_4',
		'footer_menu_5'
    ];

    if($args->theme_location === 'header_menu') {

        if($args->is_mobile) {
            $classes[] = 'mPopupNav__link';
            $classes[] = 'main_nav-mobile';
            $classes[] = 'text-center';
            $classes[] = 'mb-4--item';

            if(in_array('menu-item-has-children', $classes)) {
                $classes[] = 'has_child';
                $classes[] = 'hasChild';
            }
        }
        else {
            $classes[] = 'main_nav--item';
            $classes[] = 'main_nav--item-level_' . ($depth + 1);

            if(in_array('menu-item-has-children', $classes))
                $classes[] = 'has_child';
        }
    }
    elseif(in_array($args->theme_location, $footerMenus)) {
        $classes[] = 'footer_navList--item';
        $classes[] = 'footer_navList--item-level' . ($depth + 1);

        if(in_array('menu-item-has-children', $classes))
            $classes[] = 'footer_navList--item-has_child';

        if(!$depth) {
            $iconKey = '';
            foreach($classes as $class) {
                if(strstr($class, 'icon-')) {
                    $iconKey = str_replace('icon-', '', $class);
                }
            }

            $args->before = '<span class="footer_navList--iconized">
                                <span class="footer_navList--icon">
                                     ' . get_svg_icon($iconKey, [19, 19]) . '
                                </span>';
            $args->after = '</span>';
        }
        else {
            $args->before = '';
            $args->after = '';
        }
    }

    return $classes;
}


// Добавляем класс к ссылке меню
add_filter('nav_menu_link_attributes', 'filter_menu_a_class', 10, 4);
function filter_menu_a_class($atts, $item, $args, $depth) {

    if($args->theme_location === 'header_menu') {
        if($args->is_mobile) {
            $atts['class'] = 'main_nav-mobile text-center mb-4--link';
        }
        else
            $atts['class'] = 'main_nav--link';
    }

    return $atts;
}

add_action('init', function () {

		register_post_type('faq', [
				'labels' => [
						'name'               => 'Faq',
						'singular_name'      => 'Faq',
						'add_new'            => 'Add new',
						'add_new_item'       => 'Add new faq',
						'edit_item'          => 'Edit new faq',
						'new_item'           => 'New faq',
						'view_item'          => 'View faq',
						'search_items'       => 'Search faq',
						'not_found'          => 'Faq not found',
						'not_found_in_trash' => 'Faq not found in trash',
						'parent_item_colon'  => '',
						'menu_name'          => 'Faq'
				],
				'public' => true,
				'has_archive' => true,
				'rewrite' => [
						'with_front' => true
				]
		]);
});
add_action('init', function () {

		register_post_type('bath', [
				'labels' => [
						'name'               => 'ПРОЖИВАНИЕ',
						'singular_name'      => 'ПРОЖИВАНИЕ',
						'add_new'            => 'Add new',
						'add_new_item'       => 'Add new bath',
						'edit_item'          => 'Edit new bath',
						'new_item'           => 'New bath',
						'view_item'          => 'View bath',
						'search_items'       => 'Search bath',
						'not_found'          => 'bath not found',
						'not_found_in_trash' => 'bath not found in trash',
						'parent_item_colon'  => '',
						'menu_name'          => 'ПРОЖИВАНИЕ'
				],
				'public' => true,
				'has_archive' => true,
				'rewrite' => [
						'with_front' => true
				]
		]);
});
add_action('init', function () {

		register_post_type('spa', [
				'labels' => [
						'name'               => 'SPA-ПРОГРАММЫ',
						'singular_name'      => 'SPA-ПРОГРАММА',
						'add_new'            => 'Add new',
						'add_new_item'       => 'Add new spa',
						'edit_item'          => 'Edit new spa',
						'new_item'           => 'New spa',
						'view_item'          => 'View spa',
						'search_items'       => 'Search spa',
						'not_found'          => 'spa not found',
						'not_found_in_trash' => 'spa not found in trash',
						'parent_item_colon'  => '',
						'menu_name'          => 'SPA-ПРОГРАММЫ'
				],
				'public' => true,
				'has_archive' => true,
				'rewrite' => [
						'with_front' => true
				]
		]);
});


add_action( 'after_setup_theme', 'mywoo_add_woocommerce_support' );
	function mywoo_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
