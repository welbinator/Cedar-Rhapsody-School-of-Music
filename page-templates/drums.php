<?php /* Template Name: Drums Page */ ?>
<?php echo get_header(); ?>


<div class="hero drums-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 align-self-center">

                <?php
                $drumsHeading = get_theme_mod('drums-hero-heading');
                if ($drumsHeading != '') { ?>
                    <?php echo wpautop("<h1 class='display-1'> $drumsHeading </h1>"); ?>
                <?php } ?>


                <?php
                $drumsTagline = get_theme_mod('drums-hero-paragraph');
                if ($drumsTagline != '') { ?>
                    <?php echo wpautop("<p> $drumsTagline </p>"); ?>
                <?php } ?>


                <div class="button-container mb-5 mb-lg-0"><button class="btn btn-primary fons-book" type="button">Schedule</button><a href="/contact"><button class="btn btn-light" type="button">Contact Us</button></a></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="drums-hero-image-container"><img class="img-fluid drums-hero-image hero-image" src="<?php echo wp_get_attachment_url(get_theme_mod('drums-image')) ?>"></div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <h1 class="text-center mb-5">Our Teachers</h1>
        <div class="row">
            <?php
            /**
             * Setup query to show the ‘services’ post type with all posts filtered by 'home' category.
             * Output is linked title with featured image and excerpt.
             */

            $args = array(
                'post_type' => 'teacher',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
                'tag' => 'drums',

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
                    <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/temp-teacher-image.png">
                        <div class="card-body">
                            <h2 class="card-title">Title</h2>
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
        $drumsSecondHeading = get_theme_mod('second-drums-heading');
        if ($drumsSecondHeading != '') { ?>
            <?php echo wpautop("<h1 class='text-center text-lg-left mb-0 mt-4 mt-lg-0'><strong> $drumsSecondHeading </strong></h1>"); ?>
        <?php } ?>



        <?php
        $drumsSecondTagline = get_theme_mod('second-drums-tagline');
        if ($drumsSecondTagline != '') { ?>
            <?php echo wpautop("<p class='text-center text-lg-left'> $drumsSecondTagline </p>"); ?>
        <?php } ?>



        <div class="text-center text-lg-left button-container"><button class="btn btn-primary fons-book" type="button">Schedule</button><a href="/contact"><button class="btn btn-dark" type="button">Contact Us</button></a></div>
    </div>
</div>
<?php echo get_footer(); ?>