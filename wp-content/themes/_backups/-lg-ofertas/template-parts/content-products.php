<section class="inner-wrapper">
            <?php
   
            $args = array( 'post_type' => 'producto', 'posts_per_page' => -1, 'orderby' => '' );
            $loop = new WP_Query( $args );
            
            ?>

            <div id="productsList" class="product-list">
            <?php 
                while ( $loop->have_posts() ) : $loop->the_post();
                $unico = types_render_field("unico", array("raw"=>"true","separator"=>";"));
            ?>
                <article class="product ani">
                    <h2> <?php echo types_render_field("nombre"); ?></h2>
                    <?php
                    if (types_render_field("extras") != "") {
                        echo '<h3>'.types_render_field("extras").'</h3>';
                    }
                    ?>
                    <h4> <?php echo types_render_field("codmodelo"); ?></h3>
                        <div class="flexslider">
                            <ul class="slides">
                                <?php 
                                    $img[0] = types_render_field("img1", array("raw"=>"true","separator"=>";"));
                                    $img[1] = types_render_field("img2", array("raw"=>"true","separator"=>";"));
                                    $img[2] = types_render_field("img3", array("raw"=>"true","separator"=>";"));
                                    //var_dump($img);
                                    $i = 0;
                                    while($i < 3):
                                        if( $img[$i] != "") {
                                            echo '<li><img src="'.$img[$i].'" alt="'.types_render_field("nombre").'"></li>';
                                        }
                                        $i++;
                                    endwhile;
                                ?>
                            </ul>
                        </div>
                    <?php if( have_rows('retailer') ): ?>
                    <?php
                      $cantRetailers = 0;
                        while(has_sub_field('retailer')):
                            $cantRetailers++;
                        endwhile;
                    ?>
                    <span class="origen"><?php echo 'Origen: '.types_render_field("origen"); ?></span>
                    <?php
                        $offDesc = types_render_field("off-descuento");
                        if ($offDesc != '') {
                            echo '<span class="off">HASTA '.types_render_field("off-descuento").'% OFF</span>';
                        }
                    ?>
                    <ul class="precio-retailer">
                        <li>
                            <?php
                                if ($unico == 0) {
                                    echo '<span class="precio-anterior">DESDE</span>';
                                } else {
                                    echo '<br>';
                                }
                            ?>
                            <span class="precio">$<?php echo types_render_field("precio"); ?></span>
                        </li>
                        <li>
                            <?php
                            if ($cantRetailers > 1) {
                                    $linkCompra = types_render_field("link-comprar", array("raw"=>"true","separator"=>";"));
                                    if ($linkCompra == "") {
                                        $linkCompra = get_permalink($args->ID);
                                        //var_dump($linkCompra);
                                    }
                                    echo '<a href="'.$linkCompra.'">';
                                    echo '<img class="icono-tienda" src="'.get_template_directory_uri().'/img/icono-tienda.png">';
                                    echo '<span class="retail-cant">'.$cantRetailers.'</span>';
                                    echo '</a>';

                            } else {
                                while( have_rows('retailer') ): the_row(); ?>
                                    <?php 
                                        $linkRetail = get_sub_field('urlRetailer');
                                        $categoria = get_term_by('term_taxonomy_id',get_sub_field('nombreRetailer',false),'retailer');
                                        //var_dump($categoria);
                                        echo '<a href="'.$linkRetail.'" target="_blank">';
                                        echo types_render_termmeta("retailer-logo", array( "term_id" => get_sub_field('nombreRetailer',false)));
                                        echo '</a>';
                                    endwhile; 
                                }
                            endif; ?>
                        </li>
                    </ul>
                    
                            
                            <?php  
                                $descuentoHome = types_render_field("descuento-home");
                                $cuotasHome = types_render_field("cuotas-home");

                                if ($descuentoHome == "1" && $cuotasHome == "0" ) {
                                    echo '<p class="cuotas">';
                                    echo 'Ver <span>descuentos</span>';
                                    echo '</p>';
                                }

                                if ($descuentoHome == "0" && $cuotasHome == "1") {
                                    echo '<p class="cuotas">';
                                    echo 'Ver <span>cuotas</span>';
                                    echo '</p>';
                                }

                                if ($descuentoHome == "1" && $cuotasHome == "1") {
                                    echo '<p class="cuotas">';
                                    echo 'Ver <span>descuentos y cuotas</span>';
                                    echo '</p>';
                                }

                            ?>

                            <?php 
                                //if (types_render_field("interes") == 1) {
                                //    echo 'sin interés';
                                //}
                            ?>
                    
                    <?php 
                        $linkCompra = types_render_field("link-comprar", array("raw"=>"true","separator"=>";"));
                        $linkInfo = types_render_field("infolink", array("raw"=>"true","separator"=>";"));
                        if ($linkCompra == "") {
                            $linkCompra = get_permalink($args->ID);
                            $urlExterna = 1;
                            //var_dump($linkCompra);
                        } else {
                            $urlExterna = 0;
                        }
                    ?>

                    <a href="<?php echo $linkCompra; ?>" target="<?php if($urlExterna == 0){ echo '_blank'; } else { echo '_self'; } ?>" class="bt-donde ani">
                        DONDE COMPRAR
                    </a>
                    <a href="<?php echo $linkInfo ?>" target="_blank" class="mas-info">MÁS INFO <i class="fa fa-angle-right"></i></a>  
                </article>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>      
</section>
<?php
    $post_legales = get_post(2); 
    $content = $post_legales->post_content;
?>

<div class="inner-wrapper legales">
    <?php echo $content ?>
</div>


