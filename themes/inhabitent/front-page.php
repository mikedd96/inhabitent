<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <div class="hero-frontpage">
    <img class="frontpage-image" src="<?php echo get_template_directory_uri() . './images/home-hero.jpg';?>" />
</div>
		<div id="main" class="site-main" role="main">
        
        
        <section class="shop-stuff">
        <h2> Shop Stuff </h2>
        <div class="frontpage-container">
        <?php
        // get term for products and do stuff with images.
        $terms = get_terms(array(
            'taxonomy' => 'product_type', 'hide_empty' => 0,
        ));

        foreach($terms as $term): ?>
        
        <div class="frontpage-stuff">
        <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug . '.svg'; ?>" alt="<?php echo $term->name; ?>" />
        <p><?php echo $term->description; ?></p>
        <a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?> stuff</a></p>
        </div>
    
        <?php endforeach;
        ?>
        </div>
        </section>
        
        
        <?php
        //journal entries
   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => '3' );
   $product_posts = get_posts( $args ); // returns an array of posts
?>
<section class="front-page-journal">
<h2>Inhabitent Journal</h2>
<div class="journal-container">
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
<article class=" journal-entry">
   <?php 
   the_post_thumbnail('small');?>
   <div class="journal-text">
   <span class="entry-meta">    
   <?php
   red_starter_posted_on();
   echo ' / ';
   comments_number( '0 comments', '1 comment', '% comments' );
   ?>
   </span>
   <a class="journal-title" href="<?php echo get_the_permalink(); ?>">
   <?php the_title(); ?>
   </a>
   <a class="read-more" href="<?php echo get_the_permalink(); ?>">
   Read More
   </a>
    </div>
   </article>
<?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>
		

		</div><!-- #main -->
	</div>

<?php get_footer(); ?>