<?php
/* Template Name: Home */

get_header(); ?>
<div class="top">
    <div class="swiper-container">
     <!-- Add arrows -->
    <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
        <div class="swiper-wrapper">
            <?php
            $args = array( 'post_type' => 'slide', 'posts_per_page' => -1, 'orderby' => '' );
            $loop = new WP_Query( $args );
        
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="swiper-slide">
            <?php  
                $linkSlide = get_field('link-slide');
                if ($linkSlide != '') {
                    echo '<a href="'.$linkSlide.'" target="_blank">';
                }
            ?>
            <img src="<?php the_field('img-fondo'); ?>">
            <?php  
             if ($linkSlide != '') {
                    echo '</a>';
              }
            ?>
            </div>
        <?php
          endwhile;
          wp_reset_query();
        ?>
        </div>
    </div>
   
</div>
<div class="wrapper">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-products', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop
			?>
			<?php get_footer(); ?>
</div>
