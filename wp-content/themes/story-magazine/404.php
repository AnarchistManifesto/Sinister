<?php 
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div class="container">

<div id="core" class="postbarNone">

    <div id="content" class="eightcol first">
    
    	<div class="page">
            
            <div class="errorentry entry">
            
            	<div class="error-titles cntr">

            		<h1 class="entry-title" itemprop="headline"><?php esc_html_e('Nothing found here','story-magazine');?></h1>
            
            		<p><?php esc_html_e('Perhaps You will find something interesting from these lists...','story-magazine');?></p>
            
            		<div class="hrline p-border"></div>
        
	
				<?php get_search_form();?>
                        
                </div>     
			
				<?php get_template_part('/inc/404-content');?>
            
            </div>
    
    	</div>
            
    </div><!-- #content -->
        
</div>
    
<?php get_footer(); ?>