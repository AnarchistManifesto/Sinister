<?php
/**
 * The template for the sidebar containing the main widget area
 */
?>

	<div id="sidebar"  class="fourcol woocommerce p-border">
    
    	<?php if ( is_active_sidebar( 'tmnf-sidebar' ) ) { ?>
        
            <div class="widgetable p-border">
    
                <?php dynamic_sidebar('tmnf-sidebar')  ?>
            
            </div>
            
		<?php } ?>
        
    	<?php if ( is_active_sidebar( 'tmnf-sidebar-sticky' ) ) { ?>
        
            <div class="widgetable widgetable_sticky">
    
                <?php dynamic_sidebar('tmnf-sidebar-sticky'); ?>
            
            </div>
        
        <?php } ?>
        
    </div><!-- #sidebar --> 