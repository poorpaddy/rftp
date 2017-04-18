<?php
/*
Template Name: Home Template
*/
get_header(); ?>

<?php
$background_images = get_field( 'background_images' );
$title = get_field( 'title' );
$sub_title = get_field( 'sub_title' );
if ( $background_images || $title || $sub_title || have_rows( 'climb' ) ): ?>
	<div class="slideshow">
		<div class="holder">
			<div class="container">
				<?php if ($title = get_field( 'title' )): ?>
					<h1><?php echo $title ?></h1>
				<?php endif ?>
				<?php if (have_rows( 'climb' )): ?>
					<form action="#" class="select-form">
						<select>
							<option class="hideme"><?php _e('Choose a Challenge','base') ?></option>
							<?php while ( have_rows( 'climb' ) ) : the_row(); ?>
								<option value="<?php echo esc_url(get_sub_field( 'link' ))?>"><?php the_sub_field( 'title' ) ?></option>
							<?php endwhile; ?>
						</select>
						<button type="submit" class="btn btn-danger"><?php _e('Join Challenge','base') ?></button>
					</form>
				<?php endif ?>
				<?php if ($sub_title = get_field( 'sub_title' )): ?>
					<span class="sub-title"><?php echo $sub_title ?></span>
				<?php endif ?>
			</div>
		</div>
		<?php if( $background_images ): ?>
			<div class="slideset">
				<?php foreach( $background_images as $image ): ?>
					<div class="slide" style="background-image: url(<?php echo $image['url']; ?>)"></div>
		        <?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif ?>

<div class="container">
	<?php if ( have_rows( 'slider' ) ) : ?>
		<div class="cycle-gallery">
			<div class="mask">
				<div class="slideset">
					<?php while ( have_rows( 'slider' ) ) : the_row(); ?>
						<div class="slide">
							<div class="holder clearfix">
								<?php if ($image = get_sub_field( 'image' )): ?>
									<div class="img-box">
										<img src="<?php echo $image['sizes']['517x388']?>" alt="<?php echo $image['alt']?>">
									</div>
								<?php endif ?>
								<?php if ($content = get_sub_field( 'content' )): ?>
									<div class="text-box">
										<?php echo $content ?>
									</div>
								<?php endif ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<a href="#" class="btn-prev"></a>
			<a href="#" class="btn-next"></a>
		</div>
	<?php endif; ?>
	<?php $title = get_field( 'title_1' ); ?>
	<section class="section hidden-xs">
		<?php if ($title): ?>
			<h2><?php echo $title ?></h2>
		<?php endif ?>
		<?php if ($shortcode = get_field( 'shortcode' )): ?>
			<?php echo do_shortcode($shortcode ); ?>
		<?php endif ?>
	</section>
	<?php 
	$title = get_field( 'title_2' ); 
	$description = get_field( 'description' );
	$image = get_field( 'image' );
	?>
	<?php if ($title or $description or $image): ?>
		<section class="col-section hidden-xs">
			<div class="row">
				<?php if ($title or $description): ?>
					<div class="col-xs-9">
						<?php if ($title): ?>
							<strong class="title"><?php echo $title ?></strong>
						<?php endif ?>
						<?php echo $description ?>
					</div>
				<?php endif ?>
				<?php if ($image): ?>
					<div class="col-xs-3">
						<div class="img-box text-center">
							<img src="<?php echo $image['sizes']['167x212'] ?>" alt="<?php echo $image['alt'] ?>">
						</div>
					</div>
				<?php endif ?>
			</div>
		</section>
	<?php endif ?>
</div>
<?php get_footer(); ?>