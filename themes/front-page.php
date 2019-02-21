<?php
/**
* The main template file.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

    

        <?php $journal_posts= inhabitent_get_latest_posts();?>
        <?php foreach($journal_posts as $post):setup_postdata($post);?>
        <?php get_template_part( 'template-parts/content' ); //display content to test ?>
        <?php endforeach; wp_reset_postdata(); ?>



        <?php if ( have_posts() ) : ?>

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content' ); ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<section>
    <div class= svg_loader>
    <?php $terms = get_terms('product_types'): setup_postdata ($term) ?>
    <?php foreach($terms as $term)?>
    <?php echo 'p' ?>
<?php endforeach; wp_reset ?> 


<section>
           <?php $product_types=get_terms('product_type');?>
           <?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
              <div>
                 <img src=<?php echo get_template_directory_uri().'/assets/images/product-type-icons/' . $term->slug . '.svg'?>>
                 <p><?php echo $term->description ?></p>
                 <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?> stuff</a>
              </div>
           <?php endforeach; wp_reset_postdata(); ?>
        </section>

        
<?php get_footer(); ?>