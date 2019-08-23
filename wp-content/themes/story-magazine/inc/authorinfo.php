<?php
/**
 * Template part for displaying author info
 */
?>
        <div class="postauthor vcard author p-border"  itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        	<h3 class="additional"><?php esc_html_e('About the Author','story-magazine');?> / <span class="fn" itemprop="name"><?php the_author_posts_link(); ?></span></h3>
            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            
            	<img src="<?php  echo esc_url(get_avatar_url( get_the_author_meta('ID'), '80' ));   ?>" class="avatar avatar-80 photo" height="80" width="80" /> 
				
            </div>
            
 			<div class="authordesc"><?php the_author_meta('description'); ?></div>
            
		</div>
		<div class="clearfix"></div>