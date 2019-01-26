<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main main-content" role="main">
    <i class="fas fa-quote-left quote-home"></i>
    <?php if(is_user_logged_in()): ?>
      <form class="wordpress-ajax-form" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
      <h1><?php the_title();?></h1>
      <label for="quote-author">Author of Quote</label>
        <input id="quote-author" type="text" name="quote-author" autocomplete="off">

        <label for="quote-submit">Quote</label>
        <textarea id="quote-submit" type="text" name="quote-submit" autocomplete="off"></textarea>

        <label for="quote-where">Where did you find this quote? (e.g. book name)</label>
        <input id="quote-where" type="text" name="quote-where" autocomplete="off">

        <label for="quote-url">Provided the URL of the source. if avilable.</label>
        <input id="quote-url" type="text" name="quote-url" autocomplete="off">
        
        <button type="submit" id="submitQuote">Submit Quote</button>
      </form>
      <?php else : ?>
      <div class="quotes-area">
        <h1><?php the_title();?></h1>
        <p>Sorry, you must be logged in to submit a quote!</p>
        <p><a href="<?php echo get_home_url().'/wp-login.php'; ?>">Click here to login</a></p>
      </div>
    <?php endif; ?>
    <i class="fas fa-quote-left quote-home"></i>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>