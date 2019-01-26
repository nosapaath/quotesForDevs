<?php 

get_header();
?>

<div class="main-content">
	<i class="fas fa-quote-left quote-home"></i>
		<div class="quotes-area">

		<h1>
			<?php the_title(); ?>
		</h1> 
		<div id="quote">
			<?php the_content(); ?>
		</div>

		

		</div>  
	<i class="fas fa-quote-right quote-home"></i>

</div><!-- main content ends -->




<?php  get_footer(); ?>
