<?php
/**
* The main template file.
*
*Template Name:  Home page
* @package Inhabitent Theme
*/

get_header(); ?>
 <div class="grid-container">

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

  
      <?php
       //TODO get_posts of Journal Posts
       /*
       *Get the blog Journal Entries
       **/
  $args = array( 'post_type' => 'post', 'order' => 'date' );
  $journal_posts = get_posts( $args ); // returns an array of posts
?>
<section class="journal-page">
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
  <article class="journal-page-entry">
    <div class="journal-content">
           <?php the_post_thumbnail( 'large' ); ?>
           <span class="journal-page-meta"> <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
           <div class="journal-meta">
           <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
    </div>
           </span>
    </div>

           <div class="journal-entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
  <h3>
  <a href="<?php echo get_the_permalink(); ?>">

  </h3>

  <a class="read-more" href="<?php echo get_the_permalink(); ?>">
  <button>
  Read Entry
  </button>
  </a>

</article>
  <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata();
       ?>
</section>
        
        

        </main><!-- #main -->
    </div>
<!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>