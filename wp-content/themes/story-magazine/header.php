<?php
/**
 * The header for Lookout theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146051361-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146051361-1');
</script>

<?php wp_head(); ?>
</head>

     
<body <?php body_class(); ?>>

<div class="postbar <?php if ( is_active_sidebar( 'tmnf-sidebar' ) ) {} else { echo 'postbarNone ';};?>">
        
    <div id="header" class="clearfix" itemscope itemtype="http://schema.org/WPHeader">
    
    	<div class="head-bg-image"><img src="<?php esc_url(header_image()); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="" /></div>
    
        <div class="container container_alt">
            
            <div id="titles">
                <?php story_magazine_site_logo(); ?>
                <?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
                		<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html(bloginfo('name')); ?></a></h1>
    					<p class="site-description site-tagline"><?php esc_html(bloginfo( 'description' )); ?></p>
					<?php endif; ?>
            </div><!-- end #titles  -->

            
    
            <a id="navtrigger" class="ribbon" href="#"><i class="fa fa-bars"></i></a>
            
            <nav id="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement"> 
            
                <?php get_template_part('/inc/navigation'); ?>
                
                <a class="searchOpen" href="#" ><i class="fa fa-search"></i></a>
                
            </nav><!-- end #navigation  -->
              
        </div><!-- end .container  -->
    
    </div><!-- end #header  -->
    
	<div class="wrapper">