<?php
/**
 * The template for displaying content of the single post
 */
?>

<div <?php post_class('item normal tranz p-border'); ?>>

	<div class="post-head">

        <h1 class="entry-title" itemprop="headline"><span itemprop="name"><?php the_title(); ?></span></h1>
        
        <?php if ( has_excerpt( $post->ID ) ) {the_excerpt();}?>
  				
		<?php story_magazine_meta_cat();?>
	
    </div>
    
    <?php if ( has_post_thumbnail()) : ?>
    
        <div class="entryhead" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
            
            <a href="<?php the_permalink(); ?>">
            
            	<?php the_post_thumbnail('story_magazine_classic',array('class' => 'standard grayscale grayscale-fade'));  ?>
            
            </a>
        
        </div><!-- end .entryhead -->
 
    <?php endif; ?>
              
    <div class="clearfix"></div>
    
    <div class="item_inn tranz p-border">
    
        <div class="meta-single p-border">
            
            <?php story_magazine_meta_author(); story_magazine_meta_date();?>
            
        </div>
        
        <div class="clearfix"></div>
                             
        <div class="entry" itemprop="text">
              
            <?php 
            
                the_content(); 
				
                echo '<div class="post-pagination">';
                wp_link_pages( array( 'before' => '<div class="page-link">', 'after' => '</div>',
				'link_before' => '<span>', 'link_after' => '</span>', ) );
				wp_link_pages(array(
					'before' => '<p>',
					'after' => '</p>',
					'next_or_number' => 'next_and_number', # activate parameter overloading
					'nextpagelink' => esc_html__('Next','story-magazine'),
					'previouspagelink' => esc_html__('Previous','story-magazine'),
					'pagelink' => '%',
					'echo' => 1 )
				);
				echo '</div>';
            
            ?>
            
            <div class="clearfix"></div>
            
        </div><!-- end .entry -->
        
            <?php 
				
                get_template_part('/single-info');
                
                comments_template(); 
                
            ?>
        
	</div><!-- end .item_inn -->
      
</div>