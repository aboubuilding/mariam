


<div class="space-top">
        <div class="container">
            <div class="category-sec-wrap">
                <div class="shape-mockup category-shape-arrow d-xl-block d-none"><img
                        src="<?php bloginfo('template_directory'); ?>/assets/img/normal/category-arrow.svg" alt="img"></div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="title-area mb-25 mb-lg-0 text-xl-start text-center">
                            <h2 class="sec-title">Nos enseignements </h2>
                            
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row slider-shadow th-carousel category-slider" data-slide-show="4"
                            data-ml-slide-show="3" data-md-slide-show="3" data-sm-slide-show="2" data-arrows="true"
                            data-xl-arrows="true">

                            <?php

$args = array(


    'post_type'      => 'enseignement',
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


                           
                            <div class="col-md-6 col-xl-4">
                                <div class="category-card">
                                    <div class="category-card_icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/cat-1_4.svg" alt="image">
                                    </div>
                                    <div class="category-card_content">
                                        <h3 class="category-card_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                       <a href="<?php the_permalink(); ?>"
                                            class="th-btn">Lire la suite  <i class="fa-solid fa-arrow-right ms-1"></i></a>
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