<?php
/**
 * Store Template
 *
   Template Name:  Store Page
 *
 */
?>
<?php get_header(); ?>

<div class="container">
	<div id="page-content">
		<div id="inner-content" class="wrap clearfix">
			<div id="full-width" class="clearfix" role="main">
					<header class="full-width-header">
						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
					</header> <!-- end custom-page-header -->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<section class="entry-content clearfix" itemprop="articleBody">
								<?php the_content(); ?>
							</section> <!-- end article section -->

					<?php endwhile; endif; ?>
				<!-- page thumbnails start here -->
				<?php if( have_rows('items') ): ?>
				<section id="items" role="promo" class="thumbs">

					

					<?php while( have_rows('items') ): the_row(); 

					// vars
					$link = get_sub_field('link');
					$image = get_sub_field('thumb');
					$text = get_sub_field('text');
					$price = get_sub_field('price');
					$available = get_sub_field('available');
					?>
						<div class="col-sm-4">
							<a href="<?php echo $link; ?>" class="bike">
								<div class="thumb" style="background: url('<?php echo $image; ?>') center center no-repeat; background-size: contain;"></div>
									<div class="thumb-info">
										<p><?php echo $text; ?></p>
										<p class="sub-text"><?php echo $price; ?></p>
										<p class="sub-text"><?php echo $available; ?></p>
								</div>
							</a><!-- .bike -->
						</div><!-- .items -->

					<?php endwhile; ?>
		
				</section> <!-- end items -->

							<?php endif; ?>

			</div> <!-- end #full-width -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
</div> <!-- end .container -->

<?php get_footer(); ?>
