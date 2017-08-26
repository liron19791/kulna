<?php

function register_my_menus(){
	register_nav_menus(array(
		'primary' => 'Primary',
		
	));
}
add_action('init', 'register_my_menus');

// loading css files to wp
function my_theme_enqueue_styles() {
	wp_enqueue_style('bootstrap-css', '/wp-content/themes/myfirstwptheme/css/bootstrap.min.css');
	wp_enqueue_style('bxslidergrid-css','/wp-content/themes/myfirstwptheme/css/grid.css');
	wp_enqueue_style('bxslider-css', '/wp-content/themes/myfirstwptheme/css/jquery.bxslider.css');
	wp_enqueue_style('parent-style','/wp-content/themes/myfirstwptheme/style.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// loading js files to wp
function my_theme_enqueue_scripts(){
	wp_enqueue_script('bootstrap-js','/wp-content/themes/myfirstwptheme/js/bootstrap.min.js', array('jquery'), true);
	wp_enqueue_script('bxslider-js','/wp-content/themes/myfirstwptheme/js/jquery.bxslider.js', array('jquery'), true);
	wp_enqueue_script('custom-js','/wp-content/themes/myfirstwptheme/js/script.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');



add_theme_support('post-formats', array(
	'aside', 'gallery', 'link', 'video'
));
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support( 'custom-header' );


// replace login logo, change link and title
function my_login_logo() { ?>
<style type="text/css">
    body.login div#login h1 a {
    	background-image: url('<?php echo get_template_directory_uri(); ?>/images/Asset 1@3x.png');
    	padding-bottom: 30px;
		background-size:300px 160px;
		height:160px;
		width:300px;
    }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return esc_html__('מכינת ירוחם', 'myfirstwptheme');
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
// add menu class 
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');



?>

