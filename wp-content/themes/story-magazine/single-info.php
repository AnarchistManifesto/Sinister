<?php
/**
 * The template for displaying additional information of the single post
 */
?>

<div class="postinfo p-border">    

<?php
	
	//tags/likes
	the_tags( '<p class="meta taggs"> ', ' ', '</p>');?>
        <p class="modified small cntr" itemprop="dateModified" ><?php esc_html_e('Last modified','story-magazine');?>: <?php the_modified_date(); ?></p>
	<?php 
	
	// prev/next	
	get_template_part('inc/nextprev');
	echo '<div class="clearfix"></div>';
	
	// author
	get_template_part('/inc/authorinfo');
	
?>
            
</div>

<div class="clearfix"></div>
 			
            

                        
