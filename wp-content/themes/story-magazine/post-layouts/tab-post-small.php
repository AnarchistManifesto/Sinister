<?php
/**
 * Template part for displaying posts in featured widget
 */
?>

<div class="tab-post p-border">

	<?php if ( has_post_thumbnail()) : ?>
    
        <div class="imgwrap">
        
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            
              <?php the_post_thumbnail( 'story_magazine_tabs',array('class' => "grayscale grayscale-fade")); ?>
              
            </a>
        
        </div>
         
    <?php endif; ?>
        
    <div class="tab-post-inn">
        
    	<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
    
		<?php story_magazine_meta_date();  ?>
    
    </div>

</div>