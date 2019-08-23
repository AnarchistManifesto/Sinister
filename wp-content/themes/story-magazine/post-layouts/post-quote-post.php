<?php
/**
 * Template part for displaying quote posts
 */
?>

<div <?php post_class('tranz ribbon'); ?>>

		<?php the_post_thumbnail('standard',array('itemprop' => 'image'));  ?>

		<blockquote>
        
			<?php the_content(); ?>
        
        </blockquote>
        
        <p class="quuote_author"> &bull; <?php the_title(); ?> &bull; </p>
</div>