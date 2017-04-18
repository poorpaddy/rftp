</main>
<div class="footer" style="background-color: #e5e5e5">
	<div class="container">
		<div class="row">
			<?php $logo = get_field( 'logo_footer', 'options' ); ?>
			<?php $link = get_field( 'link', 'options' ); ?>
			<?php if ($logo and $link): ?>
				<div class="col-xs-12  col-sm-4 text-center">
					<a href="<?php echo esc_url($link) ?>">
						<img src="<?php echo $logo['sizes']['365x105'] ?>" alt="<?php echo $logo['alt'] ?>">
					</a>
				</div>
			<?php endif ?>
			<?php if( has_nav_menu( 'footer_left' ) ):?>
				<div class="col-xs-4 hidden-xs">
					<nav>
						<?php if (function_exists('wps_get_menu_name')): ?>
							<span class="sub-title"><?php echo wps_get_menu_name('footer_left') ?></span>
						<?php endif ?>
						<?php 
						wp_nav_menu( array(
							'container' 	 => false,
							'theme_location' => 'footer_left',
							'menu_class'     => 'footer-list list-unstyled',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							)
						);	
						?>
					</nav>
				</div>
			<?php endif ?>
			<?php if( has_nav_menu( 'footer_right' ) ):?>
				<div class="col-xs-4 hidden-xs">	
					<nav>
						<?php if (function_exists('wps_get_menu_name')): ?>
							<span class="sub-title"><?php echo wps_get_menu_name('footer_right') ?></span>
						<?php endif ?>
						<?php 
						wp_nav_menu( array(
							'container' 	 => false,
							'theme_location' => 'footer_right',
							'menu_class'     => 'footer-list list-unstyled',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							)
						);	
						?>

					</nav>
				</div>
			<?php endif ?>
		</div>
		<?php 
		$title = get_field( 'copy', 'options' );
		$link = get_field( 'link_for_copy', 'options' );
		?>
		<footer id="footer" class="text-center">
			<span class="copy">&copy;<?php _e('Copyright','base') ?> <?php echo date( 'Y' ); ?><br> <?php if($title and $link):?><a href="<?php echo esc_url($link) ?>"><?php echo $title ?></a><?php endif ?></span>
		</footer>
	</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>