<?php  


function Newsbit_Theme_supports(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('custom-logo', array(
          'height' => 100,
          'width' => 300,
          'flex-width' => true,
          'flex-height' => true,
	));

	register_nav_menus(array(
		'Header_top'  	=> 'Header Top Menu',
		'Main_menu'		=> 'Main Menu',
		'Footer_menu'	=> 'Footer Menu'
	));



}

add_action('after_setup_theme','Newsbit_Theme_supports');





function Newsbit_theme_Scripts(){

	// style-register
	wp_register_style('Fonts', 'https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700');
	wp_register_style('bootstrap', get_template_directory_uri().'/plugin-frameworks/bootstrap.css');
	wp_register_style('icon', get_template_directory_uri().'/fonts/ionicons.css');
	wp_register_style('main_style', get_template_directory_uri().'/common/styles.css');

	// style_call
	wp_enqueue_style('Fonts');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('icon');
	wp_enqueue_style('main_style');



	wp_register_script('juquery', get_template_directory_uri().'/plugin-frameworks/jquery-3.2.1.min.js');
	wp_register_script('tehter', get_template_directory_uri().'/plugin-frameworks/tether.min.js');
	wp_register_script('Bootstrap', get_template_directory_uri().'/plugin-frameworks/bootstrap.js');
	wp_register_script('main_script', get_template_directory_uri().'/common/scripts.js');

	wp_enqueue_script('juquery');
	wp_enqueue_script('tehter');
	wp_enqueue_script('Bootstrap');
	wp_enqueue_script('main_script');

}
add_action('wp_enqueue_scripts','Newsbit_theme_Scripts');





add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'logo', $html );

    return $html;
}


function replace_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="drop-down-menu drop-down-inner" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','replace_submenu_class'); 




?>