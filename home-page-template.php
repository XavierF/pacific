<?php
/**
 * Home Page Template
 *
   Template Name:  Home Page Template
 *
 */
?>

<?php get_header(); ?>
<section id="description" role="tagline">
<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h1 class="tag"><?php bloginfo('description'); ?></h1>
			</div><!-- "col-sm-12" -->
		</div><!-- row -->
	</div><!-- .container -->
</section>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">

			<div class="item active" style="background: url('<?php the_field('slide_1_bg');?>') 50% 50% no-repeat; background-size: cover;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<blockquote>
								<?php the_field('slide_1_caption'); ?>
								<small>
									<?php the_field('slide_1_name'); ?>
								</small>
							</blockquote>
						</div><!-- end .col-lg-12-->
					</div><!-- end .row-->
				</div> <!-- end .container-->
		  </div><!-- end .item active -->

		<div class="item" style="background: url('<?php the_field('slide_2_bg');?>') 50% 50% no-repeat; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<blockquote>
							<?php the_field('slide_2_caption'); ?>
							<small>
								<?php the_field('slide_2_name'); ?>
							</small>
						</blockquote>
					</div><!-- end .col-lg-12-->
				</div><!-- end .row-->
			</div> <!-- end .container-->
		</div><!-- end .item -->

		<div class="item" style="background: url('<?php the_field('slide_3_bg');?>') 50% 50% no-repeat; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<blockquote>
							<?php the_field('slide_3_caption'); ?>
							<small>
								<?php the_field('slide_3_name'); ?>
							</small>
						</blockquote>
					</div><!-- end .col-lg-12-->
				</div><!-- end .row-->
			</div> <!-- end .container-->
		</div><!-- end .item -->

		<div class="item" style="background: url('<?php the_field('slide_4_bg');?>') 50% 50% no-repeat; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<blockquote>
							<?php the_field('slide_4_caption'); ?>
							<small>
								<?php the_field('slide_4_name'); ?>
							</small>
						</blockquote>
					</div><!-- end .col-lg-12-->
				</div><!-- end .row-->
			</div> <!-- end .container-->
		</div><!-- end .item -->

		<div class="item" style="background: url('<?php the_field('slide_5_bg');?>') 50% 50% no-repeat; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<blockquote>
							<?php the_field('slide_5_caption'); ?>
							<small>
								<?php the_field('slide_5_name'); ?>
							</small>
						</blockquote>
					</div><!-- end .col-lg-12-->
				</div><!-- end .row-->
			</div> <!-- end .container-->
		</div><!-- end .item -->

		<div class="item" style="background: url('<?php the_field('slide_6_bg');?>') 50% 50% no-repeat; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<blockquote>
							<?php the_field('slide_6_caption'); ?>
							<small>
								<?php the_field('slide_6_name'); ?>
							</small>
						</blockquote>
					</div>
				</div><!-- end .row-->
			</div> <!-- end .container-->
		</div><!-- end .item -->

	</div><!-- end .carousel-inner -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div><!-- end of carousel -->
</div> <!-- end #banner-->

<?php endwhile; endif; ?>

<script>
	//jQuery(document).ready(function($){
	//	$('#myCarousel').carousel();
//	});
</script>

<?php get_footer(); ?>