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
	<meta name="developer" content="Xavier F @xavierf.info">

	<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<!-- or, set /favicon.ico for IE10 win -->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
			<meta property="fb:app_id" content="1432168570385075">

			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

			<!-- FONTS -->
			<!--<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>-->

			<!-- wordpress head functions -->
			<?php wp_head(); ?>
			<!-- end of wordpress head -->

			<!-- drop Google Analytics Here -->
			<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-45289339-1', 'pacificebike.com');
  ga('send', 'pageview');
</script>
			<!-- end analytics -->
		</head>

		<body <?php body_class(); ?>>

			<div class="wrapper">

				<header class="header" role="banner">
					<nav role="navigation">
						<div class="navbar navbar-inverse">

							<section class="site-header clearfix">
							<div class="container cleatfix">
								<div class="row">
									<div id="location" class="info col-sm-4"><p>843 Carleton St | Berkeley CA</p></div>
									<div id="phone" class="info col-sm-4 phone"><a href="tel:+15108432453">(510) 843 - 2453</a></div>
									<div id="email" class="info col-sm-4"><p><a href="mailto:info@pacificebike.com">info@pacificebike.com</a></p></div>
							</div><!-- .row -->

							<div class="row">
							
									<a class="navbar-logo" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"></a>
								
								
									<h1><a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a></h1>
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button><!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
							</div><!-- .row -->
							</div><!-- .container -->

						</section>

							<div class="container">
								
								<div class="navbar-header">
									
								</div><!-- navbar-header -->

								<div class="navbar-collapse collapse navbar-responsive-collapse">
									<?php bones_main_nav(); ?>
								</div><!-- navbar-collapse -->
							</div><!-- .container -->
						</div> <!-- navbar-fixed-top -->
						
					</nav>

				</header> <!-- end header -->
