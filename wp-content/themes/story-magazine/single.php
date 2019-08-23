<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>

<?php if(has_post_format('quote'))  { ?>
    <div class="container">
    <?php get_template_part('/post-layouts/post-quote-post' );} else {?>  
    
      
<div itemscope itemtype="http://schema.org/NewsArticle">
<meta itemscope itemprop="mainEntityOfPage"  content=""  itemType="https://schema.org/WebPage" itemid="<?php the_permalink(); ?>"/>

<div id="core" class="container">
   
    <div class="postbar">

        <div id="content" class="eightcol first">
            
            <?php get_template_part('/single-content' ); ?>
               
        </div><!-- end #content -->
    
        <?php get_sidebar(); ?>
   
    </div><!-- end .postbar -->
    
</div> 

<?php }?>
        
        <?php endwhile; else: ?>
        
            <p><?php esc_html_e('Sorry, no posts matched your criteria','story-magazine');?>.</p>
        
        <?php endif; ?>
   
<?php get_footer(); ?>