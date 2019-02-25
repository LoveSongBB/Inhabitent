<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">



			<div class = "contant_info">
			<h2> Contact Info </h2>
                <p>     <i class="far fa-envelope"></i><a href="#"> info@inhabitent.com </a></p>
                <p> <i class="fas fa-phone"></i><a href="#"> 778-456-7891 </a> </p>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-google-plus-g"></i>
</div>




			<div class = "business_hours">
			<h3 class="orange-title"> Business Hours </h3>
			<span><strong> Monday-Friday</strong>: 9am to 5pm </span> <br>
			<span><strong> Saturday</strong>: 10am to 2pm </span> <br>
			<span> <strong>Sunday</strong>: Closed </span> 
</div>


			<div class="inhabitent-logo"><a href="<?php echo get_home_url(); ?>"> 
			<img src="<?php echo get_template_directory_uri();?>/images/inhabitent-logo-text.svg" alt="inhabitent-logo"/></a> 
			</div> 
			
			
			
		</div><!-- .site-info -->
		<section class = "copyright"> 
			<p class="upper-case"> Copyright &copy; 2019 Inhabitent </p>
			</section>	
	</footer><!-- #colophon -->


		</div><!-- #page -->




		<?php wp_footer(); ?>

	</body>
</html>
