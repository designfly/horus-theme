<?php 

if(!defined('ORTGEO_THEME_DIR')) {
	//define('ORTGEO_THEME_DIR', ABSPATH.'wp-content/themes/'.get_template().'/');
	define('ORTGEO_THEME_DIR', get_theme_root().'/'.get_template().'/');
}	

if(!defined('ORTGEO_THEME_URL')) {
	define('ORTGEO_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

// menu

if(function_exists('register_nav_menus')) {
		register_nav_menus(array(
			'main_nav' => 'Główne menu nawigacji'
		));
	}

	// przekierowanie z posttypes

require_once ORTGEO_THEME_DIR.'libs/posttypes.php';


// sidebary

if(function_exists(register_sidebar)) {
register_sidebar(array(
		'name' => 'Stopka (O firmie)',
		'id' => 'stopka-ofirmie-widget',
		'description' => 'Widgety w sidebarze w stopce',
		'before_widget' => '<div class="col-md-3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

register_sidebar(array(
		'name' => 'Stopka (Aktualności)',
		'id' => 'stopka-news-widget',
		'description' => 'Widgety w sidebarze w stopce',
		'before_widget' => '<div class="col-md-3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

register_sidebar(array(
		'name' => 'Stopka (Kontakt)',
		'id' => 'stopka-kontakt-widget',
		'description' => 'Widgety w sidebarze w stopce',
		'before_widget' => '<div class="col-md-3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));




}


 function pdc_ads_dashboard_widget_function() {
 	echo "<a href='instrukcja/instrukcja.pdf'>» Dodawanie nowej oferty / edycja istniejącej</a></br>";
 	echo "<a href='instrukcja/instrukcja.pdf'>» Dodawanie Nowej realizacji / edycja istniejącej</a></br>";
 	echo "<a href='instrukcja/instrukcja.pdf'>» Edycją Menu / dodawanie nowych pozycji</a></br>";
 	echo "<a href='instrukcja/instrukcja.pdf'>» Edycja informacji 'O Firmie'</a></br>";
 	echo "<a href='instrukcja/instrukcja.pdf'>» Edytowanie Stopki</a></br>";
 	echo "<a href='instrukcja/instrukcja.pdf'>» Edycja danych kontaktowych w naglówku</a></br></br><hr>";
 	echo '<p><a href="http://www.designfly.pl" target="_blank"><small>www.designfly.pl</small></a> | <a href="http://www.host.designfly.pl" target="_blank"><small>www.host.designfly.pl</small></a> | <a href="http://www.flydrive.pl" target="_blank"><small>www.flydrive.pl</small></a></p>';
 echo' <iframe src="http://www.host.designfly.pl/promo" width="100%" height="200px"></iframe> ';
 } 


 function pdc_ads_add_dashboard_widgets() {
 	wp_add_dashboard_widget('pdc_ads_dashboard_widget', ' Instrukcja szablonu OrtGeo - wykonawca : designfly.pl', 'pdc_ads_dashboard_widget_function');
 }

 add_action('wp_dashboard_setup', 'pdc_ads_add_dashboard_widgets' );


?>
