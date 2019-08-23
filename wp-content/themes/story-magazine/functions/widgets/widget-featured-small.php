<?php
add_action('widgets_init', 'story_magazine_featured_small_widget');

function story_magazine_featured_small_widget()
{
	register_widget('story_magazine_featured_small_widget');
}

class story_magazine_featured_small_widget extends WP_Widget {
	
	public function __construct() {
		$widget_ops = array('classname' => 'story_magazine_featured_small_widget', 'description' => esc_html__('Featured posts widget.','story-magazine'));
       	parent::__construct('story_magazine_feat_small', esc_html__('wpmasters - Featured (Small posts)','story-magazine'),$widget_ops);  
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$post_type = 'all';
		$categories = isset($instance['categories']) ? esc_html( $instance['categories']) : '';
		$posts = isset($instance['posts']) ? esc_html( $instance['posts']) : '';
		
		echo ($before_widget);
		?>
		
		<?php
		$post_types = get_post_types();
		unset($post_types['page'], $post_types['attachment'], $post_types['revision'], $post_types['nav_menu_item']);
		
		if($post_type == 'all') {
			$post_type_array = $post_types;
		} else {
			$post_type_array = $post_type;
		}
		?>
		
        	<?php if ( $title == "") {} else { ?>
        
				<h2 class="widget"><span><a href="<?php echo esc_url(get_category_link($categories)); ?>"><?php echo esc_html($title); ?></a></span></h2>
			
            <?php } ?>
            
			<?php
			$recent_posts = new WP_Query(array(
				'showposts' => $posts,
				'ignore_sticky_posts' => 1,
				'cat' => $categories,
			));
			?>
            <ul class="featured gradient-light">
			<?php  while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
				<li>
					<?php get_template_part('/post-layouts/tab-post-small'); ?>
				</li>
			<?php endwhile; ?>
			</ul>
			<div class="clearfix"></div>
		
		<?php
		echo ($after_widget);
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['post_type'] = 'all';
		$instance['categories'] = absint($new_instance['categories']);
		$instance['posts'] = sanitize_text_field($new_instance['posts']);
		
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Recent Posts', 'post_type' => 'all', 'categories' => 'all', 'posts' => 4, 'show_excerpt' => null);
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','story-magazine'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('categories')); ?>"><?php esc_html_e('Filter by Category:','story-magazine'); ?></label> 
			<select id="<?php echo esc_attr($this->get_field_id('categories')); ?>" name="<?php echo esc_attr($this->get_field_name('categories')); ?>" class="widefat categories">
				<option value='all' <?php if ('all' == $instance['categories']) echo 'selected="selected"'; ?>><?php esc_html_e('Filter by Category:','story-magazine'); ?></option>
				<?php $categories = get_categories('hide_empty=0&depth=1&type=post'); ?>
				<?php foreach($categories as $category) { ?>
				<option value='<?php echo absint($category->term_id); ?>' <?php if ($category->term_id == $instance['categories']) echo 'selected="selected"'; ?>><?php echo esc_html($category->cat_name); ?></option>
				<?php } ?>
			</select>
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('posts')); ?>"><?php esc_html_e('Number of posts:','story-magazine'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('posts')); ?>" name="<?php echo esc_attr($this->get_field_name('posts')); ?>" value="<?php echo esc_attr($instance['posts']); ?>" />
		</p>
		

	<?php }
}
?>