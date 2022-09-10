<?php /* Template Name: Classes Page */ ?>
<?php echo get_header(); ?>


<div class="hero classes-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 align-self-center">


                <?php
                $classesHeading = get_theme_mod('classes-hero-heading');
                if ($classesHeading != '') { ?>
                    <?php echo wpautop("<h1 class='display-1'> $classesHeading </h1>"); ?>
                <?php } ?>


                <?php
                $classesTagline = get_theme_mod('classes-hero-tagline');
                if ($classesTagline != '') { ?>
                    <?php echo wpautop("<p> $classesTagline </p>"); ?>
                <?php } ?>




                <div class="button-container mb-5 mb-lg-0"><button class="btn btn-primary fons-book" type="button">Schedule</button><a href="/contact"><button class="btn btn-light" type="button">Contact Us</button></a></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/class-image-1.png">
                    <div class="card-body">
                        <h2 class="card-title">Guitar Lessons</h2>
                        <p class="card-text">Quisque in augue. Donec aliquam magna nonummy enim. Proin blandit imperdiet sem. Donec malesuada, urna sit amet varius aliquam, nibh tortor laoreet turpis, eget sodales felis&nbsp;nibh ac sapien. Fusce eget augue. Integer sed risus. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <h1 class="mb-5">More Classess</h1>
        <div class="row">


            <?php
            /**
             * Setup query to show the ‘services’ post type with all posts filtered by 'home' category.
             * Output is linked title with featured image and excerpt.
             */

            $args = array(
                'post_type' => 'class',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',

            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="col-12 col-lg-6">
                    <div class="card">



                        <?php the_post_thumbnail('full', array('class'  => 'card-img-top w-100 d-block')) ?>
                        <div class="card-body">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <p class="card-text"><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>

            <?php endwhile;

            wp_reset_postdata();

            ?>


            <!-- <div class="col-12 col-lg-6">
                    <div class="card mb-5 mb-lg-0"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/class-image-1.png">
                        <div class="card-body">
                            <h2 class="card-title">Guitar Lessons</h2>
                            <p class="card-text">Quisque in augue. Donec aliquam magna nonummy enim. Proin blandit imperdiet sem. Donec malesuada, urna sit amet varius aliquam, nibh tortor laoreet turpis, eget sodales felis&nbsp;nibh ac sapien. Fusce eget augue. Integer sed risus. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card mb-5 mb-lg-0"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/class-image-2.png">
                        <div class="card-body">
                            <h2 class="card-title">Piano Lessons</h2>
                            <p class="card-text">Quisque in augue. Donec aliquam magna nonummy enim. Proin blandit imperdiet sem. Donec malesuada, urna sit amet varius aliquam, nibh tortor laoreet turpis, eget sodales felis&nbsp;nibh ac sapien. Fusce eget augue. Integer sed risus. </p>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <?php
        $classesSecondHeading = get_theme_mod('second-classes-heading');
        if ($classesSecondHeading != '') { ?>
            <?php echo wpautop("<h1 class='text-center text-lg-left mb-0 mt-4 mt-lg-0'><strong> $classesSecondHeading </strong></h1>"); ?>
        <?php } ?>



        <?php
        $classesSecondTagline = get_theme_mod('second-classes-tagline');
        if ($classesSecondTagline != '') { ?>
            <?php echo wpautop("<p class='text-center text-lg-left'> $classesSecondTagline </p>"); ?>
        <?php } ?>


        <div class="text-center text-lg-left button-container"><button class="btn btn-primary fons-book" type="button">Schedule</button><a href="/contact"><button class="btn btn-dark" type="button">Contact Us</button></a></div>
    </div>
</div>
<?php echo get_footer(); ?>