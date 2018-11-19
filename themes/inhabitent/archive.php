<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 * Template Name: Archive Page Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					get_template_part( 'template-parts/content' );
                ?>
                <div class="cat-tags">
            <?php
        // get term for products and do stuff with images.
        $terms = get_terms(array(
            'taxonomy' => 'product_type', 'hide_empty' => 0,
        ));

        foreach($terms as $term): ?>
        
        <div class="tags-a">
        <a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></p>
        </div>
    
    
        <?php endforeach;
        ?>
        </div>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

                <div class="product-container">
                <?php
                    get_template_part( 'template-parts/content' );
                ?>
<div class="archive-text">
   <?php the_title(); ?>
   <?php get_template_part('price');?>
   <?php echo CFS()->get( 'price' ); ?>
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
