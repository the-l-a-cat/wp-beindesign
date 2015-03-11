<!DOCTYPE html>
<html >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	 <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<!--<header >
			<div>
				<?php
					//if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php// bloginfo( 'name' ); ?></a></h1>
					<?php// else : ?>
						<p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p>
					<?php// endif;

					//$description = get_bloginfo( 'description', 'display' );
					//if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php //echo $description; ?></p>
					<?php// endif;
				?>
				
			</div>
		</header> -->
		<?php if ( is_page_template( 'main-template.php' ) ) {?>
		<nav class="up_menu">
			<ul>
				<li class='5'>О нас </li>
				<li class='8'> Портфолио </li>
				<li class='11'> Контакты </li>
				<li class='7'> Услуги</li>
				<li class='23'> Блог </li>
			</ul>
		</nav>
		<?php } else { ?>
		<nav class="up_menu"><a href="<?php echo get_page_link(48); ?>"> На Главную</a></nav>
		<?php }; ?>

	
