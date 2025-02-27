


<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
    <!-- page-banner start -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text"><?php the_title(); ?></div>
                        <div class="page-title">
                            <h1><?php the_title(); ?> </h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Accueil </a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/page-banner/page-banner-1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    endwhile;?>

<?php
else :
endif;
?>
    <!-- page-banner end -->