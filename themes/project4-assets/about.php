<?php
/**
 * The template for displaying about page.
 *
 * Template name: About page
 * 
 * @package Inhabitent_theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php while (have_posts()) : the_post(); ?>
                <div class="about-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </main>
    </div>
<?php get_footer(); ?>