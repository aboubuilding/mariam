




<div class="why-area-1 space overflow-hidden">
        <div class="shape-mockup why-shape-1 jump" data-top="10%" data-left="7%"><img
                src="<?php bloginfo('template_directory'); ?>/assets/img/normal/about_1_shape1.png" alt="img"></div>
        <div class="shape-mockup why-shape-2" data-bg-src="<?php bloginfo('template_directory'); ?>/assets/img/normal/wcu_1_shape1.png"></div>
        <div class="shape-mockup why-shape-3 jump-reverse" data-bottom="25%" data-right="-3%"><img
                src="<?php bloginfo('template_directory'); ?>/assets/img/normal/wcu_1_shape2.png" alt="img"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="wcu-img-1">
                        <div class="img1"><img src="<?php bloginfo('template_directory'); ?>/assets/img/normal/wcu_1_1.png" alt="img"></div>
                        
                        <div class="text-end"><a class="th-btn mt-30" href="<?php the_permalink(); ?>">Toutes les specialités   <i
                                    class="far fa-arrow-right ms-1"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="wcu-wrap1">
                        <div class="title-area ">
                            <h2 class="sec-title">Nos spécialités </h2>
                           
                        </div>
                        <div class="row gy-4">

                        <?php

$args = array(


    'post_type'      => 'specialites',
    'post_status' => 'publish',
    'orderby' => 'date',
    'posts_per_page' => 4, 
    'order' => 'DESC'

);

$posts = new WP_Query( $args );
if( $posts->have_posts() ) :
    ?>

    <?php
    while( $posts->have_posts() ) :
        $posts->the_post();
        ?>


                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon"><i class="fas fa-check-circle"></i></div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">

                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>

                                            </a>
                                        
                                        </h3>
                                        <p class="wcu-box_text">
                                        </p>
                                    </div>
                                </div>
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
            </div>
        </div>
    </div>