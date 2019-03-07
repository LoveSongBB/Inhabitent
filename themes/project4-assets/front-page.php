<?php
/**
* The main template file.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<section class="banner">

    <img class="logo" src=" <?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="inabitent-logo-full"/>

</section>
    
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

    <section class="shop-categories">
        <h2 class="journal-title"> Shop Stuff </h2>
        <div class="shop-terms">

           <?php $product_types=get_terms('product_type');?>
           <?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
              <div class="shop-term">
                 <img src=<?php echo get_template_directory_uri().'/images/' . $term->slug . '.svg'?>>
                 <p class="terms-paragraph"><?php echo $term->description ?></p>
                 <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?> stuff</a>
              </div>
           <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </section>
        
        <h2 class="journal-title">Inhabitent Journal </h2>
      <?php
  $args = array( 'post_type' => 'post', 'order' => 'date', 'order' => 'DESC', 'posts_per_page' => '3' );
  $journal_posts = get_posts( $args ); // returns an array of posts
?>
<section class="front-page-journal">
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<article class="journal-entry">
           <?php the_post_thumbnail( 'small' ); ?>
           <div class="journal-meta-box">
           <span class="journal-meta">
           <?php red_starter_posted_on(); ?>  <?php echo '/';
           comments_number('0 Comments', '1 Comment', '% Comments');
           ?>
           </span>


  <h3>
  <a class="journal-link" href="<?php echo get_the_permalink(); ?>">


  <?php the_title(); ?> </a>

  </h3>

  <a class="read-more" href="<?php echo get_the_permalink(); ?>">
  <button class="white-button"> 
      Read Entry
</button>
</a>
</div>
</article>
  <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata();
       ?>
</section>

<section class="adventure">
            <h2 class="adventure-heading">latest adventures</h2>
            <ul>
                <li class="canoe">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/canoe-girl.jpg"
                             alt="canoe"/>
                    </div>
                    <div class="adventure-box">
                        <h3 class="adventure-text">Getting Back to Nature in a Canoe</h3>
                        <a class="adventure-button" href="readmore">read more</a>
                    </div>
                </li>
                <li class="night">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/beach-bonfire.jpg"
                             alt="beach"/>
                    </div>
                    <div class="adventure-box"> 
                        <h3 class="adventure-text">A Night with Friends at the Beach</h3>
                        <a class="adventure-button" href="readmore">read more</a>
                    </div>
                </li>
                <li class="mountain">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/mountain-hikers.jpg"
                             alt="hikers"/>
                    </div>
                    <div class="adventure-box">
                        <h3 class="adventure-text">Taking in the View at Big Mountain</h3>
                        <a class="adventure-button" href="readmore">read more</a>
                    </div>
                </li>
                <li class="stars">
                    <div class="adventure-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/night-sky.jpg"
                             alt="stars"/>
                    </div>
                    <div class="adventure-box">
                        <h3 class="adventure-text">Star-Gazing at the Night Sky</h3>
                        <a class="adventure-button" href="readmore">read more</a>
                    </div>
                </li>
            </ul>
            <div class="more-adventure-area">
            <a class="more-adventure" href="moreadventures">more adventures</a>
</div>

</section>


        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>