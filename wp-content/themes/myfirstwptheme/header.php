<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php echo get_bloginfo('name'); ?> - <?php wp_title(); ?></title>
	
	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
	body,h1,h2,h3,h4,h5,h6 {font-family: 'Open Sans Hebrew', sans-serif;}
	.w3-bar,h1,button {font-family: 'Open Sans Hebrew', sans-serif;}
	.fa-anchor,.fa-coffee {font-size:200px}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body <?php body_class('mybodyclass'); ?>>

<!-- Navbar -->
<div class="top-top">
  <div class="bar w3-white w3-card-2 w3-left-align w3-large" >
  	<div class="menu-img">
  		  <a href="http://www.kulna.org.il"><img src="/wp-content/themes/myfirstwptheme/images/Asset 1@3x.png"></a>
  	</div>
  	<div class="menu-button">
  		  <a href="http://www.kulna.org.il/#section7"><img src="/wp-content/themes/myfirstwptheme/images/Asset 2@3x.png"></a>
  	</div>
  	   <a class="brside w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="togglemenusmall()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<?php
	$header_menu_name = is_user_logged_in() ? 'primary' : 'primary';
    if(has_nav_menu($header_menu_name)) {
		$header_menu = array(
      'theme_location' => $header_menu_name,
      'container' => 'nav',
      'container_class' => 'custom-menu',
      'container_id' => '',
      'menu_class' => '',
      'echo' => true,
		);
		wp_nav_menu($header_menu);
    }
?>
	
  </div>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large w3-animate-right">
  
    <a href="http://www.kulna.org.il/#section2" class="w3-bar-item w3-button w3-padding-large w3-right-align">למה אנחנו</a>
    <a href="http://www.kulna.org.il/#section3" class="w3-bar-item w3-button w3-padding-large w3-right-align">החוויה שלנו</a>
    <a href="http://www.kulna.org.il/#section4" class="w3-bar-item w3-button w3-padding-large w3-right-align">הבוגרים</a>
    <a href="http:/http://www.kulna.org.il/#section5" class="w3-bar-item w3-button w3-padding-large w3-right-align">הצוות</a>
    <a href="http://www.kulna.org.il/#section6" class="w3-bar-item w3-button w3-padding-large w3-right-align">תהליך המיון</a>
    <a href="http://www.kulna.org.il/%d7%90%d7%96%d7%95%d7%a8-%d7%90%d7%99%d7%a9%d7%99/" class="w3-bar-item w3-button w3-padding-large w3-right-align">אזור אישי</a>

    

  </div>
</div>


</header>