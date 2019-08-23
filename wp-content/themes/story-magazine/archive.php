<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>
    
<div class="container builder woocommerce">

<div id="core" class="blog_builder">

	<div id="content" class="eightcol first">
    
		<?php
				the_archive_title( '<h2 class="archiv"><span class="maintitle">', '</span></h2>' );
				the_archive_description( '<div class="archiv"><span class="subtitle">', '</span></div>' );
        ?>
    
    
    	<?php if (have_posts()) : ?>

          <div class="blogger grid imgsmall">
                                        
                    <?php while (have_posts()) : the_post(); 
					
                    	get_template_part('/post-layouts/home-small');
							
                    endwhile; ?><!-- end post -->
                    
           	</div><!-- end latest posts section-->
            
            <div class="clearfix"></div>

					<div class="pagination"><?php the_posts_pagination(); ?></div>

					<?php else : ?>
			

                            <div class="errorentry entry">
                
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

<div class="clearfix"></div>

<?php get_footer(); ?>