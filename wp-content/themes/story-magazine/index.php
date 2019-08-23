<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="container">

<?php get_template_part('inc/mosaic');?>
    
<?php // blog content - start ?>
    
<div id="core">

	<div id="content" class="eightcol first">
            
          <div class="blogger">
          
					<?php if (have_posts()) : 
						while (have_posts()) : the_post();
					
						get_template_part('/post-layouts/home-small');
                    
					endwhile; ?><!-- end post -->
                    
           	</div><!-- end latest posts section-->
            
            <div class="clearfix"></div>

					<div class="pagination"><?php the_posts_pagination(); ?></div>

					<?php else : ?>
			

                            <div class="errorentry entry ghost">
                
                                <h1 class="post entry-title" itemprop="headline"><?php esc_html_e('Nothing found here','story-magazine');?></h1>
                            
                                <h4><?php esc_html_e('Perhaps You will find something interesting from these lists...','story-magazine');?></h4>
                            
                                <div class="hrline"></div>
                            
                                <?php get_template_part('inc/404-content');?>
                            
                            </div>
                        
                        
                        </div><!-- end latest posts section-->
                        
                        
					<?php endif; ?>               
    
    </div><!-- end #content -->
    
    
    <?php get_sidebar(); ?>
    
	<div class="clearfix"></div>
    
</div><!-- end #core -->
	
<?php // blog content - end ?>

<?php get_footer(); ?>