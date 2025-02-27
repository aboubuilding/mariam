 
 
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
 
 <!-- team-area start -->
  <section class="services-details pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-115 overflow-hidden">
        <div class="container">
            <div class="row" data-sticky_parent>



            <?php get_template_part('template-parts/article'); ?>
            <?php get_template_part('template-parts/sidebar'); ?>

               
            </div>
        </div>
    </section>


    <?php
    endwhile;?>

<?php
else :
endif;
?>
    <!-- team-area end -->