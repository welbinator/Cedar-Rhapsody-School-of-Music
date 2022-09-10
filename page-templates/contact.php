<?php /* Template Name: Contact Page */ ?>
<?php echo get_header(); ?>


<div class="hero contact-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">

                <?php
                $contactHeading = get_theme_mod('contact-heading');
                if ($contactHeading != '') { ?>
                    <?php echo wpautop("<h1 class='display-1'> $contactHeading</h1>"); ?>
                <?php } ?>



                <?php
                $contactTagline = get_theme_mod('contact-tagline');
                if ($contactTagline != '') { ?>
                    <?php echo wpautop("<p> $contactTagline </p>"); ?>
                <?php } ?>



                <div class="button-container mb-5 mb-lg-0"><button class="btn btn-primary fons-book" type="button">Schedule</button></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- <form><label>Name</label><input class="form-control mb-3" type="text"><label>Email</label><input class="form-control mb-3" type="text"><label>Subject</label><input class="form-control mb-3" type="text"><label>Message</label><textarea class="form-control mb-3"></textarea><button class="btn btn-primary" type="button">Submit</button></form>
                             -->
                        <?php echo do_shortcode("[formidable id=1]"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section"></div>
<?php echo get_footer(); ?>