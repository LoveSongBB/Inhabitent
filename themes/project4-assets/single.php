<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="grid-container">
	<div id="primary" class="content-area container content-page">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>


			<div class="social-links">
                    <button type="button" class='btn inverse-btn'>
                        <i class='fab fa-facebook'></i>
                        Like
                    </button>
                    <button type="button" class='btn inverse-btn'>
                        <i class='fab fa-twitter'></i>
                        Tweet
                    </button>
                    <button type="button" class='btn inverse-btn'>
                        <i class='fab fa-pinterest'></i>
                        Pin
                    </button>
                </div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
			</div>
<?php get_footer(); ?>
