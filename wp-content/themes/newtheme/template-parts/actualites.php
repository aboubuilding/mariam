




<section class="overflow-hidden space" id="blog-sec">
        <div class="container">
            <div class="mb-35 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="title-area mb-md-0">
                           
                            <h2 class="sec-title">Notre actualité</h2>
                        </div>
                    </div>
                    <div class="col-md-auto"><a href="blog.html" class="th-btn">Lire tous les articles <i
                                class="fa-solid fa-arrow-right ms-2"></i></a></div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">

                <?php

$args = array(


    'post_type'      => 'actualites',
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
                    <div class="th-blog blog-single style2">

                    <?php
                                $idImageAlaUne = get_post_thumbnail_id();
                                $imgSrc = wp_get_attachment_url($idImageAlaUne);
                                ?>

                        <div class="blog-img"><a href="<?php the_permalink(); ?>"><img src="<?php echo $imgSrc ?>"
                                    alt="Blog Image" style="height: 250px; width: auto;"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                
                            
                            
                            <a href="<?php the_permalink(); ?>"><i class="fa-light fa-clock"></i><?php echo get_the_date(); ?></a></div>
                            <h4 class="box-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?></a></h4>
                            <a href="<?php the_permalink(); ?>" class="link-btn">Lire la suite 
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
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
    </section>