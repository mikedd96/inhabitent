<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <div class="hero-frontpage">
        <img class="frontpage-icon" src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg';?>" alt="inhabitent-icon" />
    <img class="frontpage-image" src="<?php echo get_template_directory_uri() . 'img/images/home-hero.jpg';?>" alt="front-page-banner-image"/>
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
        <a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?> stuff</a>
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
<h2 class="latest-adventures">latest adventures</h2>
<div class="adventures">
    <div class="canoe">
        <div class="adventure-title-1">Getting Back to Nature in a Canoe   
        </div>
        <a class="read-more-1" href="">
            Read More
            </a>
    </div>
    <div class="right-adventure">
        <div class="beach"> 
            <div class="adventure-title-2">A Night with Friends at the Beach    
            </div>
            <a class="read-more-2" href="">
                Read More
                </a>
        </div>
        <div class="bottom-adventure">
            <div class="mountain">
                <div class="adventure-title-3">Taking in the View at Big Mountain    
                </div>
                <a class="read-more-3" href="">
                    Read More
                    </a>
            </div>
    <div class="stars"> 
        <div class="adventure-title-3">Star-Gazing at the Night Sky   
        </div>
        <a class="read-more-3" href="">
            Read More
            </a>
    </div>
    </div>
    </div>
</div>
<div class="more-button">
    <a class="more-adventures" href="">more adventures</a>
    </div>
		</div><!-- #main -->
	</div>

<?php get_footer(); ?>