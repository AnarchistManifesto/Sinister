<?php
/**
 * Template part for displaying posts in magazine layout (3)
 */
?>

          	<div <?php post_class('item mag-item  mag-item-big mag-three-item-big tranz  p-border title_over'); ?>>
     
                <div class="entryhead">
                    
                   	<?php echo story_magazine_icon();?>
                
                	<div class="icon-rating tranz">
            
                    	<?php if (function_exists('wp_review_show_total')) wp_review_show_total(); ?>
                    
                    </div>
    
					<?php if ( has_post_thumbnail()){ ?>
                    
                        <div class="imgwrap">
  				
                			<?php story_magazine_meta_cat();?>
							
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail('story_magazine_blog',array('class' => 'tranz standard grayscale grayscale-fade'));  ?>
                            </a>
                        
                        </div>
    
                    <?php } else { } ?> 
                
                </div><!-- end .entryhead -->
    
            	<div class="item_inn tranz wpm_gradient">
                
                	<?php story_magazine_meta_date();?>
        
                    <h2 class="posttitle"><a class="link link--forsure" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    <?php story_magazine_meta_author();?>
                
                </div><!-- end .item_inn -->
        
            </div>