<?php 

get_header();
?>

<div class="main-content">
	<i class="fas fa-quote-left quote-home"></i>
		<div class="quotes-area">

		<div id="quote">
			<?php the_content(); ?>
		</div>

		<h2 id="author">
			<?php the_title(); ?>
		</h2> 


			<button class="quote-generator-btn"type="button" id="random-quote-btn"> 
				Show Me Another! 
			</button>


		</div>  
	<i class="fas fa-quote-right quote-home"></i>

</div><!-- main content ends -->




<?php  get_footer(); ?>
