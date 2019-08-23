<?php
add_action('widgets_init', 'story_magazine_mag3_widget');

function story_magazine_mag3_widget()
{
	register_widget('story_magazine_mag3_widget');
}

class story_magazine_mag3_widget extends WP_Widget {
	
	public function __construct() {
		$widget_ops = array('classname' => 'story_magazine_mag3_widget', 'description' => esc_html__('Featured posts widget.','story-magazine'));
       	parent::__construct('story_magazine_mag_3', esc_html__('wpmasters - "Home 3"','story-magazine'),$widget_ops);  
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		
		$title2 = ! empty( $instance['title2'] ) ? $instance['title2'] : '';
		
		$title2 = apply_filters( 'widget_title', $title2, $instance, $this->id_base );
		
		
		$post_type = 'all';
		$categories = isset($instance['categories']) ? esc_html( $instance['categories']) : '';
		$categories2 = isset($instance['categories2']) ? esc_html( $instance['categories2']) : '';
		$posts = isset($instance['posts']) ? esc_html( $instance['posts']) : '';
		$offset_posts = isset($instance['offset_posts']) ? esc_html( $instance['offset_posts']) : '';
		$offset_posts2 = isset($instance['offset_posts2']) ? esc_html( $instance['offset_posts2']) : '';
		
		echo ($before_widget);
		?>
        
            <div class="mag-block mag-three">
            
            	<div class="mag-three-left">
		
					<?php if ( $title == "") {} else { ?>
                
                        <h2 class="block"><span><a href="<?php echo esc_url(get_category_link($categories)); ?>"><?php echo esc_html($title) ?></a></span></h2>
                    
                    <?php } ?>
                    
                    <?php
                    $recent_posts = new WP_Query(array(
                        'showposts' => $posts,
                        'ignore_sticky_posts' => 1,
                        'cat' => $categories,
                        'offset' => esc_html($offset_posts)
                    ));
                    ?>
                
                    <?php 
                    $counter = 1;
                    while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                    if($counter < 2):
                    
						get_template_part('/post-layouts/home-mag3-big');
						
						else: 
						
						get_template_part('/post-layouts/home-mag1-small');
						
						endif;
						
					$counter++;  endwhile;
					
					wp_reset_postdata(); ?>
                
                </div>
                
            	<div class="mag-three-right">
		
					<?php if ( $title == "") {} else { ?>
                
                        <h2 class="block"><span><a href="<?php echo get_category_link($categories2); ?>"><?php echo esc_html($title2) ?></a></span></h2>
                    
                    <?php } ?>
                    
                    <?php
                    $recent_posts = new WP_Query(array(
                        'showposts' => $posts,
                        'ignore_sticky_posts' => 1,
                        'cat' => $categories2,
                        'offset' => esc_html($offset_posts2)
                    ));
                    ?>
                
                    <?php 
                    $counter = 1;
                    while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                    if(has_post_format('aside')){ } elseif(has_post_format('quote')){ }else {
                    if($counter < 2):
                    ?>
                    
                        <?php get_template_part('/post-layouts/home-mag3-big'); ?>
                    
                    <?php else: ?>
                    
                        <?php get_template_part('/post-layouts/home-mag1-small'); ?>
                        
                    <?php endif; ?>
                
                    <?php $counter++; } endwhile; ?>
                    
                    <?php wp_reset_postdata(); ?>
                
                </div>
                
            
			</div><!-- end  .mag-three -->
            
			<div class="clearfix"></div>
		
		<?php
		echo ($after_widget);
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['title2'] = sanitize_text_field($new_instance['title2']);
		$instance['post_type'] = 'all';
		$instance['categories'] = absint($new_instance['categories']);
		$instance['categories2'] = absint($new_instance['categories2']);
		$instance['posts'] = sanitize_text_field($new_instance['posts']);
		$instance['offset_posts'] = sanitize_text_field($new_instance['offset_posts']);
		$instance['offset_posts2'] = sanitize_text_field($new_instance['offset_posts2']);
		
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Recent Posts', 'title2' => 'Recent Posts', 'post_type' => 'all', 'categories' => 'all', 'categories2' => 'all', 'posts' => 4, 'show_excerpt' => null,'offset_posts' => '','offset_posts2' => '');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','story-magazine'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
        
        
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('categories')); ?>"><?php esc_html_e('Filter by Category #1:','story-magazine'); ?></label> 
			<select id="<?php echo esc_attr($this->get_field_id('categories')); ?>" name="<?php echo esc_attr($this->get_field_name('categories')); ?>" class="widefat categories">
				<option value='all' <?php if ('all' == $instance['categories']) echo 'selected="selected"'; ?>><?php esc_html_e('Filter by Category:','story-magazine'); ?></option>
				<?php $categories = get_categories('hide_empty=0&depth=1&type=post'); ?>
				<?php foreach($categories as $category) { ?>
				<option value='<?php echo absint($category->term_id); ?>' <?php if ($category->term_id == $instance['categories']) echo 'selected="selected"'; ?>><?php echo esc_html($category->cat_name); ?></option>
				<?php } ?>
			</select>
		</p>
        
        
        
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('offset_posts')); ?>"><?php esc_html_e('Offset posts: ','story-magazine'); ?></label>
			<input class="widefat"  id="<?php echo esc_attr($this->get_field_id('offset_posts')); ?>" name="<?php echo esc_attr($this->get_field_name('offset_posts')); ?>" value="<?php echo esc_attr($instance['offset_posts']); ?>" />
		</p>
        
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title2')); ?>"><?php esc_html_e('Title #2:','story-magazine'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title2')); ?>" name="<?php echo esc_attr($this->get_field_name('title2')); ?>" value="<?php echo esc_attr($instance['title2']); ?>" />
		</p>
        
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('categories2')); ?>"><?php esc_html_e('Filter by Category #2:','story-magazine'); ?></label> 
			<select id="<?php echo esc_attr($this->get_field_id('categories2')); ?>" name="<?php echo esc_attr($this->get_field_name('categories2')); ?>" class="widefat categories">
				<option value='all' <?php if ('all' == $instance['categories2']) echo 'selected="selected"'; ?>>all categories</option>
				<?php $categories2 = get_categories('hide_empty=0&depth=1&type=post'); ?>
				<?php foreach($categories2 as $category2) { ?>
				<option value='<?php echo absint($category2->term_id); ?>' <?php if ($category2->term_id == $instance['categories2']) echo 'selected="selected"'; ?>><?php echo esc_html($category2->cat_name); ?></option>
				<?php } ?>
			</select>
		</p>
        
        
        
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('offset_posts2')); ?>"><?php esc_html_e('Offset posts #2: ','story-magazine'); ?></label>
			<input class="widefat"  id="<?php echo esc_attr($this->get_field_id('offset_posts2')); ?>" name="<?php echo esc_attr($this->get_field_name('offset_posts2')); ?>" value="<?php echo esc_attr($instance['offset_posts2']); ?>" />
		</p>
        
        <hr>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('posts')); ?>"><?php esc_html_e('Number of posts:','story-magazine'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('posts')); ?>" name="<?php echo esc_attr($this->get_field_name('posts')); ?>" value="<?php echo esc_attr($instance['posts']); ?>" />
		</p>

	<?php }
}
?>