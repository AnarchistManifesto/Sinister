<?php
/*---------------------------------------------------------------------------------*/
/* Social Networks widget */
/*---------------------------------------------------------------------------------*/
class story_magazine_social_networks extends WP_Widget {

	public function __construct() {
		$widget_ops = array('description' => esc_html__('This is Social Networks widget.','story-magazine') );
		parent::__construct('story_magazine_social_networks', esc_html__('wpmasters - Social Networks','story-magazine'),$widget_ops);      
	}

   function widget($args, $instance) {  
    extract( $args );
	
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		echo ($before_widget); 
		if ($title) { echo($before_title) . esc_html($title) . $after_title; } 
		
			get_template_part('/inc/uni-social'); ?>
            <div class="clearfix"></div> 
            
		<?php echo($after_widget); ?>   
   <?php
   }

   function update($new_instance, $old_instance) {                
       return $new_instance;
   }

   function form($instance) {  
      	$defaults = array('title' => '');
		$instance = wp_parse_args((array) $instance, $defaults);      
   
       $title = sanitize_text_field($instance['title']);

       ?>
       <p>
	   	   <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','story-magazine'); ?></label>
	       <input type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>"  value="<?php echo esc_attr($title); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
       </p>
      <?php
   }
} 

register_widget('story_magazine_social_networks');
?>