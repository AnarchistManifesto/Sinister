<?php
/**
 * Template part for displaying posts in magazine layout (1)
 */
?>

          	<div <?php post_class('item mag-item  mag-item-small mag-one-item-small tranz  p-border'); ?>>
     
                <div class="entryhead">
                    
                   	<?php echo story_magazine_icon();?>
                
                	<div class="icon-rating tranz">
            
                    	<?php if (function_exists('wp_review_show_total')) wp_review_show_total(); ?>
                    
                    </div>
    
					<?php if ( has_post_thumbnail()){ ?>
                    
                        <div class="imgwrap">
							
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail('thumbnail',array('class' => 'tranz standard grayscale grayscale-fade'));  ?>
                            </a>
                        
                        </div>
    
                    <?php } else { } ?> 
                
                </div><!-- end .entryhead -->
    
            	<div class="item_inn tranz p-border">
        
                    <h3 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                
                	<?php story_magazine_meta_date();?>
                    
                    <div class="clearfix"></div>
                    
                    <?php the_excerpt(); ?>
                
                </div><!-- end .item_inn -->
        
            </div>