<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}

function my_login_logo() { ?>
    <style type='text/css'>
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/logos/inhabitent-logo-text-dark.svg);
        height:65px;
        width:320px;
        background-size: 320px 65px;
        background-repeat: no-repeat;
        padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
add_filter( 'body_class', 'red_starter_body_classes' );

function the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );


/*

* Custom Hero Image for the About Page

*/

function inhabitent_dynamic_css(){

    if(!is_page_template('about.php')){
   
      return;
   
    }
   
   
   
    $image = CFS()->get('about_header_image');
   
   
   
    if(!$image){
   
      $hero_css = ".page-template-about .entry-header {
   
        background: grey ;
   
        color: white;
   
        width: 100%;
   
        height: 100vh;
   
        display: flex;
   
        justify-content: center;
   
        align-items: center;
   
      }";
   
    } else {
   
      $hero_css = ".page-template-about .entry-header {
   
        background: grey;
   
        background: no-repeat center bottom linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
   
        url({$image}) no-repeat center bottom;
   
        color: white;
   
        width: 100%;
   
        height: 100vh;
   
        display: flex;
   
        justify-content: center;
   
        align-items: center;
   
        background-size: cover;
   
      }";
   
    }
   
   
   
    wp_add_inline_style('red-starter-style',  $hero_css);
   
   }
   
   
   
   add_action('wp_enqueue_scripts', 'inhabitent_dynamic_css');