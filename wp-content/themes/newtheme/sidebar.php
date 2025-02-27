

<?php

/**

 * The template for the sidebar containing the main widget area

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */

?>


<div class="col-lg-4 col-md-12">
    <div class="top-sticky-wrapper">

        <?php
        $args = array(
            'post_type'      => 'post', // Type de publication : article
            'posts_per_page' => 4, // Nombre d'articles à afficher
            'order'          => 'DESC', // Ordre de tri : du plus récent au plus ancien
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
        $query->the_post();
        ?>
        <div class="image-box-item-three">

            <?php
            $idImageAlaUne = get_post_thumbnail_id();
            $imgSrc = wp_get_attachment_url($idImageAlaUne);
            $post_id = get_the_ID();
            $categories = wp_get_post_categories($post_id);
            if ($categories) {
                $last_category_id = end($categories);
                $last_category = get_category($last_category_id);
                $last_categor_name = $last_category->name;

            }else{

                $last_categor_name = "";

            }


            ?>


            <div class="thumbnail style-01">
                <img src="<?php echo $imgSrc ?>" alt="" style="width: 135px; height: 135px">
            </div>
            <div class="content ml-xl-4 ml-sm-6">
                <span class="tag-02"><?php echo $last_categor_name ?></span>
                <a href="<?php the_permalink(); ?>"><h4 class="title"><?php the_title() ?></h4></a>
                <ul class="post-meta">
                    <li>
                        <a href="#">Par  <span><?php get_the_author(); ?></span></a>
                    </li>
                    <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date published updated"><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></span>
                                                </a>
                                            </span>
                    </li>
                </ul>
            </div>
        </div>

            <?php
        }

        }

        ?>

        <div class="advertise-banner">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/section-img/advertise/advertise-02.png" alt="">
        </div>
        <div class="widget widget_social margin-top-40">
            <h3 class="widget-headline">NOUS SUIVRE <span></span></h3>
            <ul class="contact_info_list">
                <li class="single-info-item">
                    <div class="icon">
                        <i class="fab fa-facebook-square"></i>
                    </div>
                    <div class="details">
                        <p><span>1250M +</span>Followers</p>
                    </div>
                </li>
                <li class="single-info-item style-01">
                    <div class="icon">
                        <i class="fab fa-twitter-square"></i>
                    </div>
                    <div class="details">
                        <p><span>1250M +</span>Followers</p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>