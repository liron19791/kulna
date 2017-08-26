<?php get_header(); ?>

<?php

if(have_posts()){
	while(have_posts()){
		the_post();
		?>
		<div><?php the_post_thumbnail('medium'); ?></div>
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		<p>this post was written by: <?php the_author(); ?></p>
		<p>published at:<?php the_time('G:i'); ?></p>
		<p class="tags"><?php if(has_tag()){
			the_tags();
			}else{
				echo 'No Tags.';
				} ?></p>
		<p class="categories"><?php if(has_category()){
			the_category();
			}else{
				echo 'No Categories';
				} ?></p>
		<p>Device Color:</p>
		<div class="device-color" style="width:30px;height:30px;background-color: <?php the_field('device_color'); ?>;"></div>
		<p class="device-memory">Device Memory: <?php the_field('device_memory'); ?></p>
		<div class="comments">
			<?php
				if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
			?>
		</div>
<?php
	}
}

?>

<?php get_footer(); ?>