<?php
/**
 * Template part for displaying posts in blog layout
 */
?>
          	<div <?php post_class('item blog-item tranz  p-border'); ?>>
  				
                <?php story_magazine_meta_cat();?>
     
                <div class="entryhead">
                    
                   	<?php echo story_magazine_icon();?>
                
                	<div class="icon-rating tranz">
            
                    	<?php if (function_exists('wp_review_show_total')) wp_review_show_total(); ?>
                    
                    </div>
    
					<?php if ( has_post_thumbnail()){ ?>
                    
                        <div class="imgwrap">
							
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('story_magazine_blog',array('class' => 'tranz standard grayscale grayscale-fade'));  ?>
                            </a>
                        
                        </div>
    
                    <?php } else { } ?> 
                
                </div><!-- end .entryhead -->
    
            	<div class="item_inn tranz p-border">
                
                	<?php story_magazine_meta_date();?>
        
                    <h2 class="posttitle"><a class="link link--forsure" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    <?php story_magazine_meta_author();?>
                    
                    <div class="clearfix"></div>
                    
					<?php the_excerpt(); ?>
                
                </div><!-- end .item_inn -->
        
            </div>