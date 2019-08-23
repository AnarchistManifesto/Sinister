<?php
/*
Template Name: Full Width
*/

get_header(); ?>

<div class="container">

	<div id="core">
    
    	<div class="item_inn fullcontent">
        
        <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
        
            <div class="entry entryfull">
                
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <?php the_content(); ?>
                
                <?php wp_link_pages(array('before' => '<p><strong>' . esc_html__( 'Pages:','story-magazine') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                
                <?php endwhile; endif; ?>
                
            </div>
        
        </div>
        
	</div> 
    
<div class="clearfix"></div>
    
<?php get_footer(); ?>