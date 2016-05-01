<?php
/*
 * 
 *
  Template Name: Product Page
 *
 */
?>
<?php get_header(); ?>
<?php $sURL = urlencode(
            'http' .
            ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://' .
            $_SERVER['HTTP_HOST'] .
            $_SERVER['PHP_SELF']
        );
?>

<div class="container">

			<div id="page-content">

				<header class="page-header">
									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>			
				</header> <!-- end page header -->

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">

							<!-- slider starts here... -->
							<section id="slides" class="product-image">

										<?php if( have_rows('slider-image') ): ?>

										<div class="slider-for">

												 <?php 	// loop through the rows of data
												    while( have_rows('slider-image') ) : the_row();
												    //vars
												    $image = get_sub_field('image'); 

										    	?>

												<div >
													<img src="<?php echo $image; ?>" class="img-responsive" />
												</div>
  											<?php  endwhile; ?>
											</div><!-- .slider-for -->

									      <div class="slider-nav">
												 	<?php // loop through the rows of data
													    while( have_rows('slider-image') ) : the_row();
													    // display a sub field value
													    //vars
													    $image = get_sub_field('image'); 
												   ?>

											<div >
												<img src="<?php echo $image; ?>" class="img-responsive"/>
											</div>
									  <?php endwhile; ?>
									</div><!-- .slider-nav -->

									<?php endif; ?>
								</section> <!-- end slides-->

							<!-- end of slider -->

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<section class="entry-content clearfix" itemprop="articleBody">
	

										<?php the_content(); ?>

											<div class="map visible-lg"><!-- google map starts here-->
											<h3>Find us in Berkeley</h3>
											<a href="tel:+15108432453" class="phone">(510) 843 - 2453</a>
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3150.1380694641416!2d-122.29379259999999!3d37.8570597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857ef2200c0469%3A0xe800db178ed7e187!2s843+Carleton+St!5e0!3m2!1sen!2sus!4v1399783363925" width="100%" height="400" frameborder="0" style="border:0"></iframe>
										</div><!-- google map ends here -->
									
									</section> <!-- end article section -->
								</article> <!-- end article -->
							<?php endwhile; else : ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the product-page-template.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

							<?php endif; ?>
							

						</div> <!-- end #main -->
						
						<div class="sidebar-bike col-md-5 clearfix">

							<div class="row clearfix">
								<div class="specs">
									<h1><?php the_field('mile-range'); ?></h1>
									<small>MILE RANGE</small>
								</div><!-- end .specs -->

								<div class="specs">
									<h1><?php the_field('watts'); ?></h1>
									<small>WATTS</small>
								</div> <!-- end .specs -->

								<div class="specs visible-sm visible-md"><!-- visible tablets -->
									<h1><?php the_field('mph'); ?></h1>
									<small>MPH</small>
								</div><!-- end .specs -->

							</div><!-- end .row -->

							<div class="row visible-xs visible-lg clearfix"><!-- visible phone and desktop -->
								<div class="specs">
									<h1><?php the_field('mph'); ?></h1>
									<small>MPH</small>
								</div><!-- end .specs -->

								<div class="specs">
									<h1><?php the_field('mile-range-2'); ?></h1>
									<small><a href="#" title="Pedal Assist Range">ASSIST RANGE</a></small>
								</div><!-- end .specs -->

							</div><!-- end .row -->

							<div class="row clearfix">
								<div class="specs visible-sm visible-md"><!-- visible tablets -->
									<h1><?php the_field('mile-range-2'); ?></h1>
									<small><a title="Pedal Assist Range">ASSIST RANGE</a></small>
								</div><!-- end .specs -->

								<div class="specs">
									<h1><?php the_field('hrs-charge'); ?></h1>
									<small>HRS / CHARGE</small>
								</div><!-- end .specs -->

								<div class="specs">
									<h1><?php the_field('battery'); ?></h1>
									<small><?php the_field('amps'); ?></small>
								</div><!-- end .specs -->

							</div><!-- end .row -->

					<hr>
						<h1><?php the_field('price'); ?></h1>
						<h3>AVAILABLE IN STORE OR ONLINE</h3>

						<div class="buy-bkgd">
						<a href="<?php the_field('buy_online_link'); ?>" class="btn btn-primary btn-lg btn-block" target="_blank" >BUY NOW</a>
						</div><!-- end buy-bkgd-->
					<hr>
							<ul class="social clearfix">
								<li>
										<a class="mail share" target=”_blank” href="mailto:?subject=Pacific E-Bike <?php the_title(); ?> &body=<?php the_permalink() ?> "></a>
								</li>
								<li>
										<a class="facebook share" href="https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(<?php the_permalink(); ?>)""></a>
								</li>
								<li>
									<a class="instagram share" href="#"></a>
								</li>
								<li>
										<a class="pinterest share" href="#" id="ref_pr" href="http://pinterest.com/pin/create/bookmarklet/?media=<?php echo urlencode($share_image);?>&amp;url=<?php the_permalink() ?>&amp;is_video=false&amp;description=v"onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false;"></a>
								</li>
								<li>
									<a class="twitter share" id="ref_tw" href="http://twitter.com/home?status=<?php wp_title(''); ?>+<?php the_permalink() ?>"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false;"></a>
								</li>
							</ul>
				<hr>
					<em><?php the_field('testimonial'); ?></em>
					<a class="yelp" href="http://www.yelp.com/biz/pacific-e-bike-berkeley" title="yelp"></a>

						<div class="map visible-xs visible-sm visible-md"><!-- google map starts here -->
							<h3>Find us in Berkeley</h3>
							<a href="tel:+15108432453" class="phone">(510) 843 - 2453</a>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3150.1380694641416!2d-122.29379259999999!3d37.8570597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857ef2200c0469%3A0xe800db178ed7e187!2s843+Carleton+St!5e0!3m2!1sen!2sus!4v1399783363925" width="100%" height="300" frameborder="0" style="border:0"></iframe>
						</div><!-- google map ends here -->
				
				</div><!-- end #sidebar-bike-->


				</div> <!-- end #inner-content -->

			</div> <!-- end #page-content -->

				</div> <!-- end .container -->

<script type="application/javascript">
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '1432168570385075}',                            
      status     : true,                                 
      xfbml      : true                                  
    });

  };
  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


}
</script>





<?php get_footer(); ?>
