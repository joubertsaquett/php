<?php 

// Incluindo nosso arquivo customizer
require get_template_directory() . '/inc/customizer.php';

remove_action('wp_head','wp_generator');

add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length) {
	return 20; //Nova quantidade de caracteres do excerpt
}

// Função para carregamento dos scripts
function carrega_scripts(){
	// Enfileirando Bootstrap
	wp_enqueue_style( 'semantic_css', get_template_directory_uri() . '/dist/semantic.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/dist/components/reset.css', array(), null, 'all');
	wp_enqueue_style( 'site', get_template_directory_uri() . '/dist/components/site.css', array(), null, 'all');
	wp_enqueue_style( 'container', get_template_directory_uri() . '/dist/components/container.css', array(), null, 'all');
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/dist/components/grid.css', array(), null, 'all');
	wp_enqueue_style( 'header', get_template_directory_uri() . '/dist/components/header.css', array(), null, 'all');
	wp_enqueue_style( 'image', get_template_directory_uri() . '/dist/components/image.css', array(), null, 'all');
	wp_enqueue_style( 'menu', get_template_directory_uri() . '/dist/components/menu.css', array(), null, 'all');
	wp_enqueue_style( 'divider', get_template_directory_uri() . '/dist/components/divider.css', array(), null, 'all');
	wp_enqueue_style( 'dropdown', get_template_directory_uri() . '/dist/components/dropdown.css', array(), null, 'all');
	wp_enqueue_style( 'segment', get_template_directory_uri() . '/dist/components/segment.css', array(), null, 'all');
	wp_enqueue_style( 'button', get_template_directory_uri() . '/dist/components/button.css', array(), null, 'all');
	wp_enqueue_style( 'list', get_template_directory_uri() . '/dist/components/list.css', array(), null, 'all');
	wp_enqueue_style( 'icon', get_template_directory_uri() . '/dist/components/icon.css', array(), null, 'all');
	wp_enqueue_style( 'sidebar', get_template_directory_uri() . '/dist/components/sidebar.css', array(), null, 'all');
	wp_enqueue_style( 'transition', get_template_directory_uri() . '/dist/components/transition.css', array(), null, 'all');
	
	wp_enqueue_script( 'jquery.min', 'https://semantic-ui.com/examples/assets/library/jquery.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'jquery3', 'https://code.jquery.com/jquery-3.1.1.min.js', array(), null, true);
	wp_enqueue_script( 'visibility', get_template_directory_uri() . '/dist/components/visibility.js', array(), null, true);	
	wp_enqueue_script( 'sidebar', get_template_directory_uri() . '/dist/components/sidebar.js', array(), null, true);	
	wp_enqueue_script( 'transition', get_template_directory_uri() . '/dist/components/transition.js', array(), null, true);	
	wp_enqueue_script( 'semantic_js', get_template_directory_uri() . '/dist/semantic.min.js', array(), null, true);	
	
	// Enfileirando estilos e scripts próprios
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
	wp_enqueue_script( 'template', get_template_directory_uri(). '/js/menu.js', array(), null, true);	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );



// Função para registro de nossos menus
register_nav_menus(
	array(
		'menu_rodape1' => 'Menu Rodapé 1',
		'menu_rodape2' => 'Menu Rodapé 2',
		'menu_rodape3' => 'Menu Rodapé 3',
		'menu_rodape4' => 'Menu Rodapé 4',
		'sidebar' => 'Menu SideBar',

	)
);


// Adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));
add_theme_support('html5', array('search-form'));
add_theme_support('custom-logo', array(
	'height'	=> 110,
	'width'		=> 191
));


// Registrando sidebars
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'		=> 'Menu Subscribe',
			'id'		=> 'sidebar-1',
			'description'	=> 'Menu Subscribe',
			'before_widget'	=> '<div class="ui fluid action input">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="ui header">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'sidebar',
			'id'		=> 'sidebar-2',
			'description'	=> 'Menu Sidebar',
			'before_widget'	=> '<li>',
			'after_widget'	=> '</li>',
			'before_title'	=> '<h2 class="ui header">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'menulateral',
			'id'		=> 'menulateral-1',
			'description'	=> 'Menu Lateral Blog',
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '',
			'after_title'	=> '',			
		)
	);
	
}

function sidebar_home(){
	$menu_name = 'sidebar'; // this is the registered menu name

	if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
		$menu_items = wp_get_nav_menu_items($menu->term_id);
	// echo '<div class="ui vertical menu">';
		foreach ( (array) $menu_items as $key => $menu_item ) :
			$title = $menu_item->title;
			$url = $menu_item->url;
			$class = $menu_item->classes; // get array with class names
			if ( get_the_ID() == $menu_item->object_id ) { // check for current page
			echo '<a class="item active" href="' . $url . '">';
			} else {
			echo '<a class="item" href="' . $url . '">';
			}
			//echo '<i class="item ' . implode(' ', $class) . '"></i>' . $title;
			echo $title;
			echo '</a>';
		endforeach;
	// echo '</div>';
	else :
		//echo '<div class="ui error message"><p>Menu "' . $menu_name . '" not defined.</p></div>';
	endif;
}





function footer($var){
	$menu_name = $var; // this is the registered menu name

	if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
		$menu_items = wp_get_nav_menu_items($menu->term_id);
	// echo '<div class="ui vertical menu">';
		foreach ( (array) $menu_items as $key => $menu_item ) :
			$title = $menu_item->title;
			$url = $menu_item->url;
			$class = $menu_item->classes; // get array with class names
			if ( get_the_ID() == $menu_item->object_id ) { // check for current page
			echo '<a class="item active" href="' . $url . '">';
			} else {
			echo '<a class="item" href="' . $url . '">';
			}
			//echo '<i class="item ' . implode(' ', $class) . '"></i>' . $title;
			echo $title;
			echo '</a>';
		endforeach;
	// echo '</div>';
	else :
		//echo '<div class="ui error message"><p>Menu "' . $menu_name . '" not defined.</p></div>';
	endif;
}


function mytheme_comment($comment, $args, $depth) {
	echo "123";
}



