<?php
/* Template Name: Home */

get_header(); ?>
<div class="top">
	<div id="slides">
      <nav class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
      </nav>
	   <ul class="slides-container">
		    <?php
            $args = array( 'post_type' => 'slide', 'posts_per_page' => -1, 'orderby' => '' );
            $loop = new WP_Query( $args );
        
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <li>
          	<img src="<?php the_field('img-fondo'); ?>">
          	<div class="inner-wrapper">
          		<img class="preserve" src="<?php the_field('img-contenido'); ?>">
        	</div>
        </li>
        <?php
        	endwhile;
        	wp_reset_query();
        ?>
      </ul>
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
