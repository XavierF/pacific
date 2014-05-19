			<footer class="footer" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					  <?php bones_footer_links(); ?>
					</nav>

					

				</div> <!-- end #inner-footer -->

				</div> <!-- end .container -->

			</footer> <!-- end footer -->

		</div> <!-- end .wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		<!-- CUSTOM JS  -->
		<script>


    	$( function()
    	{
    		$( '#nav li:has(ul)' ).doubleTapToGo();

</script>
		<script>
			
				jQuery('li.trigger-contact a').attr('id', 'contact-us');
			
		</script>
	</body>

</html> <!-- end page. what a ride! -->
