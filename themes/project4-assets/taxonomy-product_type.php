<?php
/**
* The template for displaying archive pages.
*
* @package Inhabitent Theme
*/
get_header(); ?>
 <div class="grid-area">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
                    single_term_title( '<h1 class="page-title">', '</h1>' );

                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>            
            </header><!-- .page-header -->

    <?php /* Start the Loop */?>
        <?php    $terms = get_terms(array(
       'taxonomy' => 'product_type',
       'hide_empty' => 0,
                   ));     ?>
        <div class="archive-terms">

            <?php foreach($terms as $term): ?>
       <div class="archive-term">
       <p class="term">
         <a href="<?php echo get_term_link( $term ); ?>"><?php echo
        $term->name; ?>  </a> </p>
       </div>
  <?php endforeach;?>

         </div>

       <section class="archive-product">

            <?php while ( have_posts() ) : the_post(); ?>
        <article class="archive-single">
                <?php
                    get_template_part( 'template-parts/content-product' );?>
    
                
         </article>
            <?php endwhile; ?>
        </section>
            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content-product', 'none' ); ?>
        <?php endif; ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>