<?php
 $thumb_id = get_post_thumbnail_id();
 $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);    
?>

<div class="detail inner-wrapper">
    <article id="post-<?php the_ID(); ?>">
        <div class="detail-block">
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
        </div>
        <?php
            $unico = types_render_field("unico", array("raw"=>"true","separator"=>";"));
            //echo $unico;
        ?>
        <div class="detail-block">
            <?php 
                if ($unico != 1) {
                    echo '<h2 class="multiretail">';
                } else {
                    echo '<h2>';
                }
            echo types_render_field("nombre"); ?>
            </h2>
            <?php
                if (types_render_field("extras") != "") {
                    echo '<h3>'.types_render_field("extras").'</h3>';
                }
            ?>
            <h4><?php echo types_render_field("codmodelo"); ?></h4>
            <span class="origen-detail"><?php echo 'Origen: '.types_render_field("origen"); ?></span>
            <?php
                if ($unico == 1) {
                    echo '<hr>';
                    echo '<div class="off-detail">';
                    echo '<span>'.types_render_field("off-descuento").'%</span><br>OFF';
                    echo '</div>';
                    echo '<div class="prices">';
                    echo '<span class="precio">'.types_render_field('precio').'</span>';
                    echo '<p class="cuotas">Hasta <span>'.types_render_field('cuotas').' cuotas</span>';
                    if (types_render_field('interes') == 1) {
                        echo ' sin interés';
                    }
                    echo '</p></div>';      
                }         
            ?>
            <hr>
            <ul class="features-list">
                <?php 
                        $feat[0] = types_render_field("caracteristica1", array("raw"=>"true","separator"=>";"));
                        $feat[1] = types_render_field("caracteristica2", array("raw"=>"true","separator"=>";"));
                        $feat[2] = types_render_field("caracteristica3", array("raw"=>"true","separator"=>";"));
                        //var_dump($img);
                        $a = 0;
                        while($a < 3):
                            if( $feat[$a] != "") {
                                echo '<li>'.$feat[$a].'</li>';
                            }
                            $a++;
                        endwhile;
                ?>
            </ul>
            <a class="bt-donde" href="<?php echo $linkInfo ?>" target="_blank"><i class="fa fa-plus"></i> INFO</a>
            <?php
                if ($unico == 1) {
                    echo '<ul class="retailers">';
                    echo '<li>Compralo en</li>';
                        while( have_rows('retailer') ): the_row(); 
                            $linkRetail = get_sub_field('urlRetailer');
                            $categoria = get_term_by('term_taxonomy_id',get_sub_field('nombreRetailer',false),'retailer');
                            //var_dump($categoria);
                            echo '<li><a class="ani" href="'.$linkRetail.'" target="_blank">';
                            echo types_render_termmeta("retailer-logo", array( "term_id" => get_sub_field('nombreRetailer',false)));
                            echo '</a></li>';
                        endwhile; 
                    echo '</ul>'; 
                }
            ?>  
    </article><!-- #post-## -->
    <?php
        if ($unico == 0) {
            echo '<div class="retailers-full">';
            echo '<h4>Compralo en</h4>';
                while( have_rows('retailer') ): the_row(); 
                    $linkRetail = get_sub_field('urlRetailer');
                    $precioRetail = get_sub_field('precioRetailer');
                    $descRetail = get_sub_field('descuentoRetailer');
                    $cuotasRetail = get_sub_field('cuotasRetailer');
                    $cuotasInteres = get_sub_field('cuotasInteres');

                    //echo $precioRetail.' '.$descRetail.' '.$cuotasRetail.' '.$cuotasInteres;
                    $categoria = get_term_by('term_taxonomy_id',get_sub_field('nombreRetailer',false),'retailer');
                    //var_dump($categoria);
                    echo '<a class="ani" href="'.$linkRetail.'" target="_blank">';
                    echo types_render_termmeta("retailer-logo", array( "term_id" => get_sub_field('nombreRetailer',false)));
                    echo '<div class="retailer-info">';
                    echo '<span class="off">HASTA '.$descRetail.'% OFF</span>';
                    echo '<span class="precio">$'.$precioRetail.'</span>';
                    echo '<p class="cuotas">Hasta <span>'.$cuotasRetail.' cuotas</span>';
                    if ($cuotasInteres == 1) {
                        echo ' sin interés';
                    }
                    echo '</p></div>';
                    echo '<div class="arrow ani"><span>VER MÁS</span><i class="fa fa-angle-right"></i></div>';
                    echo '</a>';
                endwhile; 
            echo '</ul>'; 
        }
    ?>
</div>
<?php
    $post_legales = get_post(2); 
    $content = $post_legales->post_content;
?>

<div class="inner-wrapper legales">
    <?php echo $content; ?>
</div>