


<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); 

$presentation = get_post_meta(get_the_ID(), 'presentation', true);
$structure = get_post_meta(get_the_ID(), 'structure', true);
$programme = get_post_meta(get_the_ID(), 'programme', true);

?>


<section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-lg-12">
                    <div class="course-single">
                       
                        <div class="course-single-bottom">
                            <ul class="nav course-tab" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link active" id="description-tab"
                                        data-bs-toggle="tab" href="#presentation_content" role="tab"
                                        aria-controls="Coursedescription" aria-selected="true"><i
                                            class="fa-regular fa-bookmark"></i>Présentation </a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" id="curriculam-tab"
                                        data-bs-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam"
                                        aria-selected="false"><i class="fa-regular fa-book"></i>Structure </a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" id="instructor-tab"
                                        data-bs-toggle="tab" href="#instructor" role="tab" aria-controls="instructor"
                                        aria-selected="false"><i class="fa-regular fa-user"></i>Programme </a></li>
                               
                            </ul>
                            <div class="tab-content" id="productTabContent">
                                <div class="tab-pane fade show active" id="presentation_content" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <?php echo $presentation ?>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                                <div class="tab-pane fade" id="curriculam" role="tabpanel"
                                    aria-labelledby="curriculam-tab">
                                    <?php echo $structure ?>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                                <div class="tab-pane fade" id="instructor" role="tabpanel"
                                    aria-labelledby="instructor-tab">


                                    <?php echo $programme ?>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                               
                            </div>
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
