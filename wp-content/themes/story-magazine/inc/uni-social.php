<?php
/**
 * Template part for displaying social icon section
 */
?>
<ul class="social-menu">

<?php if(get_theme_mod('story_magazine_facebook')) { ?>
<li class="sprite-facebook">
	<a title="<?php esc_attr_e('Facebook','story-magazine');?>" href="<?php echo esc_url(get_theme_mod('story_magazine_facebook'));?>"><i class="fa fa-facebook-official"></i><span><?php esc_html_e('Facebook','story-magazine');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('story_magazine_twitter') )  { ?>
<li class="sprite-twitter">
	<a title="<?php esc_attr_e('Twitter','story-magazine');?>" href="<?php echo esc_url(get_theme_mod('story_magazine_twitter'));?>"><i class="fa fa-twitter"></i><span><?php esc_html_e('Twitter','story-magazine');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('story_magazine_google') )  { ?>
<li class="sprite-google">
	<a title="<?php esc_attr_e('Google+','story-magazine');?>" href="<?php echo esc_url(get_theme_mod('story_magazine_google'));?>"><i class="fa fa-google-plus"></i><span><?php esc_html_e('Google+','story-magazine');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('story_magazine_instagram') )  { ?>
<li class="sprite-instagram">
	<a title="<?php esc_attr_e('Instagram','story-magazine');?>" href="<?php echo esc_url(get_theme_mod('story_magazine_instagram'));?>"><i class="fa fa-instagram"></i><span><?php esc_html_e('Instagram','story-magazine');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('story_magazine_pinterest') )  { ?>
<li class="sprite-pinterest">
	<a title="<?php esc_attr_e('Pinterest','story-magazine');?>" href="<?php echo esc_url(get_theme_mod('story_magazine_pinterest'));?>"><i class="fa fa-pinterest-square"></i><span><?php esc_html_e('Pinterest','story-magazine');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('story_magazine_youtube') )  { ?>
<li class="sprite-youtube">
	<a title="<?php esc_attr_e('You Tube','story-magazine');?>" href="<?php echo esc_url(get_theme_mod('story_magazine_youtube'));?>"><i class="fa fa-youtube-play"></i><span><?php esc_html_e('You Tube','story-magazine');?></span></a>
</li><?php } ?>

<?php if (get_theme_mod('story_magazine_linkedin') )  { ?>
<li class="sprite-linkedin">
	<a title="<?php esc_attr_e('LinkedIn','story-magazine');?>" href="<?php echo esc_url(get_theme_mod('story_magazine_linkedin'));?>"><i class="fa fa-linkedin-square"></i><span><?php esc_html_e('LinkedIn','story-magazine');?></span></a>
</li><?php } ?>

<li class="searchicon"><a class="searchOpen" href="#" ><i class="fa fa-search"></i></a></li>

</ul>