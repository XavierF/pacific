<?php
/**
 * Full Content Template
 *
   Template Name:  Full Width Page
 *
 */
?>
<?php get_header(); ?>

		<div class="container">

			<div id="page-content">

				<div id="inner-content" class="wrap clearfix">

						<div id="full-width" class="clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					     

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="full-width-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
									
								</header> <!-- end custom-page-header -->

								<section id="items" role="promo" class="thumbs">
									<?php the_content(); ?>
									<!-- page thumbnails start here -->

		<div class="row">
			<div class="col-sm-4">
				<a href="<?php the_field('page_1_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_1_img');?>') center bottom no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_1_text'); ?></p>
						<p><?php the_field('page_1_price'); ?></p>
						<p><?php the_field('page_1_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->

			<div class="col-sm-4">
				<a href="<?php the_field('page_2_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_2_img');?>') center bottom no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_2_text'); ?></p>
						<p><?php the_field('page_2_price'); ?></p>
						<p><?php the_field('page_2_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->

			<div class="col-sm-4">
				<a href="<?php the_field('page_3_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_3_img');?>') center bottom no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_3_text'); ?></p>
						<p><?php the_field('page_3_price'); ?></p>
						<p><?php the_field('page_3_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4-->

		<div class="row">
			<div class="col-sm-4">
				<a href="<?php the_field('page_4_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_4_img');?>') center bottom no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_4_text'); ?></p>
						<p><?php the_field('page_4_price'); ?></p>
						<p><?php the_field('page_4_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->

			<div class="col-sm-4">
				<a href="<?php the_field('page_5_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_5_img');?>') center bottom no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_5_text'); ?></p>
						<p><?php the_field('page_5_price'); ?></p>
						<p><?php the_field('page_5_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->

			<div class="col-sm-4">
				<a href="<?php the_field('page_6_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_6_img');?>') center bottom no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_6_text'); ?></p>
						<p><?php the_field('page_6_price'); ?></p>
						<p><?php the_field('page_6_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->

			<div class="col-sm-4">
				<a href="<?php the_field('page_7_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_7_img');?>') center bottom no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_7_text'); ?></p>
						<p><?php the_field('page_7_price'); ?></p>
						<p><?php the_field('page_7_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->

			<div class="col-sm-4">
				<a href="<?php the_field('page_8_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_8_img');?>') center bottom no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_8_text'); ?></p>
						<p><?php the_field('page_8_price'); ?></p>
						<p><?php the_field('page_8_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->
		</div><!-- end .row -->
</section><!-- end page thumbs -->


								<footer class="article-footer">
									<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '' ); ?>

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
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

			</div> <!-- end .container -->


<?php get_footer(); ?>
