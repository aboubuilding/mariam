


<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>


<section class="space">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title fw-semibold"><?php the_title(); ?></h2>
                <p class="sec-text"><?php the_content(); ?></p>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="th-box mb-5 mb-xl-0">
                        <div class="th-box_img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/update1/normal/vector_1.png" alt="vector"></div>
                        <div class="th-box_content">
                            <h3 class="h4 th-box_title">Procedures d'inscription </h3>
                            <p class="th-box_text">Inscription pour les éleves venant du programme français</p><a href="contact.html" class="th-btn">Register Now<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="th-box theme2">
                        <div class="th-box_img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/update1/normal/vector_2.png" alt="vector"></div>
                        <div class="th-box_content">
                            <h3 class="h4 th-box_title">Procedures d'inscription</h3>
                            <p class="th-box_text">Inscription pour les éleves venant d' un autre programme</p><a href="contact.html" class="th-btn">Register Now<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
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