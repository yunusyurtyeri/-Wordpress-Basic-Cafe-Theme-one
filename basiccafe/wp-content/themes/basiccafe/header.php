<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php $favicon = get_field('fav_icon', 'option'); ?>
	<link rel="shortcut icon" href="<?php echo $favicon['url']; ?>" type="image/x-icon"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<?php include 'style.php'; ?>
</head>
<body>


	<!-- ***** Preloader Start ***** -->
	<div id="preloader">
		<div class="jumper">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>  
	<!-- ***** Preloader End ***** -->


	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="index.html" class="logo">
							<?php $site_logosu = get_field('site_logosu','option');?>
							<?php //echo "<pre>"; print_r($site_logosu); echo "</pre>";?>
							<img src="<?php echo $site_logosu['url'];?>" align="klassy cafe html template">
						</a>
						<!-- ***** Logo End ***** -->

						<!-- ***** Menu Start ***** -->
						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav', 'menu_id' => 'ana_manu')); ?>
						
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
    <!-- ***** Header Area End ***** -->