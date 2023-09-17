<?php /* Template Name: Home Page */ ?>
<?php echo get_header(); ?>


<div class="hero">

        <div class="hero-clipped-images-container">
           
            <div data-rate=".6" data-direction="vertical" data-aos="fade-up" data-aos-duration="500" class="scroll hero-image-div">
                <div class="hero-clip-image-overlay"></div><img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-left-end.png">
            </div>

            <div data-rate=".4" data-direction="vertical" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" class="scroll hero-image-div">
                <div class="hero-clip-image-overlay"></div><img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-left-center.png">
            </div>

            <div data-rate=".2" data-direction="vertical" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500" class="scroll hero-image-div">
                <div class="hero-clip-image-overlay"></div><img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-center.png">
            </div>

            <div data-rate=".4" data-direction="vertical" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" class="scroll hero-image-div">
                <div class="hero-clip-image-overlay"></div><img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-right-center.png">
            </div>

            <div data-rate=".6" data-direction="vertical" data-aos="fade-up" data-aos-duration="500" class="scroll hero-image-div">
                <div class="hero-clip-image-overlay"></div><img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-right-end.png">
            </div>

            <div  data-aos="fade-in" data-aos-delay="800" data-aos-duration="1500" class="hero-content-container">
                <div class="container text-center">
                    <?php
                $heroHeading = get_theme_mod('hero-heading');
                if ($heroHeading != '') { ?>
                    <?php echo wpautop("<h1 class='display-1'> $heroHeading </h1>"); ?>
                <?php } ?>
                <?php
                $heroParagraph = get_theme_mod('hero-paragraph');
                if ($heroParagraph != '') { ?>
                    <?php echo wpautop("<p> $heroParagraph </p>"); ?>
                <?php } ?>
                    <div class="button-container">
                    <button class="btn btn-primary fons-book">Request a FREE Consultation Yo!</button> 

<!-- insert the scripts below before the closing body tag --> 


                        <!-- <button class="btn btn-primary" type="button">Consultation</button> -->
                        <a href="/about"><button class="btn btn-light" type="button">About us</button></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-lg-5">
                    <div class="image-container"><img class="img-fluid image-col-left" src="<?php echo wp_get_attachment_url(get_theme_mod('first-image')) ?>"></div>
                </div>
                <div class="col-12 col-lg-7 align-self-center">

                <?php
                $firstHeading = get_theme_mod('first-heading');
                if ($firstHeading != '') { ?>
                    <?php echo wpautop("<h1 class='text-center text-lg-left mb-0 mt-4 mt-lg-0'><strong>  $firstHeading </strong></h1>"); ?>
                <?php } ?>
                  
                <?php
                $firstTagline = get_theme_mod('first-tagline');
                if ($firstTagline != '') { ?>
                    <?php echo wpautop("<h2 class='text-center text-lg-left mb-0'><strong> $firstTagline </strong></h2>"); ?>
                <?php } ?>
                    
                <?php
                $firstParagraph = get_theme_mod('first-paragraph');
                if ($firstParagraph != '') { ?>
                    <?php echo wpautop("<p class='text-center text-lg-left'>$firstParagraph </p>"); ?>
                <?php } ?>

                 
                    <div class="text-center text-lg-left button-container"><button class="btn btn-primary fons-book" type="button">Schedule</button></a><a href="/contact"><button class="btn btn-dark" type="button">Contact Us</button></a></div>
                </div>
            </div>
            <div class="row flex-wrap-reverse flex-lg-wrap mb-5">
                <div class="col-12 col-lg-7 align-self-center">
                   

                <?php
                $secondHeading = get_theme_mod('second-heading');
                if ($secondHeading != '') { ?>
                    <?php echo wpautop("<h1 class='text-center text-lg-left mb-0 mt-4 mt-lg-0'><strong> $secondHeading </strong></h1>"); ?>
                <?php } ?>
                  
                <?php
                $secondTagline = get_theme_mod('second-tagline');
                if ($secondTagline != '') { ?>
                    <?php echo wpautop("<h2 class='text-center text-lg-left mb-0'><strong> $secondTagline </strong></h2>"); ?>
                <?php } ?>
                    
                <?php
                $secondParagraph = get_theme_mod('second-paragraph');
                if ($secondParagraph != '') { ?>
                    <?php echo wpautop("<p class='text-center text-lg-left'>$secondParagraph </p>"); ?>
                <?php } ?>

                    <div class="text-center text-lg-left button-container"><button class="btn btn-primary fons-book" type="button">Schedule</button></a><a href="/contact"><button class="btn btn-dark" type="button">Contact Us</button></a></div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="image-container"><img class="img-fluid image-col-right" src="<?php echo wp_get_attachment_url(get_theme_mod('second-image')) ?>"></div>
                </div>
            </div>
        </div>
    </div>
    <?php echo get_footer(); ?>