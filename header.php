<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>">		
	<script type="text/javascript">
		var pathInfo = {
			base: '<?php echo get_template_directory_uri(); ?>/',
			css: 'css/',
			js: 'js/',
			swf: 'swf/',
		}
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
	<div id="wrapper">
		<header id="header">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<?php if ( $logo = get_field( 'logo', 'options' )): ?>
							<a class="navbar-brand" href="<?php echo esc_url(home_url('/')) ?>">
								<img src="<?php echo $logo['sizes']['335x89'] ?>" alt="<?php echo $logo['alt'] ?>">
							</a>
						<?php endif ?>
					</div>
					<?php ubermenu( 'main' , array( 'theme_location' => 'primary' ) ); ?>
				</div>
			</nav>
		</header>
		<main id="main">
			