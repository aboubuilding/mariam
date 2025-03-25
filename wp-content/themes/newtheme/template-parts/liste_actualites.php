<section class="space-top space-extra-bottom">
        <div class="container">
           
        <div class="row gy-30">

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


                        <div class="col-12">
                            <div class="course-grid">

                            <?php
                                $idImageAlaUne = get_post_thumbnail_id();
                                $imgSrc = wp_get_attachment_url($idImageAlaUne);
                                ?>
                                <div class="course-img">
                                    <img src="<?php echo $imgSrc ?>" alt="img"  style="height: 250px; width: 400px;"> <span
                                        class="tag"><i class="fas fa-clock"></i> <?php echo get_the_date('d/m/Y'); ?></span></div>
                                <div class="course-content">
                                    <div class="d-flex justify-content-between">
                                        <div class="course-rating">
                                   
                                        </div>
                                       
                                    </div>
                                    <h3 class="course-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                                    <p class="course-text" style="text-align:justify "><?php the_excerpt(); ?></p>
                                  


                                    <div class="course-author">
                                          
                                        
                                        
                                            <a href="<?php the_permalink(); ?>" class="link-btn">Lire la suite <i
                                                class="fas fa-arrow-right ms-2"></i></a>

                                    </div>
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
      

          
                