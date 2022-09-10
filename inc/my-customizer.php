<?php


class Custom_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}
	public function register_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
       
        $this->hero_section( $wp_customize );
        $this->first_section( $wp_customize );
        $this->second_section( $wp_customize );
        $this->classes_section( $wp_customize );
		$this->about_page( $wp_customize );
        $this->contact_page( $wp_customize );
        // $this->piano_page( $wp_customize );
        // $this->drums_page( $wp_customize );
        $this->guitar_page( $wp_customize );
        $this->drums_page( $wp_customize );
        $this->piano_page( $wp_customize );
        
    }
    
    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
     
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }
  
    


    private function hero_section( $wp_customize ) {

        $wp_customize->add_section('hero-section', array(
            'title' => 'Homepage - Hero',
            'priority' => 1,
            'description' => __('Hero section text and CTA', 'doesthismatter'),
        ));

      
  
        // hero section
        $wp_customize->add_setting('hero-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero-heading-control', array(
            'label' => 'Hero Heading',
            'section' => 'hero-section',
            'settings' => 'hero-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('hero-paragraph', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero-paragraph-control', array(
            'label' => 'Hero Paragraph',
            'section' => 'hero-section',
            'settings' => 'hero-paragraph',
            'type' => 'textarea'
        )));
    }


    private function first_section( $wp_customize ) {

    $wp_customize->add_section('first-section', array(
        'title' => 'Homepage - First Section',
        'priority' => 1,
        'description' => __('First Section section text and CTA', 'doesthismatter'),
    ));

   


        //first section
        $wp_customize->add_setting('first-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first-heading-control', array(
            'label' => 'First Heading',
            'section' => 'first-section',
            'settings' => 'first-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('first-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first-tagline-control', array(
            'label' => 'First Tagline',
            'section' => 'first-section',
            'settings' => 'first-tagline',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('first-paragraph', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first-paragraph-control', array(
            'label' => 'First Paragraph',
            'section' => 'first-section',
            'settings' => 'first-paragraph',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('first-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'first-image-control', array(
            'label' => 'Image',
            'section' => 'first-section',
            'settings' => 'first-image',
            'width' => 3000,
            'height' => 3000,
            'flex_height' => true,
            'flex_width'  => true,
        )));

    }

    private function second_section( $wp_customize ) {

    $wp_customize->add_section('second-section', array(
        'title' => 'Homepage - Second Section',
        'priority' => 1,
        'description' => __('second Section section text and CTA', 'doesthismatter'),
    ));
        //second section
        $wp_customize->add_setting('second-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-heading-control', array(
            'label' => 'second Heading',
            'section' => 'second-section',
            'settings' => 'second-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-tagline-control', array(
            'label' => 'second Tagline',
            'section' => 'second-section',
            'settings' => 'second-tagline',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-paragraph', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-paragraph-control', array(
            'label' => 'second Paragraph',
            'section' => 'second-section',
            'settings' => 'second-paragraph',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'second-image-control', array(
            'label' => 'Image',
            'section' => 'second-section',
            'settings' => 'second-image',
            'width' => 3000,
            'height' => 3000,
            'flex_height' => true,
            'flex_width'  => true,
        )));

    }
	private function classes_section( $wp_customize ) {

        $wp_customize->add_section('classes-section', array(
            'title' => 'Homepage - Classes Section',
            'priority' => 1,
            'description' => __('classes page content', 'doesthismatter'),
        ));


        $wp_customize->add_setting('classes-hero-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'classes-hero-heading-control', array(
            'label' => 'classes hero Heading',
            'section' => 'classes-section',
            'settings' => 'classes-hero-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('classes-hero-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'classes-hero-tagline-control', array(
            'label' => 'classes hero Tagline',
            'section' => 'classes-section',
            'settings' => 'classes-hero-tagline',
            'type' => 'textarea'
        )));

        // $wp_customize->add_setting('classes-image', array(
        //     'default' => '',
        //     'type' => 'theme_mod',
        //     'capability' => 'edit_theme_options',
        //     'sanitize_callback' => array($this, 'sanitize_custom_url')
        // ));

        // $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'classes-image-control', array(
        //     'label' => 'Image',
        //     'section' => 'classes-section',
        //     'settings' => 'classes-image',
        //     'width' => 3000,
        //     'height' => 3000,
        //     'flex_height' => true,
        //     'flex_width'  => true,
        // )));

        $wp_customize->add_setting('second-classes-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-classes-heading-control', array(
            'label' => 'second classes Heading',
            'section' => 'classes-section',
            'settings' => 'second-classes-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-classes-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-classes-tagline-control', array(
            'label' => 'second classes Tagline',
            'section' => 'classes-section',
            'settings' => 'second-classes-tagline',
            'type' => 'textarea'
        )));
       
    }

    private function about_page( $wp_customize ) {

        $wp_customize->add_section('about-page', array(
            'title' => 'About Page',
            'priority' => 1,
            'description' => __('about page content', 'doesthismatter'),
        ));


        $wp_customize->add_setting('about-hero-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-hero-heading-control', array(
            'label' => 'about hero Heading',
            'section' => 'about-page',
            'settings' => 'about-hero-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('about-hero-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-hero-tagline-control', array(
            'label' => 'about hero Tagline',
            'section' => 'about-page',
            'settings' => 'about-hero-tagline',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('about-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'about-image-control', array(
            'label' => 'Image',
            'section' => 'about-page',
            'settings' => 'about-image',
            'width' => 3000,
            'height' => 3000,
            'flex_height' => true,
            'flex_width'  => true,
        )));

        $wp_customize->add_setting('second-about-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-about-heading-control', array(
            'label' => 'second about Heading',
            'section' => 'about-page',
            'settings' => 'second-about-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-about-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-about-tagline-control', array(
            'label' => 'second about Tagline',
            'section' => 'about-page',
            'settings' => 'second-about-tagline',
            'type' => 'textarea'
        )));
       
    }

    

    private function contact_page( $wp_customize ) {

        $wp_customize->add_section('contact-page', array(
            'title' => 'Contact Page',
            'priority' => 1,
            'description' => __('contact page content', 'doesthismatter'),
        ));


        $wp_customize->add_setting('contact-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contact-heading-control', array(
            'label' => 'contact hero Heading',
            'section' => 'contact-page',
            'settings' => 'contact-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('contact-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contact-tagline-control', array(
            'label' => 'contact hero Tagline',
            'section' => 'contact-page',
            'settings' => 'contact-tagline',
            'type' => 'textarea'
        )));

    }

    private function guitar_page( $wp_customize ) {

        $wp_customize->add_section('guitar-section', array(
            'title' => 'Guitar Page',
            'priority' => 1,
            'description' => __('guitar page content', 'doesthismatter'),
        ));


        $wp_customize->add_setting('guitar-hero-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'guitar-hero-heading-control', array(
            'label' => 'guitar hero Heading',
            'section' => 'guitar-section',
            'settings' => 'guitar-hero-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('guitar-hero-paragraph', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'guitar-hero-paragraph-control', array(
            'label' => 'guitar hero Paragraph',
            'section' => 'guitar-section',
            'settings' => 'guitar-hero-paragraph',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('guitar-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'guitar-image-control', array(
            'label' => 'Image',
            'section' => 'guitar-section',
            'settings' => 'guitar-image',
            'width' => 3000,
            'height' => 3000,
            'flex_height' => true,
            'flex_width'  => true,
        )));

        $wp_customize->add_setting('second-guitar-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-guitar-heading-control', array(
            'label' => 'second guitar Heading',
            'section' => 'guitar-section',
            'settings' => 'second-guitar-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-guitar-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-guitar-tagline-control', array(
            'label' => 'second guitar Tagline',
            'section' => 'guitar-section',
            'settings' => 'second-guitar-tagline',
            'type' => 'textarea'
        )));
       
    }

    private function drums_page( $wp_customize ) {

        $wp_customize->add_section('drums-section', array(
            'title' => 'Drums Page',
            'priority' => 1,
            'description' => __('drums page content', 'doesthismatter'),
        ));


        $wp_customize->add_setting('drums-hero-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'drums-hero-heading-control', array(
            'label' => 'drums hero Heading',
            'section' => 'drums-section',
            'settings' => 'drums-hero-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('drums-hero-paragraph', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'drums-hero-paragraph-control', array(
            'label' => 'drums hero Paragraph',
            'section' => 'drums-section',
            'settings' => 'drums-hero-paragraph',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('drums-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'drums-image-control', array(
            'label' => 'Image',
            'section' => 'drums-section',
            'settings' => 'drums-image',
            'width' => 3000,
            'height' => 3000,
            'flex_height' => true,
            'flex_width'  => true,
        )));

        $wp_customize->add_setting('second-drums-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-drums-heading-control', array(
            'label' => 'second drums Heading',
            'section' => 'drums-section',
            'settings' => 'second-drums-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-drums-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-drums-tagline-control', array(
            'label' => 'second drums Tagline',
            'section' => 'drums-section',
            'settings' => 'second-drums-tagline',
            'type' => 'textarea'
        )));
       
    }
    private function piano_page( $wp_customize ) {

        $wp_customize->add_section('piano-section', array(
            'title' => 'Piano Page',
            'priority' => 1,
            'description' => __('piano page content', 'doesthismatter'),
        ));


        $wp_customize->add_setting('piano-hero-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'piano-hero-heading-control', array(
            'label' => 'piano hero Heading',
            'section' => 'piano-section',
            'settings' => 'piano-hero-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('piano-hero-paragraph', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'piano-hero-paragraph-control', array(
            'label' => 'piano hero Paragraph',
            'section' => 'piano-section',
            'settings' => 'piano-hero-paragraph',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('piano-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'piano-image-control', array(
            'label' => 'Image',
            'section' => 'piano-section',
            'settings' => 'piano-image',
            'width' => 3000,
            'height' => 3000,
            'flex_height' => true,
            'flex_width'  => true,
        )));

        $wp_customize->add_setting('second-piano-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-piano-heading-control', array(
            'label' => 'second piano Heading',
            'section' => 'piano-section',
            'settings' => 'second-piano-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-piano-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-piano-tagline-control', array(
            'label' => 'second piano Tagline',
            'section' => 'piano-section',
            'settings' => 'second-piano-tagline',
            'type' => 'textarea'
        )));
       
    }
}