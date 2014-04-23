<?php 
/*
Use this page if you want to create a custom homepage for 
your site. WordPress will look for home.php before index.php. If
you end up using a custom home.php page you can also use the 
blog.php page to display your blog posts. Simply rename or delete
this page template and the latest blog posts(index.php) will be the
homepage of your website. 
*/
?>
<?php get_header(); ?>
<?php
// The Query
//query_posts('cat=9');
?>
<?php //remove_filter ('the_content', 'wpautop'); ?>
<section id="description" role="tagline">
<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="tag">
				<h1><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h1>
			</div><!-- tag -->
			</div><!-- "col-sm-12" -->
		</div><!-- row -->
	</div><!-- .container -->
</section>
<section id="hero" role="slider" class="container-fluid">
<!-- carousel starts here -->
	<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
		<ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  		</ol>
			<div class="carousel-inner"><!-- carousel-wrapper -->
				<?php 
   $the_query = new WP_Query(array(
    'category_name' => 'Home', 
    'posts_per_page' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<div class="item active">
				
     			<div class="carousel-caption"><h3><?php the_title();?></h3></div>
     
  				<div style="background: url('<?php echo $image[0]; ?>') center center no-repeat; background-size: cover; height:700px; text-align:center;"></div>
     			
				</div><!--.item active -->
				<?php 
   endif; endwhile; 
   wp_reset_postdata();wp_reset_query();
  ?>
				<?php 
 $the_query = new WP_Query(array(
  'category_name' => 'Home', 
  'offset' => 1 
  ));
 while ( $the_query->have_posts() ) : 
 $the_query->the_post();
   ?>
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<div class="item">
					<div class="carousel-caption"><h3><?php the_title();?></h3></div>
     
  <div style="background: url('<?php echo $image[0]; ?>') center center no-repeat; background-size: cover; height:700px; text-align:center;"></div>
     			
				</div><!-- .item -->
<?php 
 endif; endwhile; 
 wp_reset_postdata();wp_reset_query();
?>
</div><!-- .carousel-inner -->
		<a class="left carousel-control" href="#carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a><!-- Controls -->	
 
</div><!-- and carousel ends here-->

	
</section><!-- end hero -->
<section id="items">
	<div class="container">
		<div class="row content">
			
			
			<div class="col-md-4">
				
			</div>

			<div class="col-md-4">
				
			</div>
			
			<div class="col-md-4">
				
			</div>
		</div><!-- .row -->

		<div class="row content">
      <div class="col-md-4">
      	

      <div class="col-md-4">
      	 
      </div>

      <div class="col-md-4">
				
		</div><!-- .row -->
	</div><!-- .container -->
</section>
<section id="social">
	<div class="container content">
		<div class="row">
			
		</div><!-- .row -->
	</div><!-- .container -->
</section>

<script>
	jQuery(document).ready(function($){
		$('.carousel').carousel('pause');
	});
</script>
<?php get_footer(); ?>
