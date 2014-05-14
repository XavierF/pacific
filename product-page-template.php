<?php
/**
 * Product Page Template
 *
   Template Name:  Product Page Template
 *
 */
?>
<?php get_header(); ?>

<div class="container">

			<div id="page-content">

				<header class="page-header">
									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>			
				</header> <!-- end page header -->

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<section class="entry-content clearfix" itemprop="articleBody">
										<?php the_content(); ?>

											<div class="visible-lg"><!-- google map starts here-->
											<h2>Find us in Berkeley</h2>
											<p>(510) 843 - 2453</p>
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

							<div class="row">
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

							<div class="row visible-xs visible-lg"><!-- visible phone and desktop -->
								<div class="specs">
									<h1><?php the_field('mph'); ?></h1>
									<small>MPH</small>
								</div><!-- end .specs -->

								<div class="specs">
									<h1><?php the_field('mile-range-2'); ?></h1>
									<small>MILE RANGE</small>
								</div><!-- end .specs -->

							</div><!-- end .row -->

							<div class="row">
								<div class="specs visible-sm visible-md"><!-- visible tablets -->
									<h1><?php the_field('mile-range-2'); ?></h1>
									<small>MILE RANGE</small>
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
						<h4>AVAILABLE IN STORE OR ONLINE</h4>
						<div class="buy-bkgd">
						<a href="<?php the_field('buy_online_link'); ?>" class="btn btn-primary btn-lg btn-block" target="" >BUY NOW</a>
						</div><!-- end buy-bkgd-->
					<hr>
							<ul class="social">
								<li>
										<a class="facebook" target=”_blank” href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?><?php wp_title(''); ?>"></a>
								</li>
								<li>
									<a class="instagram" href="#"></a>
								</li>
								<li>
										<a class="pinterest" href="#" id="ref_pr" href="http://pinterest.com/pin/create/bookmarklet/?media=<?php echo urlencode($share_image);?>&amp;url=<?php the_permalink() ?>&amp;is_video=false&amp;description=v"onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false;"></a>
								</li>
								<li>
									<a class="rss" href="<?php bloginfo('rss2_url'); ?>"></a>
								</li>
								<li>
									<a class="twitter" id="ref_tw" href="http://twitter.com/home?status=<?php wp_title(''); ?>+<?php the_permalink() ?>"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false;"></a>
								</li>
							</ul>
				<hr>
					<h4>"Best prices and service in town"</h4>
					<a class="yelp" href="http://www.yelp.com/biz/pacific-e-bike-berkeley" title="yelp" target="_blank"></a>

						<div class="visible-xs visible-sm visible-md"><!-- google map starts here -->
							<h2>Find us in Berkeley</h2>
							<p>(510) 843 - 2453</p>
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
      appId      : 'APP ID',                            
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


function FBShareOp(){
	var product_name   = 	'your title name';
	var description	   =	'description';
	var share_image	   =	'full image url '; // featured image
	var share_url	   =	'url to share';	
        var share_capt     =    'caption';
    FB.ui({
        method: 'feed',
        name: product_name,
        link: share_url,
        picture: share_image,
        caption: share_capt,
        description: description

    }, function(response) {
        if(response && response.post_id){}
        else{}
    });

}


</script>




<?php get_footer(); ?>
