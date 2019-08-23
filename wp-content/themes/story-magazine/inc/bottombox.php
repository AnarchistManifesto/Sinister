<?php
/**
 * Template part for displaying footer widget section
 */
?>

       	<?php if ( is_active_sidebar( 'tmnf-footer-1' ) ) { ?>
    
            <div class="foocol first"> 
            
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 1") ) : ?>
                <?php endif; ?>
                
            </div>
        
        <?php } ?>
        
        
        <?php if ( is_active_sidebar( 'tmnf-footer-2' ) ) { ?>
        
            <div class="foocol">
            
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 2") ) : ?>
                <?php endif; ?>
                
            </div>
        
        <?php } ?>
        
        
        <?php if ( is_active_sidebar( 'tmnf-footer-3' ) ) { ?>
        
            <div class="foocol"> 
            
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 3") ) : ?>
                <?php endif; ?>
                
            </div>
        
        <?php } ?>
        
        
        <?php if ( is_active_sidebar( 'tmnf-footer-4' ) ) { ?>
        
            <div class="foocol last"> 
            
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 4") ) : ?>
                <?php endif; ?>
                
            </div>
        
        <?php } ?>