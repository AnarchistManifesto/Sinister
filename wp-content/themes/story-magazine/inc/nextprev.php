<?php
/**
 * Template part for displaying next / prev posts
 */
?>

<div id="post-nav">
    <?php $prevPost = get_previous_post(true);// false = all categories
        if($prevPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $prevPost->ID
            );
            $prevPost = get_posts($args);
            foreach ($prevPost as $post) {
                setup_postdata($post);
    ?>
        <div class="post-previous tranz">
            <a class="post-nav-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail',array('class' => "grayscale grayscale-fade")); ?><span class="arrow"><i class="fa fa-chevron-left"></i>
</span></a>
            <a class="post-nav-text ghost boxshadow" href="<?php the_permalink(); ?>"><?php esc_html_e('Previous Story','story-magazine');?>:<br/> <strong><?php the_title(); ?></strong></a>
        </div>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
         
        $nextPost = get_next_post(true);// false = all categories
        if($nextPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
    ?>
        <div class="post-next tranz">
            <a class="post-nav-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail',array('class' => "grayscale grayscale-fade")); ?><span class="arrow"><i class="fa fa-chevron-right"></i>
</span></a>
            <a class="post-nav-text ghost tranz boxshadow" href="<?php the_permalink(); ?>"><?php esc_html_e('Next Story','story-magazine');?>:<br/> <strong><?php the_title(); ?></strong></a>
        </div>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>
</div>