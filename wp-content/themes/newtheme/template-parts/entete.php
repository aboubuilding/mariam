


<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<div class="breadcumb-wrapper" data-bg-src="<?php bloginfo('template_directory'); ?>/assets/img/bg/breadcumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="<?php bloginfo('template_directory'); ?>/assets/img/bg/breadcumb_shape_1_1.png"></div>
        <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px"><img
                src="<?php bloginfo('template_directory'); ?>/assets/img/bg/breadcumb_shape_1_2.png" alt="shape"></div>
        <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/bg/breadcumb_shape_1_3.png" alt="shape"></div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title"><?php the_title(); ?></h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Accueil </a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    endwhile;?>

<?php
else :
endif;
?>
    <!-- page-banner end -->