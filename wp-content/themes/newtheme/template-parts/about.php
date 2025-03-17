



<div class="space overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-xl-6">
    <div class="img-box1 mb-40 mb-xl-0" style="position: relative; display: inline-block; width: 80%;">
        <!-- Première image (réduite) -->
        <div class="img1">
            <img class="tilt-active" src="<?php bloginfo('template_directory'); ?>/assets/img/normal/about_1_12.JPG" alt="About" style="width: 100%; display: block; border-radius: 10px;">
        </div>

        <!-- Deuxième image (plus petite et superposée) -->
        <div class="img2" style="position: absolute; bottom: -10px; right: -10px; width: 65%;">
            <img class="tilt-active" src="<?php bloginfo('template_directory'); ?>/assets/img/normal/about_1_22.JPG" alt="About" style="width: 100%; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
        </div>

        <div class="shape-mockup about-shape1 jump" data-left="-67px" data-bottom="0">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/normal/about_1_shape1.png" alt="img">
        </div>
    </div>
</div>

                <div class="col-xl-6">
                    <div class="title-area">
                        <h2 class="sec-title">Présentation</h2>
                    </div>

                    <?php

$args = array(


    'post_type'      => 'page',
    'name' => 'presentation',
    

);

$posts = new WP_Query( $args );
if( $posts->have_posts() ) :
    ?>

    <?php
    while( $posts->have_posts() ) :
        $posts->the_post();
        ?>


<p><?php echo wp_trim_words(get_the_excerpt(), 55, '...'); ?></p>
                   
                    <div class="btn-group mt-40"><a href="about.html" class="th-btn">Lire la suite <i
                                class="fa-regular fa-arrow-right ms-2"></i></a></div>
                </div>


                <?php
    endwhile;?>

<?php
else :
endif;
?> 
            </div>
        </div>
    </div>