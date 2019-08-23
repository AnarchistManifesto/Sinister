<?php
/**
 * The template for displaying pages
 */

get_header(); 

if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">

<div id="core">

    <div id="content" class="eightcol first">
    
		<div <?php post_class('item_inn  p-border'); ?>>

            <div class="entry">
        
                    <h1 class="post entry-title" itemprop="headline"><?php the_title(); ?></h1>
                
                    <div class="hrlineB p-border"></div>
                    
                    <?php the_content(); ?>
                    
                    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:','story-magazine') . '</span>', 'after' => '</div>' ) ); ?>
                    
                    <?php the_tags( '<p class="tagssingle">','',  '</p>'); ?>
                
                </div>       
                        
                <div class="clearfix"></div> 
                  
                <?php comments_template(); ?>
            
		</div>


	<?php endwhile; else: ?>

		<p><?php esc_html_e('Sorry, no posts matched your criteria','story-magazine');?>.</p>

	<?php endif; ?>

                <div class="clearfix"></div>

	</div><!-- #content -->

    <?php get_sidebar();?>

</div>

<?php get_footer(); ?>