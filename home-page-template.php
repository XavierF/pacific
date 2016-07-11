<?php
/**
 * Home Page Template
 *
   Template Name:  Home Page Template
 *
 */
?>

<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="slideshow">

	
		<div class="slides">

			<div class="item" style="background: url('<?php the_field('slide_1_bg');?>') 50% 50% no-repeat; background-size: cover;">
				


							<blockquote>
								<?php the_field('slide_1_caption'); ?>
								<small>
									<?php the_field('slide_1_name'); ?>
								</small>
							</blockquote>
			
		  </div><!-- end .item -->

		<div class="item" style="background: url('<?php the_field('slide_2_bg');?>') 50% 50% no-repeat; background-size: cover;">
			
		
						<blockquote>
							<?php the_field('slide_2_caption'); ?>
							<small>
								<?php the_field('slide_2_name'); ?>
							</small>
						</blockquote>
				
		</div><!-- end .item -->
		<div class="item" style="background: url('<?php the_field('slide_3_bg');?>') 50% 50% no-repeat; background-size: cover;">
		
						<blockquote>
							<?php the_field('slide_3_caption'); ?>
							<small>
								<?php the_field('slide_3_name'); ?>
							</small>
						</blockquote>
				
		</div><!-- end .item -->
		<div class="item" style="background: url('<?php the_field('slide_4_bg');?>') 50% 50% no-repeat; background-size: cover;">
			
						<blockquote>
							<?php the_field('slide_4_caption'); ?>
							<small>
								<?php the_field('slide_4_name'); ?>
							</small>
						</blockquote>
			
		</div><!-- end .item -->

</div><!-- end .single-item -->

</section>
<?php endwhile; endif; ?>
<section id="description" role="tagline">
<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h1 class="tag"><?php bloginfo('description'); ?></h1>
			</div><!-- "col-sm-12" -->
		</div><!-- row -->
	</div><!-- .container -->
</section>

<!-- page thumbnails start here -->
<section id="items" role="promo" class="thumbs">

		<?php if( have_rows('items') ): ?>
	<div class="container">

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
					<div class="thumb" style="background: url('<?php echo $image; ?>') top center no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php echo $text; ?></p>
						<p class="sub-text"><?php echo $price; ?></p>
						<p class="sub-text"><?php echo $available; ?></p>
					</div>
				</a><!-- .bike -->
			</div><!-- .col-sm-4 -->

			<?php endwhile; ?>
		</div><!-- end .container -->
		<?php endif; ?>
	</section> <!-- end items -->

<?php get_footer(); ?>