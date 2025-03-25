<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>


<section class="space">
        <div class="container">
            
            <div class="space-top">
                <div class="row">
                    <div class="col-lg-8">
                    <h2 class="sec-title fw-semibold"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                    <div class="col-lg-4">
                        <form action="" method="POST"
                            class="th-team-form bg-smoke ajax-contact mt-50 mt-lg-0">
                            <div class="form-title mb-30 text-center">
                                <h3 class="fw-semibold mt-n1">Nous contacter </h3>
                              
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group"><input type="text" placeholder="Your Name"
                                            class="form-control style-white"> <i class="fal fa-user"></i></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group"><input type="mail" placeholder="Your Email"
                                            class="form-control style-white"> <i class="fal fa-envelope"></i></div>
                                </div>
                                <div class="col-12 form-group"><select name="subject" id="subject"
                                        class="form-select style-white single-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Subjects
                                        </option>
                                        <option value="languageclass">Language Class</option>
                                        <option value="mathematicsclass">Mathematics Class</option>
                                        <option value="kidsonlineclass">Kids Online Class</option>
                                        <option value="practicalclasses">Practical Classes</option>
                                    </select></div>
                                <div class="col-12">
                                    <div class="form-group"><input type="number" placeholder="Phone Number"
                                            class="form-control style-white"> <i class="fal fa-phone-flip"></i></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group"><textarea placeholder="Write Message..."
                                            class="form-control style-white"></textarea> <i class="fal fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="col-12"><button class="th-btn w-100">Envoyer  <i
                                            class="fas fa-arrow-right ms-2"></i></button></div>
                            </div>
                        </form>
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