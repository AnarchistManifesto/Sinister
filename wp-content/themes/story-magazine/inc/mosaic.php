<?php
/**
 * Template part for displaying main 'mosaic' section
 */
 
    $story_magazine_catID = get_theme_mod('story_magazine_slider_category');
	
	if (isset($story_magazine_catID ) ? $story_magazine_catID : null) {?> 

      <div class="wpm_mosaic_wrap">
          
                <ul class="wpm_mosaic">
                
					<?php $recent_posts = new WP_Query(array('showposts' => 1,'cat' => $story_magazine_catID,'ignore_sticky_posts'=>1));
                    while($recent_posts->have_posts()): $recent_posts->the_post(); ?>	
                    <li class="maso maso-1">
                        <?php get_template_part('/post-layouts/home-mosaic' ); ?>        
                    </li>  
                    <?php  endwhile; ?>
                    
                    
                    <?php $recent_posts = new WP_Query(array('showposts' => 1,'cat' => $story_magazine_catID,'offset' => 1,'ignore_sticky_posts'=>1));
                    while($recent_posts->have_posts()): $recent_posts->the_post(); ?>	
                    <li class="maso maso-2">
                        <?php get_template_part('/post-layouts/home-mosaic-small' ); ?>        
                    </li>  
                    <?php  endwhile; ?>
                    
                    
                    <?php $recent_posts = new WP_Query(array('showposts' => 1,'cat' => $story_magazine_catID,'offset' => 2,'ignore_sticky_posts'=>1));
                    while($recent_posts->have_posts()): $recent_posts->the_post(); ?>	
                    <li class="maso maso-3">
                        <?php get_template_part('/post-layouts/home-mosaic-small' ); ?>        
                    </li>  
                    <?php  endwhile; ?>
                    
                    
                    <?php $recent_posts = new WP_Query(array('showposts' => 1,'cat' => $story_magazine_catID,'offset' => 3,'ignore_sticky_posts'=>1));
                    while($recent_posts->have_posts()): $recent_posts->the_post(); ?>	
                    <li class="maso maso-4">
                        <?php get_template_part('/post-layouts/home-mosaic-small' ); ?>        
                    </li>  
                    <?php  endwhile; ?>
                    
                    
                    <?php $recent_posts = new WP_Query(array('showposts' => 1,'cat' => $story_magazine_catID,'offset' => 4,'ignore_sticky_posts'=>1));
                    while($recent_posts->have_posts()): $recent_posts->the_post(); ?>	
                    <li class="maso maso-5">
                        <?php get_template_part('/post-layouts/home-mosaic-small' ); ?>        
                    </li>  
                    <?php  endwhile; ?>    
            
                <?php wp_reset_postdata(); ?>
                </ul>
        
      </div><!-- end .mainflex -->

<?php }?>