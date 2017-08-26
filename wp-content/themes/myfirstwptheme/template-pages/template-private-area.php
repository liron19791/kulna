<?php

/*
Template Name: private area
*/

?>

<?php get_header(); ?>

<div class="row mrg">
    <div class="top-page">
		<img src="/wp-content/themes/myfirstwptheme/images/event.png" class="eventTitle">
    	<br>
    		<!-- plugins client -->
    	<br>
    	<img src="/wp-content/themes/myfirstwptheme/images/modaot.png" class="modaotTitle">
    </div>
</div>




<?php 
if (have_posts()){
	while (have_posts()){
		the_post();
		?>
		<p class="content"><?php the_content(); ?></p>
		
<?php
	} // end while
} // end if
?>	

<?php get_footer(); ?>