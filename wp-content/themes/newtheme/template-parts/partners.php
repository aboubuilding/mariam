




<div class="space-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title-area mb-lg-0 text-lg-start text-center">
                        <h2 class="sec-title mb-0">Nos partenaires  
                          </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="client-wrap text-lg-end text-center">
                        <div class="row gy-40">

                        <?php

$args = array(


    'post_type'      => 'partenaire',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'

);

$posts = new WP_Query( $args );
if( $posts->have_posts() ) :
    ?>

    <?php
    while( $posts->have_posts() ) :
        $posts->the_post();
        ?>

<div class="col-3"><a href="blog.html" class="client-thumb">

<?php
                                $idImageAlaUne = get_post_thumbnail_id();
                                $imgSrc = wp_get_attachment_url($idImageAlaUne);
                                ?>

    <img
src="<?php echo $imgSrc ?>" alt="img"></a></div>
                

                <?php
    endwhile;?>

<?php
else :
endif;
?> 
         
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>