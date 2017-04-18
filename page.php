<?php get_header(); ?>
<?php if (has_post_thumbnail()): ?>
	<div class="visual small" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_id(),'full')?>)"></div>
<?php elseif($image = get_field( 'background', 'options' )): ?>
	<div class="visual small" style="background-image: url(<?php echo $image['url']?>)"></div>
<?php endif ?>
<div class="container">
	<div class="text-section">
		<?php the_title( '<div class="title"><h1>', '</h1></div>' ); ?>
		<div class="wrap">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php edit_post_link( __( 'Edit', 'base' ) ); ?>
			<?php endwhile; ?>
			<?php wp_link_pages(); ?>
			<?php comments_template(); ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
