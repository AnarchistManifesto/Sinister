<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>
    
<div class="container builder woocommerce">

<div id="core" class="blog_builder">

	<div id="content" class="eightcol first">

        <h2 class="archiv"><span class="maintitle"><?php echo esc_html($s); ?></span></h2>
        <div class="archiv"><p class="subtitle"><?php esc_html_e('Search Results','story-magazine');?> </p></div> 
    
    	<?php if (have_posts()) : ?>

          <div class="blogger grid imgsmall">
                                    
                <?php while (have_posts()) : the_post();
					
					get_template_part('/post-layouts/home-small');
					
				endwhile; ?><!-- end post -->
                    
           	</div><!-- end latest posts section-->
            
            <div class="clearfix"></div>

					<div class="pagination"><?php the_posts_pagination(); ?></div>

					<?php else : ?>
			
						<div class="item_inn">
                        
                            <div class="errorentry entry">
                
                                <h1 class="post entry-title" itemprop="headline"><?php esc_html_e('Nothing found here','story-magazine');?></h1>
                                
                                <?php get_search_form(); ?>
                            
                                <h3><?php esc_html_e('Perhaps You will find something interesting from these lists...','story-magazine');?></h3>
                            
                                <div class="hrline"></div>
                            
                                <?php get_template_part('inc/404-content');?>
                            
                            </div>
                            
                       	</div>
                        
                        
                        
                        
					<?php endif; ?>
    
    </div><!-- end #content -->
    
    
    <?php get_sidebar(); ?>
    
	<div class="clearfix"></div>
    
</div><!-- end #core -->
    
<div class="clearfix"></div>

<?php get_footer(); ?>