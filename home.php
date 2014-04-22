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
				<h1 class="tag"><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h1>
			</div><!-- "col-sm-12" -->
		</div><!-- row -->
	</div><!-- .container -->
</section>
<section id="hero" role="slider">
	
	<!-- dynamic slider starts here -->
	<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php //endwhile; endif; ?>  
	<!-- and ends here -->

	
</section>
<section id="classes">
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
