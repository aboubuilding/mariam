<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
                
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        
                       
                        <div class="widget">
                            <h3 class="widget_title">Articles récents </h3>
                            <div class="recent-post-wrap">



<?php
$args = array(
    'post_type'      => 'actualites', // Type : articles
    'posts_per_page' => 3,      // Nombre d'articles récents à afficher
    'orderby'        => 'date', // Trier par date
    'order'          => 'DESC', // Du plus récent au plus ancien
    'post__not_in'   => array(get_the_ID()) // Exclure l'article actuel
);

$query = new WP_Query($args);

if ($query->have_posts()) : 
    while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="recent-post">
                                    <div class="media-img">

                                    
                                        
                                    <a href="<?php the_permalink(); ?>">

                                    <?php
                                $idImageAlaUne = get_post_thumbnail_id();
                                $imgSrc = wp_get_attachment_url($idImageAlaUne);
                                ?>
                                        
                                    
                                    <img
                                                src="<?php echo $imgSrc ?>" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                            
                                            </a>
                                            
                                            </h4>
                                        <div class="recent-post-meta"><a href="<?php the_permalink(); ?>"><i
                                                    class="fal fa-calendar"></i><?php echo get_the_date('d/m/Y'); ?></a></div>
                                    </div>
                                </div>

                                <?php endwhile;
    wp_reset_postdata(); // Réinitialiser la requête

endif;
?>


                                


                            </div>
                        </div>
                        
                        <div class="widget widget_banner" data-overlay="theme" data-opacity="9"
                            data-bg-src="assets/img/widget/widget-banner-bg.png">
                            <div class="widget-banner">
                                <h4 class="title">Besoin d'aide ? Nous sommes là pour vous aider.</h4>
                               
                                <h5 class="subtitle">Nous appellez</h5><a href="tel:+(228) 70 70 93 93"
                                    class="link">+(228) 70 70 93 93</a> <a href="<?php bloginfo('url'); ?>/contact"
                                    class="th-btn style7">Contactez nous <i class="far fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </aside>
                </div>


                <?php
    endwhile;?>

<?php
else :
endif;
?>