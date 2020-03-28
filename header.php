<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/wp-content/uploads/2016/07/u.png" />
<?php wp_head();?>
</head>
<body>

<!-- Area Top Menu -->
<div class="row top-menu-area">
	<div class="container">
		<a href="<?php bloginfo('url'); ?>/tentang-blog-ini">About</a>
		<a href="<?php bloginfo('url'); ?>/kontak">Contact</a>
		<a href="<?php bloginfo('url'); ?>/disclaimer">Disclaimer</a>
		<a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a>
	</div>
</div>
<!--/ Area Top Menu -->

<!-- Area Header -->
<div class="row header-area">
	<div class="container">
		<h1 class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a></h1>
		<h2 class="site-description"><span class="label label-default">.web.id</span> <?php bloginfo('description');?></h2>
	</div>
</div>
<!--/ Area Header -->

<!-- Container Konten -->
<div class="container">

	<!-- Area Navbar -->
	<div class="row"> 
		<nav class="col-md 12 navbar nav-area">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-utama">
					<b style="color: #555;">MENU <i class="fa fa-chevron-down"></i></b>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbar-utama">
				<?php wp_nav_menu(array ('menu_class' => 'nav navbar-nav',));?>
			</div>
		</nav>
	</div>
	<!--/ Area Navbar -->