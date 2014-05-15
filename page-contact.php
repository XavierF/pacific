<?php
/*
Template Name: Contact Page Template
*/
?>

<?php get_header(); ?>

<div class="container">
	<div id="custom-page-content">
			<header class="custom-page-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header> <!-- end page header -->

			<div id="inner-content" class="wrap clearfix">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<section class="entry-content clearfix" itemprop="articleBody">
						<div class="sub-head row">
								<div class="left col-md-5">
										<h3><?php the_field('page_tagline'); ?></h3>
								</div><!-- end .left col-md-5 <--></-->
						</div><!-- end .row -->


						<div class="row">
							<div class="left col-md-6">
								<?php the_content(); ?>
									<div class="visible-md visible-lg"><!-- google map starts here-->
										<h2>Find us in Berkeley</h2>
										<p>(510) 843 - 2453</p>
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3150.1380694641416!2d-122.29379259999999!3d37.8570597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857ef2200c0469%3A0xe800db178ed7e187!2s843+Carleton+St!5e0!3m2!1sen!2sus!4v1399783363925" width="100%" height="400" frameborder="0" style="border:0"></iframe>
									</div><!-- google map ends here -->
							</div><!-- .col-md-6 -->

							<div class="right col-md-6"><!-- right column -->
								<?php echo FrmFormsController::show_form(2, $key = '', $title=true, $description=true); ?> 
								<hr>
								<h4>"Best prices and service in town"</h4>
									<a class="yelp" href="http://www.yelp.com/biz/pacific-e-bike-berkeley" title="yelp" target="_blank"></a>

									<div class="visible-xs visible-sm"><!-- google map starts here -->
										<h2>Find us in Berkeley</h2>
										<p>(510) 843 - 2453</p>
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3150.1380694641416!2d-122.29379259999999!3d37.8570597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857ef2200c0469%3A0xe800db178ed7e187!2s843+Carleton+St!5e0!3m2!1sen!2sus!4v1399783363925" width="100%" height="300" frameborder="0" style="border:0"></iframe>
									</div><!-- google map ends here -->

							</div><!-- .col-md-6 -->
						</div><!-- .row -->
					</section> <!-- end article section -->

					<footer class="article-footer">
						<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '' ); ?></p>
					</footer> <!-- end article footer -->

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
							<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

							<?php endif; ?>

						
			</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

</div> <!-- end .container -->

<?php get_footer(); ?>

