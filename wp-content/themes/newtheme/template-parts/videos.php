


<section class="space">
        <div class="container">

     <div class="row">

     <?php

$args = array(


    'post_type'      => 'videos',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'

);

$url = get_post_meta(get_the_ID(), 'url', true);

$posts = new WP_Query( $args );
if( $posts->have_posts() ) :
    ?>

    <?php
    while( $posts->have_posts() ) :
        $posts->the_post();
        ?>

  


                <div class="col-md-6 col-xl-4  cat2 cat4">
                    <div class="video-course">

                  

                    <?php 
$video_code = get_post_meta(get_the_ID(), 'url', true);
if (!empty($video_code)) {
    echo do_shortcode($video_code); // Active les shortcodes stockés
}
?>
    
    <div class="course-content">
                            <h3 class="course-title"><a href=""><?php the_title(); ?></a></h3>
                            
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