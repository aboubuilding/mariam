


<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<section class="th-blog-wrapper blog-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single">
                        <div class="blog-img">

                        <?php
                                $idImageAlaUne = get_post_thumbnail_id();
                                $imgSrc = wp_get_attachment_url($idImageAlaUne);
                                ?>


                            <img src="<?php echo $imgSrc ?>" alt="Blog Image">
                        
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href=""><i class="far fa-user"></i>Par 
                            <?php the_author(); ?></a> <a href="blog.html"><i class="fa-light fa-calendar-days"></i><?php echo get_the_date('d/m/Y'); ?></a>
                             <a href="blog-details.html"><i class="fa-light fa-book"></i></a></div>
                            <h2 class="blog-title"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                        <div class="share-links clearfix">
                            <div class="row justify-content-between">
                               
                               
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

<?php get_template_part('template-parts/aside'); ?>


            </div>
        </div>
    </section>



    
    <!-- page-banner end -->