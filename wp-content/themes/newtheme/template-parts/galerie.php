

<div class="space">
        <div class="container">
            <div class="row gy-4 masonary-active">


            <?php

$args = array(


    'post_type'      => 'galerie',
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
               
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card">


                    <?php
                                $idImageAlaUne = get_post_thumbnail_id();
                                $imgSrc = wp_get_attachment_url($idImageAlaUne);
                                ?>




                        <div class="gallery-img"><img src="<?php echo $imgSrc ?>" alt="gallery image"  style=" width: 5O%;"> 
                        <a
                                href="<?php echo $imgSrc ?>" class="gallery-btn popup-image"><i
                                    class="fas fa-eye"></i></a></div>
                        <div class="gallery-content">
                            <h2 class="gallery-title"><?php the_title(); ?></h2>
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