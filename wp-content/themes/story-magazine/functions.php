<?php

/**
 * Story Magazine theme functions and definitions
 */

/*-----------------------------------------------------------------------------------
- Default
----------------------------------------------------------------------------------- */

add_action( 'after_setup_theme', 'story_magazine_theme_setup' );

function story_magazine_theme_setup() {
	global $content_width;

	/* Set the $content_width for things such as video embeds. */
	if ( !isset( $content_width ) )
		$content_width = 854;

	/* Add theme support */
	add_theme_support( 'post-formats', array( 'video','audio', 'gallery','quote', 'link', 'aside' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'custom-background',array('default-color' => 'fff') );
	add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	/* Add theme support for post thumbnails (featured images). */
	add_theme_support('post-thumbnails');
	add_image_size('story_magazine_classic', 854, 540, true ); //(cropped)
	add_image_size('story_magazine_blog', 353, 220, true ); //(cropped)
	add_image_size('story_magazine_big', 650, 540, true ); //(cropped)
	add_image_size('story_magazine_small', 305, 270, true ); //(cropped)
	add_image_size('story_magazine_tabs', 100, 80, true ); //(cropped)
	
	/* Add menus */
	register_nav_menus(array(
		'main-menu-left' => esc_html__( 'Main Menu (Left)','story-magazine' ),
		'main-menu-right' => esc_html__( 'Main Menu (Right)','story-magazine' ),
		'bottom-menu' => esc_html__( 'Footer Menu','story-magazine' ),
	));
		
	/* Add your sidebars function to the 'widgets_init' action hook. */
	add_action( 'widgets_init', 'story_magazine_register_sidebars' );
	
	/* Make theme available for translation */
	load_theme_textdomain('story-magazine', get_template_directory() . '/lang' );
	
	/* header image */
	$args = array(
		'flex-width'    => true,
		'width'         => 1200,
		'flex-height'    => true,
		'height'        => 100,
		'default-image' => '',
		'header-text'   => false,
	);
	add_theme_support( 'custom-header', $args );
	
	/* editor style */
 	add_editor_style('styles/admin.css');

}

function story_magazine_register_sidebars() {
	
	register_sidebar(array('name' => esc_html__( 'Sidebar','story-magazine' ),'id' => 'tmnf-sidebar','description' => esc_html__( 'Sidebar widget section (displayed on posts / blog)','story-magazine' ),'before_widget' => '<div class="sidele ghost">','after_widget' => '</div>','before_title' => '<h2 class="widget">','after_title' => '</h2>'));
	
	register_sidebar(array('name' => esc_html__( 'Sidebar (Sticky)','story-magazine' ),'id' => 'tmnf-sidebar-sticky','description' => esc_html__( 'Sidebar widget section (displayed on posts / blog)','story-magazine' ),'before_widget' => '<div class="sidele ghost">','after_widget' => '</div>','before_title' => '<h2 class="widget">','after_title' => '</h2>'));
	
	register_sidebar(array('name' => esc_html__( 'Homepage Content','story-magazine' ),'id' => 'tmnf-homepage-content','description' => esc_html__( 'Magazine widget section (displayed on the homepage). Add widgets marked as "Home" into it.','story-magazine' ),'before_widget' => '<div class="wpm_homepage_block">','after_widget' => '</div>','before_title' => '<h2 class="block">','after_title' => '</h2>'));
	
	//footer widgets
	register_sidebar(array('name' => esc_html__( 'Footer 1','story-magazine' ),'id' => 'tmnf-footer-1','description' => esc_html__( 'Widget section in footer - left','story-magazine' ),'before_widget' => '','after_widget' => '','before_title' => '<h2 class="widget dekoline">','after_title' => '</h2>'));
	register_sidebar(array('name' => esc_html__( 'Footer 2','story-magazine' ),'id' => 'tmnf-footer-2','description' => esc_html__( 'Widget section in footer - center/left','story-magazine' ),'before_widget' => '','after_widget' => '','before_title' => '<h2 class="widget dekoline">','after_title' => '</h2>'));
	register_sidebar(array('name' => esc_html__( 'Footer 3','story-magazine' ),'id' => 'tmnf-footer-3','description' => esc_html__( 'Widget section in footer - center/right','story-magazine' ),'before_widget' => '','after_widget' => '','before_title' => '<h2 class="widget dekoline">','after_title' => '</h2>'));
	register_sidebar(array('name' => esc_html__( 'Footer 4','story-magazine' ),'id' => 'tmnf-footer-4','description' => esc_html__( 'Widget section in footer - right','story-magazine' ),'before_widget' => '','after_widget' => '','before_title' => '<h2 class="widget dekoline">','after_title' => '</h2>'));
	
}

// customizer additions
require get_template_directory() . '/functions/customizer.php';
require get_template_directory() . '/functions/custom-controls.php';



// add custom logo
function story_magazine_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'story_magazine_custom_logo_setup' );

	
/*-----------------------------------------------------------------------------------
- Enqueues scripts and styles for front end
----------------------------------------------------------------------------------- */ 

function story_magazine_enqueue_style() {
	
	// main stylesheet
	wp_enqueue_style( 'story-magazine-style', get_stylesheet_uri());
	
	// Font Awesome css	
	wp_enqueue_style('font-awesome', get_template_directory_uri() .	'/styles/font-awesome.css');
	
	// mobile stylesheet
	wp_enqueue_style('story-magazine-mobile', get_template_directory_uri().'/style-mobile.css');
	
	// google link
	function story_magazine_fonts_url() {
		$font_url = add_query_arg( 'family', urlencode( 'Libre Franklin:400,400i,700|Merriweather:300,400,700,400i|Montserrat:400,500,600,700&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese' ), "//fonts.googleapis.com/css" );
		return $font_url;
	}
	wp_enqueue_style( 'story-magazine-fonts', story_magazine_fonts_url(), array(), '1.0.0' );
	
}
add_action( 'wp_enqueue_scripts', 'story_magazine_enqueue_style' );


function story_magazine_enqueue_script() {

		// Load Common scripts
		wp_enqueue_script('jquery-scrolltofixed', get_template_directory_uri() .'/js/jquery-scrolltofixed.js',array( 'jquery' ),'', true);
		wp_enqueue_script('story-magazine-ownScript', get_template_directory_uri() .'/js/ownScript.js',array( 'jquery' ),'', true);
		

		// Singular comment script		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

}
	
add_action('wp_enqueue_scripts', 'story_magazine_enqueue_script');


/*-----------------------------------------------------------------------------------
- Include custom widgets
----------------------------------------------------------------------------------- */

include_once (get_template_directory() . '/functions/widgets/widget-featured.php');
include_once (get_template_directory() . '/functions/widgets/widget-featured-small.php');
include_once (get_template_directory() . '/functions/widgets/widget-social.php');
include_once (get_template_directory() . '/functions/widgets/widget-mag1.php');
include_once (get_template_directory() . '/functions/widgets/widget-mag2.php');
include_once (get_template_directory() . '/functions/widgets/widget-mag3.php');

	
/*-----------------------------------------------------------------------------------
- Other theme functions
----------------------------------------------------------------------------------- */


// icons - font awesome
function story_magazine_icon() {
	
	if(has_post_format('audio')) {return '<i title="'. esc_attr__('Audio','story-magazine').'" class="tmnf_icon fa fa-volume-up"></i>';
	}elseif(has_post_format('gallery')) {return '<i title="'. esc_attr__('Gallery','story-magazine').'" class="tmnf_icon fa fa-picture-o"></i>';
	}elseif(has_post_format('image')) {return '<i title="'. esc_attr__('Image','story-magazine').'" class="tmnf_icon fa fa-camera"></i>';	
	}elseif(has_post_format('link')) {return '<i title="'. esc_attr__('Link','story-magazine').'" class="tmnf_icon fa fa-link"></i>';			
	}elseif(has_post_format('quote')) {return '<i title="'. esc_attr__('Quote','story-magazine').'" class="tmnf_icon fa fa-quote-right"></i>';		
	}elseif(has_post_format('video')) {return '<i title="'. esc_attr__('Video','story-magazine').'" class="tmnf_icon fa fa-play"></i>';
	} else {}	
	
}

// excerpt class
function story_magazine_class_to_excerpt( $excerpt ){
    return '<div class="wpm_excerpt clearfix">'.$excerpt.'</div>';
}
add_action('the_excerpt','story_magazine_class_to_excerpt');


// tweak excerpt text for use in theme
function story_magazine_excerpt($text, $chars = 1620) {
	$text = $text." ";
	$text = substr($text,0,$chars);
	$text = substr($text,0,strrpos($text,' '));
	$text = $text."";
	return $text;
}

function story_magazine_trim_excerpt($text) {
    if ( is_admin() ) {
        return;
    }
	$text = str_replace('[', '', $text);
	$text = str_replace(']', '', $text);
	return $text;
    }
add_filter('get_the_excerpt', 'story_magazine_trim_excerpt');

function story_magazine_excerpt_length( $length ) {
    if ( is_admin() ) {
        return;
    }
        return 26;
    }
add_filter( 'excerpt_length', 'story_magazine_excerpt_length', 999 );



// meta sections

function story_magazine_meta_cat() {
	?>    
	<p class="meta cat rad tranz ribbon">
		<?php the_category(' &bull; ') ?>
    </p>
    <?php
}

function story_magazine_meta_date() {
	?>    
	<p class="meta date tranz post-date"> 
        <?php the_time(get_option('date_format')); ?>
    </p>
    <?php
}

function story_magazine_meta_author() {
	?>    
	<p class="meta author tranz"> 
        <?php 
		echo get_avatar( get_the_author_meta('ID'), '22' );
		echo '<span>'; esc_html_e('Written by: ','story-magazine'); the_author_posts_link();echo '</span>';
		?>
    </p>
    
    <?php
}

function story_magazine_meta() { ?>   
	<p class="meta">
		<?php the_time(get_option('date_format')); ?> &bull; 
		<?php the_category(', ') ?>
    </p>
<?php }

function story_magazine_meta_full() { ?>    
	<p class="meta meta_full">
		<span itemprop="datePublished" class="post-date updated"><i class="icon-clock"></i> <?php the_time(get_option('date_format')); ?></span>
		<span class="categs"><i class="icon-folder-empty"></i> <?php the_category(', ') ?></span>
    </p>
<?php
}

function story_magazine_meta_more() {
	?>    
	<p class="meta_more rad">
    		<a class="rad p-border" href="<?php the_permalink() ?>"><?php esc_html_e('Read More','story-magazine');?> <i class="fa fa-angle-right"></i></a>
    </p>
    <?php
}

// site logo
if ( ! function_exists( 'story_magazine_site_logo' ) ) :
function story_magazine_site_logo() {

	if ( function_exists( 'the_custom_logo' ) ) {
    if(has_custom_logo()) {
        the_custom_logo();
    } else { ?>
    <?php }
	} 
} 
endif;


// footer text
function story_magazine_footer_text() {
	?>

	<span class="credit-link">
		<?php printf( esc_html__( 'Powered by %1$s and %2$s.', 'story-magazine' ),
			'<a href="https://wordpress.org" title="WordPress">WordPress</a>',
			'<a href="https://wpmasters.org/" title="Story Magazine Theme">Story Magazine</a>'
		); ?>
	</span>

	<?php
}
add_action( 'story_magazine_footer_text', 'story_magazine_footer_text' );

?>