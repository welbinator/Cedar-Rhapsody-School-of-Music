<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Cedar_Rhapsody_School_of_Music
 */


?>

<?php echo get_header(); ?>
<div class="hero page-hero">
    <div class="container">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'cedar-rhapsody-school-of-music' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cedar-rhapsody-school-of-music' ); ?></p>

					

					

					

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

		</div><!-- container -->
	</div><!-- hero about-hero -->

	<?php echo get_footer(); ?>