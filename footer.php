			<footer class="footer" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
						<p>843 Carleton St, Berkeley CA </p>
						<p><a href="tel:+15108432453">(510) 843 - 2453</a></p>
<<<<<<< HEAD
						<?php bones_footer_links(); ?>
=======
					  
>>>>>>> b8e0c97832efa758a567e380e4d11dc4ade2d882
					</nav>

				</div> <!-- end #inner-footer -->

				</div> <!-- end .container -->

			</footer> <!-- end footer -->

		</div> <!-- end .wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->
<<<<<<< HEAD
		
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
=======
		<?php bones_footer_links(); ?>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

>>>>>>> b8e0c97832efa758a567e380e4d11dc4ade2d882
		<?php wp_footer(); ?>
		<!-- CUSTOM JS  -->
		<script type="text/javascript">
		jQuery(document).ready(function($){

     $('.navbar-toggle').bind( "touchstart", function(e){
<<<<<<< HEAD
          e.preventDefault();	
=======
          e.preventDefault();
>>>>>>> b8e0c97832efa758a567e380e4d11dc4ade2d882
            $('.navbar-collapse').collapse('toggle');
          });
			$('.slides').slick({
				autoplay: false,
				fade: false,
				speed: 1000,
				dots: true,
				slidesToShow: 1,
  		slidesToScroll: 1,
  		swipe: true	
				});
<<<<<<< HEAD
			$('.slider-for').slick({
				autoplay: true,
				fade: false,
				speed: 4000,
				dots: false,
				slidesToShow: 1,
				asNavFor: '.slider-nav',
  		slidesToScroll: 1,
  		swipe: true	
				});
			$('.slider-nav').slick({
				  slidesToShow: 3,
				  slidesToScroll: 1,
				  asNavFor: '.slider-for',
				  dots: false,
				  arrows: false,
				  centerMode: true,
				  focusOnSelect: true
				});
=======
>>>>>>> b8e0c97832efa758a567e380e4d11dc4ade2d882
			});

		</script>
		

		
	</body>

</html> <!-- end page. what a ride! -->