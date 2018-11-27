<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 * Template Name: Archive Page Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="category-parts">
	<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
		</div>
		<main id="main" class="site-main" role="main">
        
		<?php if ( have_posts() ) : ?>

			

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

                <div class="product-container">
                <?php
                    get_template_part( 'template-parts/content' );
                ?>
<div class="archive-text">
   <?php the_title(); ?>
<div class="elips">
   </div>
   <?php echo "$" . CFS()->get( 'price' ); ?>
    </div>
</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>
            

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
