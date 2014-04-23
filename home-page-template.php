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

<div>
	<div class="tag">
		<h1><?php bloginfo('description'); ?></h1>
	</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active" style="background: url('<?php the_field('slide_1_bg');?>') fixed no-repeat; background-size: cover;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<blockquote>
								<?php the_field('slide_1_caption'); ?>
								<small>
									<?php the_field('slide_1_name'); ?>
								</small>
							</blockquote>
						</div>
						<div class="col-lg-5">
							
						</div>
					</div><!-- end .row-->
				</div> <!-- end .container-->
		</div>
		<div class="item" style="background: url('<?php the_field('slide_2_bg');?>') fixed no-repeat; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<blockquote>
							<?php the_field('slide_2_caption'); ?>
							<small>
								<?php the_field('slide_1_name'); ?>
							</small>
						</blockquote>
					</div>
					<div class="col-lg-5">
						
					</div>
				</div><!-- end .row-->
			</div> <!-- end .container-->
		</div>
		<div class="item" style="background: url('<?php the_field('slide_3_bg');?>') fixed no-repeat; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<blockquote>
							<?php the_field('slide_3_caption'); ?>
							<small>
								<?php the_field('slide_1_name'); ?>
							</small>
						</blockquote>
					</div>
					<div class="col-lg-5">
						
					</div>
				</div><!-- end .row-->
			</div> <!-- end .container-->
	</div>
		<div class="item" style="background: url('<?php the_field('slide_4_bg');?>') fixed no-repeat; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<blockquote>
							<?php the_field('slide_4_caption'); ?>
							<small>
								<?php the_field('slide_1_name'); ?>
							</small>
						</blockquote>
					</div>
					<div class="col-lg-5">
						
					</div>
				</div><!-- end .row-->
			</div> <!-- end .container-->
		</div>
		<div class="item" style="background: url('<?php the_field('slide_5_bg');?>') fixed no-repeat; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<blockquote>
							<?php the_field('slide_5_caption'); ?>
							<small>
								<?php the_field('slide_1_name'); ?>
							</small>
						</blockquote>
					</div>
					<div class="col-lg-5">
						
					</div>
				</div><!-- end .row-->
			</div> <!-- end .container-->
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div><!-- end of carousel -->
</div> <!-- end #banner-->

<?php endwhile; endif; ?>

<script>
	jQuery(document).ready(function($){
		$('#myCarousel').carousel();
	});
</script>

<?php get_footer(); ?>
