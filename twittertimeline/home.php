<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>

	<div id="tweetswrapper">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
		
			<?php if (in_category('bookmark')) { ?>
			<div class="bookmark">
				<h3>Bookmarked at <?php the_date('g:i a F j, Y '); ?></h3>
				<p><strong>Note:</strong> <?php the_title(); ?>
			</div><!--end .bookmark-->
		
			<?php } else { ?>
			
			<div class="tweet">
				<?php $category = get_the_category(); ?>
				<h3><a href="http://twitter.com/<?php echo $category[0]->cat_name;?>" target="_blank"><?php echo $category[0]->cat_name;?></a></h3>
				<?php the_content(); ?>
				<p class="wp-date">Posted to WP at <?php the_time('g:i a F j, Y ');?></p>
			</div><!--end .post-->
			
			<?php } ?>
		<?php endwhile;?>
	</div><!--end #tweetswrapper-->
	
<?php get_sidebar();?>	
	
<?php get_footer();?>