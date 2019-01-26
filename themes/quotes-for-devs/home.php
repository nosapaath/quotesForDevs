<?php 

get_header();
?>

<div class="main-content">

    <i class="fas fa-quote-left quote-home"></i>
    <div class="quotes-area">
    <?php
        $args = array( 
				'post_type' => 'post', 
				'orderby' => 'rand', 
				'posts_per_page' => 1 
			);

        $randquote = get_posts( $args ); 
			
			foreach ( $randquote as $post ) : setup_postdata( $post ); ?>
                <?php
                $url = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );
                $source = get_post_meta( get_the_ID(), '_qod_quote_source', true );
                ?>
                <div id="quote">
                    <?php the_content(); ?>
                </div>
				<h2 id="author">
                    <?php if($url !== "") :?>
                        <?php the_title(); ?>,
                            <a href="<?php echo $url ?>"> 
                                <?php echo $source ?> 
                            </a>
                    <?php elseif($source) :?>
                        <?php the_title(); ?>, <?php echo $source ?> 
                    <?php else:?>
                        <?php the_title(); ?>
                    <?php endif; ?>

                </h2> 
            <?php endforeach; wp_reset_postdata(); ?> 
            <button class="quote-generator-btn"type="button" id="random-quote-btn"> Show Me Another! </button>
    </div>  
    <i class="fas fa-quote-right quote-home"></i>
    
</div><!-- main content ends -->




<?php  get_footer(); ?>
