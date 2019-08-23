<?php
/**
 * Template part for displaying 404 additional info
 */
?>

        <h4><?php esc_html_e('All Blog Posts','story-magazine');?>:</h4>

        <ul><?php $archive_query = new WP_Query('showposts=1000');
while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
            <li>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>

                </a>
            </li>

            <?php endwhile;
			wp_reset_postdata(); ?>
        </ul>
                
                
        <div class="sixcol first">

                <h4><?php esc_html_e('Pages','story-magazine');?></h4>

                <ul class="error"><?php wp_list_pages("title_li=&depth=2"); ?></ul>

            </div>
            
          	<div class="sixcol">
            
               	<h4><?php esc_html_e('Categories','story-magazine');?></h4>
                
				<ul class="error"><?php wp_list_categories("title_li=&depth=2"); ?></ul>
                
            </div>            

            <div class="clearfix"></div>