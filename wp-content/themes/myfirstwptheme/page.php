<?php get_header(); ?>

<?php 
if (have_posts()){
	while (have_posts()){
		the_post();
		?>
		<div class="page_image"><?php the_post_thumbnail('medium'); ?></div>
		<h1 class="title"><?php the_title(); ?></h1>
		<p class="content"><?php the_content(); ?></p>
		<p class="author">this page was written by: <?php the_author(); ?></p>
		<p class="time">this page was published in: <?php the_time('G:i'); ?></p>
<?php
	} // end while
} // end if
?>

<?php get_footer(); ?>