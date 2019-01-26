<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('borderBottom'); ?>>
  <div class="entry-content">
    <?php the_excerpt(); ?>
  </div>
	<div class="entry-meta">
    <?php the_title(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
