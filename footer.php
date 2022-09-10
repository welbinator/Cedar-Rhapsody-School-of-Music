<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cedar_Rhapsody_School_of_Music
 */

?>

<div class="section footer">
        <div class="container text-center"><svg class="footer-logo" viewBox="0 0 73 71" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
    <g id="Artboard1" transform="matrix(0.311588,0,0,1,0,0)">
        <rect x="0" y="0" width="233" height="71" style="fill:none;" />
        <clipPath id="_clip1">
            <rect x="0" y="0" width="233" height="71" />
        </clipPath>
        <g clip-path="url(#_clip1)">
            <g transform="matrix(3.20937,0,0,1,0,0)">
                <path d="M54.191,22.837C51.797,30.316 44.405,53.406 42.223,60.209C41.617,62.102 40.211,63.635 38.376,64.402C37.155,64.916 35.625,65.234 33.85,64.944C27.25,63.869 28.539,55.591 35.908,55.623C40.228,55.642 41.316,59.425 41.316,59.425L49.738,15.272L65.745,31.278L54.191,22.837Z" style="fill:white;" />
            </g>
            <g transform="matrix(3.20937,0,0,1,3.42059e-14,5.32907e-15)">
                <path d="M22.366,52.628C21.753,55.651 22.132,58.831 23.503,61.657L-0,38.154L9.699,28.455L22.366,52.628ZM72.62,38.154L49.118,61.656C50.49,58.827 50.868,55.64 50.252,52.615L61.563,31.005L72.62,38.154ZM24.58,47.414C23.952,48.326 23.442,49.295 23.051,50.299L11.008,27.146L15.818,22.336L24.58,47.414ZM48.035,47.406L55.193,26.887L60.08,30.047L49.566,50.288C49.174,49.285 48.664,48.317 48.035,47.406ZM28.481,43.581C27.546,44.199 26.68,44.931 25.904,45.766L17.191,20.962L22.976,15.177L28.481,43.581ZM33.18,41.578C32.114,41.819 31.082,42.181 30.104,42.657L24.46,13.694L31.451,6.703L33.18,41.578ZM39.434,41.576L41.153,6.687L48.144,13.677L42.509,42.653C41.531,42.178 40.499,41.816 39.434,41.576ZM35.003,41.289L33.105,5.049L36.31,1.844L39.499,5.032L37.611,41.288C37.18,41.249 36.746,41.229 36.31,41.229C35.872,41.229 35.435,41.249 35.003,41.289Z" style="fill:rgb(202,6,0);" />
            </g>
        </g>
    </g>
</svg>

            <ul class="nav justify-content-center social-nav mb-3 ml-0">
                <li class="nav-item"><a class="nav-link active" href="https://www.facebook.com/cedarrhapsody"><i class="fab fa-facebook"></i></a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li> -->
            </ul>
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-nav',
					'container_class' => '',
					'container_id' => 'navcol-2',
					'menu_class'   => 'nav navbar-nav ml-auto pb-3 pb-lg-0 d-flex flex-row justify-content-center',
					'menu_id'        => 'nav navbar-nav',
					'add_link_class' => 'nav-link',
				)
			);
			?>
            <p class="small text-white-50 mt-3">COPYRIGHT © CEDAR RHAPSODY SCHOOL OF MUSIC. ALL RIGHTS RESERVED</p>
        </div>
    </div>
    
    
   
    

    <!-- <script src="https://fons.com/fons-widget.js"></script> -->
   
 
<?php wp_footer(); ?>

</body>
</html>
