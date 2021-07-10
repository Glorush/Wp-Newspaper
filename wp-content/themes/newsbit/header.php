<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('title'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<header>
		<div class="bg-191">
			<div class="container">	
				<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
					<?php wp_nav_menu(array(
							'theme_location'	=> 'Header_top',
							'menu_class'		=> 'float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10'
						)); 
					?>					
					<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
						<li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-google"></i></a></li>
						<li><a href="#"><i class="ion-social-instagram"></i></a></li>
						<li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
					</ul>
					
				</div><!-- top-menu -->
			</div><!-- container -->
		</div><!-- bg-191 -->
		
		<div class="container">

			<?php the_custom_logo(); ?>
			
			<a class="right-area src-btn" href="#" >
				<i class="active src-icn ion-search"></i>
				<i class="close-icn ion-close"></i>
			</a>
			<div class="src-form">
				<form>
					<input type="text" placeholder="Search here">
					<button type="submit"><i class="ion-search"></i></a></button>
				</form>
			</div><!-- src-form -->
			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<?php wp_nav_menu(array(
				'theme_location'	=> 'Main_menu',
				'menu_class'		=> 'main-menu'
				)); 
			?>

			<ul class="main-menu" id="main-menu">
				<li><a href="02_archive-page.html">NEWS</a></li>
				<li class="drop-down"><a href="03_single-post.html">GUIDES & ANALYTICS<i class="ion-arrow-down-b"></i></a>
					<ul class="drop-down-menu drop-down-inner">
						<li><a href="#">PAGE 1</a></li>
						<li><a href="#">PAGE 2</a></li>
					</ul>
				</li>
				<li><a href="04_FAQS.html">EVENTS</a></li>
				<li><a href="05_FAQS-single.html">EXPLAINED</a></li>
				<li><a href="06_contact-us.html">ICON CLAENDER</a></li>
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
