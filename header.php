<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<!-- Google Chrome Frame for IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>

	<!-- mobile meta (hooray!) -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<!-- or, set /favicon.ico for IE10 win -->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

			<!-- FONTS -->
			<!--<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>-->

			<!-- wordpress head functions -->
			<?php wp_head(); ?>
			<!-- end of wordpress head -->

			<!-- drop Google Analytics Here -->
			<!-- end analytics -->
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/child.css">
		</head>

		<body <?php body_class(); ?>>

			<div class="wrapper">

				<header class="header" role="banner">
					<nav role="navigation">
						<div class="navbar navbar-inverse navbar-fixed-top">

							<section class="site-header">
							<div class="container">
								<div class="row">
								<div id="location" class="col-sm-6 pull-right"><p class="address">843 Carleton St | Berkeley CA &nbsp;&nbsp;<strong>(510) 843 - 2453</strong></p>
								</div><!-- location -->
							</div><!-- .row -->

							<div class="row">
								<div class="col-sm-4">
									<div class="logo"></div>
								</div>
								<div class="col-sm-8">
									<h1><a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a></h1>
								</div>
							</div><!-- .row -->
							</div><!-- .container -->

						</section>

							<div class="container">
								<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div><!-- navbar-header -->

								<div class="navbar-collapse collapse navbar-responsive-collapse">
									<?php bones_main_nav(); ?>
								</div><!-- navbar-collapse -->
							</div><!-- .container -->
						</div> <!-- navbar-fixed-top -->
						
					</nav>

				</header> <!-- end header -->
