<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main " role="main">
    <i class="fas fa-quote-left quote-home"></i>
    <div class="about-quote">
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
      </header><!-- .page-header -->
      
      <h2>Quote Authors</h2>
      <ul class="author-list">
        <?php
          $nos = array(
            'post_type'=>'post',
            'order'=>'DSC',
            'offset'=>0,
            'numberposts'=>-1,
          );

          $postList = get_posts( $nos ); 
          
            foreach ( $postList as $post ) : setup_postdata( $post ); ?>
              <li><a href="<?php echo get_permalink();?>"><?php the_title();?></a></li>
        <?php endforeach; wp_reset_postdata(); ?>
        </ul>

        <div class="categories-list">
          <h2>Categories</h2>
            <ul class="categories">
              <?php wp_list_categories('title_li='); ?> 
            </ul>
        </div>
        
        <div class="tags-list">
          <h2>Tags</h2>
            <?php
            $tags = get_tags();
            if ($tags) {
            ?>
              <ul class="tags"><?php
                foreach ($tags as $tag) {
                  echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '"' . '>' . $tag->name.'</a></li>';
                  }
                  echo '<li><a href="#">View All</a><span class="arrow"></span>
                  </li>'; ?>
              </ul>
            <?php }?> 
          </div>
        </div>
    <i class="fas fa-quote-right quote-home"></i>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>