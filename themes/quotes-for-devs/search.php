<?php
/**
 * The template for displaying search results pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main main-content" role="main">
		<i class="fas fa-quote-left quote-home"></i>

		<section class="quotes-area">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php qod_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</section>
		<i class="fas fa-quote-right quote-home"></i>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
