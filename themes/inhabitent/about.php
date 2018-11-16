<?php
/**
 * The template for displaying the about page on inhabitent.
 *
 * @package RED_Starter_Theme
 * Template Name: About Page Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<!-- <div class="hero-frontpage">
    <img class="frontpage-image" src="<?php echo get_template_directory_uri() . './images/about-hero.jpg';?>" />
</div> -->
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
