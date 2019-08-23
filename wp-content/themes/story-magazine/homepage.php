<?php 
/*
Template Name: Widgetable Builder
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">

<?php get_template_part('inc/mosaic');?>

<div id="core">

    <div id="content" class="eightcol first">
                    
    	<?php if ( is_active_sidebar( 'tmnf-homepage-content' ) ) { 
			dynamic_sidebar('tmnf-homepage-content') ;
		} else { 
			echo '<h3>' ;
			esc_html_e('Create homepage layout in Appearance > Customize > Widgets ','story-magazine');
			echo '</h3>';
			esc_html_e('Use widgets marked as "Home" to create magazine layout','story-magazine');
		}?>

	<?php endwhile; else: ?>

		<p><?php esc_html_e('Sorry, no posts matched your criteria','story-magazine');?>.</p>

	<?php endif; ?>

        <div class="clearfix"></div>

	</div><!-- #content -->

    <?php get_sidebar();?>

</div>

<?php get_footer(); ?>