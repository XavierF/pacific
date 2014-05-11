<?php
/*
Template Name: Custom Page Template
*/
?>
<?php get_header(); ?>

<div class="container">
	<div id="page-content">
			<header class="custom-page-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header> <!-- end page header -->

			<div id="inner-content" class="wrap clearfix">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<section class="entry-content clearfix" itemprop="articleBody">
						
						<div class="row">
							<div class="sub-header col-md-12">
								
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<h4><?php the_field('page_tagline'); ?></h4>
								<?php the_content(); ?>
							</div><!-- .col-md-6 -->
							<div class="col-md-6"><!-- right column -->
								<?php the_field('right_column'); ?>
								<hr>
								<h4>"Best prices and service in town"</h4>
								<a class="yelp" href="http://www.yelp.com/biz/pacific-e-bike-berkeley" title="yelp" target="_blank"></a>
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
