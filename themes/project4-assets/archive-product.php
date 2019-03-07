 <?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="grid-area">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>


<section>
			<header class="page-header shop-title">
				
					<h1> Shop Stuff </h1>

			</header><!-- .page-header -->
 			<section class="product-header">
			<?php $product_types=get_terms('product_type');?>
		   <?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
 			<div>
			 <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?></a>
			 
			 </div>
			 
            <?php endforeach; wp_reset_postdata(); ?>
 			</section> 
			 
			 
			 
			 
			 
			 <section>

			<?php /* Start the Loop */ ?>


			<div class="archive-content">
			<?php while ( have_posts() ) : the_post(); ?>
            <div class="archive-single">
				<?php
					get_template_part( 'template-parts/contents','shop' );
				?>
		    
			<?php the_posts_navigation(); ?>

</div>

			<?php endwhile; ?>
</div>


		<?php else : ?>

			<?php get_template_part( 'template-parts/contents', 'shop' ); ?>

		<?php endif; ?>
 	</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div>

<?php get_footer(); ?>
