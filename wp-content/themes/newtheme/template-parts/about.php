



<div class="space overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="img-box1 mb-40 mb-xl-0">
                        <div class="img1"><img class="tilt-active" src="<?php bloginfo('template_directory'); ?>/assets/img/normal/about_1_1.png" alt="About">
                        </div>
                        
                        <div class="img2"><img class="tilt-active" src="<?php bloginfo('template_directory'); ?>/assets/img/normal/about_1_2.png" alt="About">
                        </div>
                        <div class="shape-mockup about-shape1 jump" data-left="-67px" data-bottom="0"><img
                                src="<?php bloginfo('template_directory'); ?>/assets/img/normal/about_1_shape1.png" alt="img"></div>
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