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

				<div class="sidebar-bike col-md-4">

					<div class="row">
						<div class="specs">
							<h1><?php the_field('mile-range'); ?></h1>
							<small>MILE RANGE</small>
						</div> 
						<div class="specs">
							<h1><?php the_field('watts'); ?></h1>
							<small>WATTS</small>
						</div> 
					</div><!-- end .row -->

					<div class="row">
						<div class="specs">
							<h1><?php the_field('mph'); ?></h1>
							<small>MPH</small>
						</div> 
						<div class="specs">
							<h1><?php the_field('mile-range-2'); ?></h1>
							<small>MILE RANGE</small>
						</div>
					</div><!-- end .row -->

					<div class="row">
						<div class="specs">
							<h1><?php the_field('hrs-charge'); ?></h1>
							<small>HRS / CHARGE</small>
						</div>
						<div class="specs">
							<h1><?php the_field('battery'); ?></h1>
							<small><?php the_field('amps'); ?></small>
						</div>
						
					</div><!-- end .row -->
					<hr>
						<h1><?php the_field('price'); ?></h1>
						<h4>AVAILABLE IN STORE OR ONLINE</h4>
						<p><a href="#" class="btn btn-primary btn-lg btn-block" target="" >BUY NOW</a></p>
						<p class="delivery">SAME DAY DELIVERY ON GOOGLE EXPRESS</p>
	

				</div><!-- end #sidebar-bike-->
				<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #page-content -->

				</div> <!-- end .container -->

<?php get_footer(); ?>
