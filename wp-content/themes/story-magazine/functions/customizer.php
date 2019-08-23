<?php
/**
 * Contains methods for customizing the theme customization screen.
 * 
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since MyTheme 1.0
 */
class story_magazine_Customize {
   /**
    * This hooks into 'customize_register' (available as of WP 3.4) and allows
    * you to add new sections and controls to the Theme Customize screen.
    * 
    * Note: To enable instant preview, we have to actually write a bit of custom
    * javascript. See live_preview() for more.
    *  
    * @see add_action('customize_register',$func)
    * @param \WP_Customize_Manager $wp_customize
    * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
    * @since MyTheme 1.0
    */
   public static function register ( $wp_customize ) {



// 1. BODY //////////////

$wp_customize->add_section( 'story_magazine_body_options', 
   array(
	  'title' => esc_html__( 'Primary (Body) Options', 'story-magazine' ), //Visible title of section
	  'priority' => 99, //Determines what order this appears in
	  'capability' => 'edit_theme_options', //Capability needed to tweak
	  'description' => esc_html__( 'Allows you to customize some primary settings for theme.', 'story-magazine'),
   ) 
);//this is section

 
		
		
		///------///
		$wp_customize->add_setting( 'ghost_body',
		   array(
			  'default' => '#f7f7f7',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'story_magazine_ghost_body',
		   array(
			  'label' => esc_html__( 'Container (ghost) Background Color', 'story-magazine' ),
			  'section' => 'story_magazine_body_options',
			  'settings' => 'ghost_body'
		  )
		) );	  
		
		
		///------///
		$wp_customize->add_setting( 'border_body',
		   array(
			  'default' => '#eee',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'story_magazine_border_body',
		   array(
			  'label' => esc_html__( 'Border Color', 'story-magazine' ),
			  'section' => 'story_magazine_body_options',
			  'settings' => 'border_body'
		  )
		) );
		

		///------///
		$wp_customize->add_setting( 'accent_body',
		   array(
			  'default' => '#48ea94',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'story_magazine_accent_body',
		   array(
			  'label' => esc_html__( 'Accent Color: Background', 'story-magazine' ),
			  'section' => 'story_magazine_body_options',
			  'settings' => 'accent_body'
		  )
		) ); 
		
		
		///------///
		$wp_customize->add_setting( 'accent_body_text',
		   array(
			  'default' => '#222',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'story_magazine_accent_body_text',
		   array(
			  'label' => esc_html__( 'Accent Color: Text', 'story-magazine' ),
			  'section' => 'story_magazine_body_options',
			  'settings' => 'accent_body_text'
		  )
		) );


		
		///------///
		$wp_customize->add_setting( 'link_body',
		   array(
			  'default' => '#000',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'story_magazine_link_body',
		   array(
			  'label' => esc_html__( 'Link Color', 'story-magazine' ),
			  'section' => 'story_magazine_body_options',
			  'settings' => 'link_body'
		  )
		) ); 
		
  
		///------///
		$wp_customize->add_setting( 'link_body_hover',
		   array(
			  'default' => '#687077',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'story_magazine_link_body_hover',
		   array(
			  'label' => esc_html__( 'Link Color: Hover', 'story-magazine' ),
			  'section' => 'story_magazine_body_options',
			  'settings' => 'link_body_hover'
		  )
		) ); 
		
  
		///------///
		$wp_customize->add_setting( 'link_entry',
		   array(
			  'default' => '#24cc91',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'story_magazine_link_entry',
		   array(
			  'label' => esc_html__( 'Entry Link Color', 'story-magazine' ),
			  'section' => 'story_magazine_body_options',
			  'settings' => 'link_entry'
		  )
		) ); 
		
				
  
		///------///
		$wp_customize->add_setting( 'link_entry_hover',
		   array(
			  'default' => '#00d15e',
			  'type' => 'theme_mod',
			  'transport' => 'postMessage',
			  'sanitize_callback' => 'sanitize_hex_color',
		   ) 
		);  
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
		   'story_magazine_link_entry_hover',
		   array(
			  'label' => esc_html__( 'Link Color: Hover', 'story-magazine' ),
			  'section' => 'story_magazine_body_options',
			  'settings' => 'link_entry_hover'
		  )
		) ); 



// 2. HEADER //////////////

$wp_customize->add_section( 'story_magazine_header_options', 
   array(
	  'title' => esc_html__( 'Header Options', 'story-magazine' ), //Visible title of section
	  'priority' => 99, //Determines what order this appears in
	  'capability' => 'edit_theme_options', //Capability needed to tweak
   ) 
);// this is section
	  
	  
      
      $wp_customize->add_setting( 'bg_header',
         array(
            'default' => '#000000',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'story_magazine_bg_header',
         array(
            'label' => esc_html__( 'Header Background Color', 'story-magazine' ),
            'section' => 'story_magazine_header_options',
            'settings' => 'bg_header',
         )
      ) );
	  
	  
      ///------///
      $wp_customize->add_setting( 'nav_header',
         array(
            'default' => '#ddd',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
	  	'story_magazine_nav_header',
         array(
            'label' => esc_html__( 'Header Navigation Color', 'story-magazine' ),
            'section' => 'story_magazine_header_options',
            'settings' => 'nav_header',
         )
      ) );
	  
	  
	  ///------///
      $wp_customize->add_setting( 'link_header',
         array(
            'default' => '#fff',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'story_magazine_link_header',
         array(
            'label' => esc_html__( 'Header Link Color', 'story-magazine' ),
            'section' => 'story_magazine_header_options',
            'settings' => 'link_header'
		)
      ) ); 
	  
	  
	  ///------///
      $wp_customize->add_setting( 'text_header',
         array(
            'default' => '#8c8c8c',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'story_magazine_text_header',
         array(
            'label' => esc_html__( 'Header Text Color', 'story-magazine' ),
            'section' => 'story_magazine_header_options',
            'settings' => 'text_header'
		)
      ) ); 
	  
	  
	  
	  ///------///
      $wp_customize->add_setting( 'accent_header',
         array(
            'default' => '#48ea94',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'story_magazine_accent_header',
         array(
            'label' => esc_html__( 'Header Accent Color: Background', 'story-magazine' ),
            'section' => 'story_magazine_header_options',
            'settings' => 'accent_header'
		)
      ) ); 
	  
	  
	  ///------///
      $wp_customize->add_setting( 'accent_header_text',
         array(
            'default' => '#222',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'story_magazine_accent_header_text',
         array(
            'label' => esc_html__( 'Header Accent Color: Text', 'story-magazine' ),
            'section' => 'story_magazine_header_options',
            'settings' => 'accent_header_text'
		)
      ) );
	  
	  

// END 2. HEADER //////////////






// 3. FOOTER //////////////

$wp_customize->add_section( 'story_magazine_footer_options', 
   array(
	  'title' => esc_html__( 'Footer Options', 'story-magazine' ), //Visible title of section
	  'priority' => 99, //Determines what order this appears in
	  'capability' => 'edit_theme_options', //Capability needed to tweak
   ) 
);// this is section
	  
	  
      
      $wp_customize->add_setting( 'bg_footer',
         array(
            'default' => '#ffffff',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'story_magazine_bg_footer',
         array(
            'label' => esc_html__( 'Footer Background Color', 'story-magazine' ),
            'section' => 'story_magazine_footer_options',
            'settings' => 'bg_footer',
         )
      ) );
	  
	  
	  ///------///
      $wp_customize->add_setting( 'link_footer',
         array(
            'default' => '#000000',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'story_magazine_link_footer',
         array(
            'label' => esc_html__( 'Footer Link Color', 'story-magazine' ),
            'section' => 'story_magazine_footer_options',
            'settings' => 'link_footer'
		)
      ) ); 
	  
	  
	  ///------///
      $wp_customize->add_setting( 'text_footer',
         array(
            'default' => '#606060',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'story_magazine_text_footer',
         array(
            'label' => esc_html__( 'Footer Text Color', 'story-magazine' ),
            'section' => 'story_magazine_footer_options',
            'settings' => 'text_footer'
		)
      ) ); 
	  
	  
	  ///------///
      $wp_customize->add_setting( 'border_footer',
         array(
            'default' => '#ededed',
            'type' => 'theme_mod',
            'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
         ) 
      );  
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,
         'story_magazine_border_footer',
         array(
            'label' => esc_html__( 'Footer Border Color', 'story-magazine' ),
            'section' => 'story_magazine_footer_options',
            'settings' => 'border_footer'
		)
      ) ); 
	  

// END 3. FOOTER //////////////





// SOCIAL NETWORKS SECTION //////////////
$wp_customize->add_section(
    'story_magazine_social_networks',
    array(
        'title'     => esc_html__( 'Social Networks', 'story-magazine' ),
        'priority'  => 201,
        'description' => esc_html__( 'Enter full URLs (http:// including)','story-magazine' ),
    )
);// this is section

	
	
	
	$wp_customize->add_setting( 'story_magazine_facebook',array('sanitize_callback' => 'story_magazine_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'story_magazine_facebook',
		    array(
		        'label'    => esc_html__( 'Facebook URL', 'story-magazine' ),
		        'section'  => 'story_magazine_social_networks',
		        'settings' => 'story_magazine_facebook',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'story_magazine_twitter',array('sanitize_callback' => 'story_magazine_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'story_magazine_twitter',
		    array(
		        'label'    => esc_html__( 'Twitter URL', 'story-magazine' ),
		        'section'  => 'story_magazine_social_networks',
		        'settings' => 'story_magazine_twitter',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'story_magazine_instagram',array('sanitize_callback' => 'story_magazine_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'story_magazine_instagram',
		    array(
		        'label'    => esc_html__( 'Instagram URL', 'story-magazine' ),
		        'section'  => 'story_magazine_social_networks',
		        'settings' => 'story_magazine_instagram',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'story_magazine_pinterest',array('sanitize_callback' => 'story_magazine_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'story_magazine_pinterest',
		    array(
		        'label'    => esc_html__( 'Pinterest URL', 'story-magazine' ),
		        'section'  => 'story_magazine_social_networks',
		        'settings' => 'story_magazine_pinterest',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'story_magazine_linkedin',array('sanitize_callback' => 'story_magazine_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'story_magazine_linkedin',
		    array(
		        'label'    => esc_html__( 'LinkedIn URL', 'story-magazine' ),
		        'section'  => 'story_magazine_social_networks',
		        'settings' => 'story_magazine_linkedin',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'story_magazine_google',array('sanitize_callback' => 'story_magazine_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'story_magazine_google',
		    array(
		        'label'    => esc_html__( 'Google + URL', 'story-magazine' ),
		        'section'  => 'story_magazine_social_networks',
		        'settings' => 'story_magazine_google',
		        'type'     => 'text'
		    )
	    )
	);
	
	$wp_customize->add_setting( 'story_magazine_youtube',array('sanitize_callback' => 'story_magazine_sanitize_url'));
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'story_magazine_youtube',
		    array(
		        'label'    => esc_html__( 'You Tube URL', 'story-magazine' ),
		        'section'  => 'story_magazine_social_networks',
		        'settings' => 'story_magazine_youtube',
		        'type'     => 'text'
		    )
	    )
	);
	
	

// END SOCIAL NETWORKS  //////////////





// FEATURED SECTION //////////////

$wp_customize->add_section(
    'story_magazine_category',
    array(
        'title'     => esc_html__( 'Mosaic Featured Section', 'story-magazine' ),
        'priority'  => 202
    )
);// this is section

	
	///------///
	$wp_customize->add_setting(
		'story_magazine_slider_category',array('sanitize_callback' => 'esc_html')
	);
	
	$wp_customize->add_control(
		new story_magazine_category_control(
			$wp_customize,
			'story_magazine_slider_category',
			array(
				'label'    => esc_html__( 'Category', 'story-magazine' ),
				'settings' => 'story_magazine_slider_category',
				'section'  => 'story_magazine_category'
			)
		)
	);
 


// END FEATURED SECTION //////////////








	 
      
      //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
		// Abort if selective refresh is not available.
		if ( ! isset( $wp_customize->selective_refresh ) ) {
				return;
		}
		// Add postMessage support for site title and description.
		$wp_customize->get_setting( 'blogname' )->transport            = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport     = 'postMessage';
		// Selective refreshes.
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
				'selector'        => '#titles a',
				'render_callback' => 'story_magazine_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
				'selector'        => '.site-tagline',
				'render_callback' => 'story_magazine_customize_partial_blogdescription',
		) );
	  
      $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
   }

   /**
    * This will output the custom WordPress settings to the live theme's WP head.
    * 
    * Used by hook: 'wp_head'
    * 
    * @see add_action('wp_head',$func)
    * @since MyTheme 1.0
    */
   public static function story_magazine_header_output() {
      ?>
      <!--Customizer CSS--> 
      <style type="text/css">
	  
	  
           <?php 
		   self::story_magazine_generate_css('.ghost,a.page-numbers', 'background-color', 'ghost_body'); 
		   self::story_magazine_generate_css('.p-border,.widgetable li,.social-menu a,.taggs a', 'border-color', 'border_body');
		   self::story_magazine_generate_css('.ribbon,.format-quote .item_inn,.tmnf_icon,.page-numbers.current,li.current a,.flex-direction-nav a,#submit,h2.widget:after,h2.block:after', 'background-color', 'accent_body');
		   self::story_magazine_generate_css('.ribbon,.ribbon a,.ribbon p,a.ribbon,.format-quote,.format-quote a,.tmnf_icon,.page-numbers.current,li.current a,#submit', 'color', 'accent_body_text');
		   self::story_magazine_generate_css('a', 'color', 'link_body'); 
		   self::story_magazine_generate_css('a:hover', 'color', 'link_body_hover'); 
		   self::story_magazine_generate_css('.entry p a', 'color', 'link_entry');
		   self::story_magazine_generate_css('.entry p a', 'border-color', 'link_entry');
		   self::story_magazine_generate_css('.entry p a:hover', 'color', 'link_entry_hover');
		   self::story_magazine_generate_css('.entry p a:hover', 'border-color', 'link_entry_hover');
		   ?>
	  
           <?php 
		   self::story_magazine_generate_css('#header,.nav li ul,#fixed-nav', 'background-color', 'bg_header');
		   self::story_magazine_generate_css('.nav a', 'color', 'nav_header');
		   self::story_magazine_generate_css('#titles a', 'color', 'link_header'); 
		   self::story_magazine_generate_css('#titles p', 'color', 'text_header');
		   self::story_magazine_generate_css('#header .searchOpen,.nav li a:hover', 'background-color', 'accent_header');
		   self::story_magazine_generate_css('#header .searchOpen,.nav li a:hover', 'color', 'accent_header_text');
		   ?> 
		   
		   <?php 
		   self::story_magazine_generate_css('#footer', 'background-color', 'bg_footer');
		   self::story_magazine_generate_css('#footer a', 'color', 'link_footer'); 
		   self::story_magazine_generate_css('#footer,#footer p,#footer input,#footer h2', 'color', 'text_footer');
		   self::story_magazine_generate_css('#footer,#footer .p-border,#copyright', 'border-color', 'border_footer');
		   ?> 
		   
		   
           <?php self::story_magazine_generate_css('body', 'background-color', 'background_color', '#'); ?> 
      </style> 
      <!--/Customizer CSS-->
      <?php
   }
   
   /**
    * This outputs the javascript needed to automate the live settings preview.
    * Also keep in mind that this function isn't necessary unless your settings 
    * are using 'transport'=>'postMessage' instead of the default 'transport'
    * => 'refresh'
    * 
    * Used by hook: 'customize_preview_init'
    * 
    * @see add_action('customize_preview_init',$func)
    */
   public static function story_magazine_live_preview() {
      wp_enqueue_script( 
           'story-magazine-themecustomizer', // Give the script a unique ID
           get_template_directory_uri() . '/functions/assets/js/theme-customizer.js', // Define the path to the JS file
           array(  'jquery', 'customize-preview' ), // Define dependencies
           '', // Define a version (optional) 
           true // Specify whether to put in footer (leave this true)
      );
   }

    /**
     * This will generate a line of CSS for use in header output. If the setting
     * ($mod_name) has no defined value, the CSS will not be output.
     * 
     * @uses get_theme_mod()
     * @param string $selector CSS selector
     * @param string $style The name of the CSS *property* to modify
     * @param string $mod_name The name of the 'theme_mod' option to fetch
     * @param string $prefix Optional. Anything that needs to be output before the CSS property
     * @param string $postfix Optional. Anything that needs to be output after the CSS property
     * @param bool $echo Optional. Whether to print directly to the page (default: true).
     * @return string Returns a single line of CSS with selectors and a property.
     * @since MyTheme 1.0
     */
    public static function story_magazine_generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
      $return = '';
      $mod = get_theme_mod($mod_name);
      if ( ! empty( $mod ) ) {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo esc_html( $return );
         }
      }
      return $return;
    }
}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'story_magazine_Customize' , 'register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'story_magazine_Customize' , 'story_magazine_header_output' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'story_magazine_Customize' , 'story_magazine_live_preview' ) );

//Sanitize URL
function story_magazine_sanitize_url( $url ) {
	return esc_url_raw( trim($url) );
}

//Render the site title for the selective refresh partial
function story_magazine_customize_partial_blogname() {
	bloginfo( 'name' );
}

//Render the site tagline for the selective refresh partial
function story_magazine_customize_partial_blogdescription() {
	bloginfo( 'description' );
}