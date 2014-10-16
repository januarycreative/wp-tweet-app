<?php get_header(); ?>

	<?php the_title();?>
		
	<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
			<?php the_excerpt();?>
		<?php endwhile; ?>
	
		<?php else : ?>
			<p>No posts found. Try another search?</p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>
