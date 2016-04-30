<?php
/**
 *
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: August 15, 2012
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
   <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;
  wp_title( '|', true, 'right' );
  // Add the blog name.
  bloginfo( 'name' );
  //Add the blog description for the home/front page.
  // $site_description = get_bloginfo( 'description', 'display' );
 // if ( $site_description && ( is_home() || is_front_page() ) )
 // echo " | $site_description";
  // Add a page number if necessary:
 // if ( $paged >= 2 || $page >= 2 )
 //   echo ' | ' . sprintf( __( 'Page %s', 'bootstrapwp' ), max( $paged, $page ) );
  ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Wordpress site Developed by Xavier F @ XavierF.Biz, Responsive Web Design Technology" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' );?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-57-precomposed.png">
 <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <?php wp_head(); ?>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-45289339-1', 'pacificebike.com');
  ga('send', 'pageview');
</script>
  </head>
  <body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
  <header class="main clearfix"> 
  <div class="container clearfix">
 <div class="logo clearfix"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/img/home-logo.gif"></a></div>
 <h1 class="brand clearfix"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
 <h3 class="tag"><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h2>
    <div class="navbar navbar-inverse navbar-relative-top">
           <div class="navbar-inner">
           <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>        
          <?php
           /** Loading WordPress Custom Menu  **/
           wp_nav_menu( array(
              'menu'            => 'main-menu',
              'container_class' => 'nav-collapse',
              'menu_class'      => 'nav',
              'fallback_cb'     => '',
              'menu_id' => 'main-menu',
              'walker' => new Bootstrapwp_Walker_Nav_Menu()
          ) ); ?>
        </div><!-- .navbar-inner -->
      </div><!-- .navbar -->
      <ul class="social">
      <li><a href="http://www.facebook.com/pages/Pacific-E-Bike/160241670739446" target="new" title="Connect with us on Facebook"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" title="Connect with us on Facebook"></a></li>
      <li><a href="https://twitter.com/" target="new" title="Follow us on Twitter"><img src="<?php bloginfo('template_directory'); ?>/img/tweet.png" title="Follow us on Twitter"></a></li>
      <li><a href="<?php bloginfo('rdf_url'); ?>" title="rss"><img src="<?php bloginfo('template_directory'); ?>/img/rss.png"></a></li>
      </ul>
<div class="info clearfix">
      <h2>843 Carleton, Berkeley CA, 94710</h2>
 <h2>1 - 510 - 843 - 2453</h2>
 </div><!-- .info -->
     </div><!-- .container -->
</header> <!-- End Header -->
<!-- Begin Template Content -->