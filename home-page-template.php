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
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<a href="<?php the_field('page_1_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_1_img');?>') center center no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_1_text'); ?></p>
						<p class="sub-text"><?php the_field('page_1_price'); ?></p>
						<p class="sub-text"><?php the_field('page_1_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->
			<div class="col-sm-4">
				<a href="<?php the_field('page_2_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_2_img');?>') center center no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_2_text'); ?></p>
						<p class="sub-text"><?php the_field('page_2_price'); ?></p>
						<p class="sub-text"><?php the_field('page_2_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->
			<div class="col-sm-4">
				<a href="<?php the_field('page_3_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_3_img');?>') center center no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_3_text'); ?></p>
						<p class="sub-text"><?php the_field('page_3_price'); ?></p>
						<p class="sub-text"><?php the_field('page_3_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4-->
		</div><!-- end .row-->
		<div class="row">
			<div class="col-sm-4">
				<a href="<?php the_field('page_4_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_4_img');?>') center center no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_4_text'); ?></p>
						<p class="sub-text"><?php the_field('page_4_price'); ?></p>
						<p class="sub-text"><?php the_field('page_4_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->
			<div class="col-sm-4">
				<a href="<?php the_field('page_5_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_5_img');?>') center center no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_5_text'); ?></p>
						<p class="sub-text"><?php the_field('page_5_price'); ?></p>
						<p class="sub-text"><?php the_field('page_5_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->
			<div class="col-sm-4">
				<a href="<?php the_field('page_6_url'); ?>" class="bike">
					<div class="thumb" style="background: url('<?php the_field('page_6_img');?>') center center no-repeat; background-size: contain;"></div>
					<div class="thumb-info">
						<p><?php the_field('page_6_text'); ?></p>
						<p class="sub-text"><?php the_field('page_6_price'); ?></p>
						<p class="sub-text"><?php the_field('page_6_available'); ?></p>
					</div>
				</a>
			</div><!-- end .col-sm-4 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section><!-- end page thumbs -->


<?php endwhile; endif; ?>


<?php get_footer(); ?>