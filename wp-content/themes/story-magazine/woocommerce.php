<?php
/**
The template for woocommerce pages and products
*/

get_header(); ?>

<div class="container">

	<div id="core">
    
    	<div class="item_inn">
        
            <div class="entry entryfull entrywoo">
        
                <?php woocommerce_content(); ?>
                
            </div>
        
        </div>
        
	</div> 
    
<div class="clearfix"></div>

<?php get_footer(); ?>