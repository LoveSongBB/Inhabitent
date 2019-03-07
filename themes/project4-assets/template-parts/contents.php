<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php echo get_the_permalink(); ?>">
			<?php the_post_thumbnail( 'large' ); ?>
</a>
		<?php endif; ?>
    <div class="archive-meta">   
		<div class="archive-meta-title">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
</div>
<div class="archive-meta-price">
		<span><?php echo CFS()->get('price'); ?></span>
</div>
</div>
		<?php if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->


</article><!-- #post-## -->