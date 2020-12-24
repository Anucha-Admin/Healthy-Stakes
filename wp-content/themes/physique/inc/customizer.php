<?php
/**
 * Physique Theme Customizer
 *
 * @package Physique
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function physique_customize_register( $wp_customize ) {
	
function physique_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		
	$wp_customize->add_setting('color_scheme', array(
		'default' => '#e94c23',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','physique'),
			'description'	=> __('Select color from here.','physique'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);

	
	$wp_customize->add_setting('headerbg-color', array(
		'default' => '#000000',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'headerbg-color',array(
			'description'	=> __('Select background color for header.','physique'),
			'section' => 'colors',
			'settings' => 'headerbg-color'
		))
	);
	
	$wp_customize->add_setting('social-color', array(
		'default' => '#e94c23',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'social-color',array(
			'description'	=> __('Select background color for social area.','physique'),
			'section' => 'colors',
			'settings' => 'social-color'
		))
	);
	
	$wp_customize->add_setting('footer-color', array(
		'default' => '#2b2b2b',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'footer-color',array(
			'description'	=> __('Select background color for footer.','physique'),
			'section' => 'colors',
			'settings' => 'footer-color'
		))
	);
	
	
	// Slider Section Start		
	$wp_customize->add_section(
        'slider_section',
        array(
            'title' => __('Slider Settings', 'physique'),
            'priority' => null,
			'description'	=> __('Recommended image size (1420x567). Slider will work only when you select the static front page.','physique'),	
        )
    );
	
	$wp_customize->add_setting('page-setting7',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting7',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','physique'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting8',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting8',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','physique'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting9',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting9',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','physique'),
			'section'	=> 'slider_section'
	));
	
	$wp_customize->add_setting('slide_text',array(
			'sanitize_callback' => 'sanitize_text_field',
	));	 

	$wp_customize->add_control( 'slide_text', array(
    	   'section'   => 'slider_section',
    	   'label'     => __('Add text for slider button.','physique'),
    	   'type'      => 'text'
     ));
	
	$wp_customize->add_setting('hide_slider',array(
			'default' => true,
			'sanitize_callback' => 'physique_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'hide_slider', array(
		   'settings' => 'hide_slider',
    	   'section'   => 'slider_section',
    	   'label'     => __('Check this to hide slider.','physique'),
    	   'type'      => 'checkbox'
     ));	
	
	// Slider Section End
	 
	 // Social Section

	$wp_customize->add_section(
        'social_section',
        array(
            'title' => __('Social Icons', 'physique'),
            'priority' => null,
			'description'	=> __('Add social icons here.','physique'),	
        )
    );
	
	$wp_customize->add_setting('icon1',array(
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('icon1',array(
			'type'	=> 'text',
			'label'	=> __('Add social icon 1 name and link here.','physique'),
			'section'	=> 'social_section'
	));	
	
	$wp_customize->add_setting('icon1-link',array(
			'sanitize_callback'	=> 'sanitize_url'
	));
	
	$wp_customize->add_control('icon1-link',array(
			'type'	=> 'text',
			'section'	=> 'social_section'
	));
	
	// Add second social icon
	
	$wp_customize->add_setting('icon2',array(
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('icon2',array(
			'type'	=> 'text',
			'label'	=> __('Add social icon 2 name and link here.','physique'),
			'section'	=> 'social_section'
	));	
	
	$wp_customize->add_setting('icon2-link',array(
			'sanitize_callback'	=> 'sanitize_url'
	));
	
	$wp_customize->add_control('icon2-link',array(
			'type'	=> 'text',
			'section'	=> 'social_section'
	));
	
	// Add third social icon
	
	$wp_customize->add_setting('icon3',array(
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('icon3',array(
			'type'	=> 'text',
			'label'	=> __('Add social icon 3 name and link here.','physique'),
			'section'	=> 'social_section'
	));	
	
	$wp_customize->add_setting('icon3-link',array(
			'sanitize_callback'	=> 'sanitize_url'
	));
	
	$wp_customize->add_control('icon3-link',array(
			'type'	=> 'text',
			'section'	=> 'social_section'
	));
	
	// Add fourth social icon
	
	$wp_customize->add_setting('icon4',array(
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('icon4',array(
			'type'	=> 'text',
			'label'	=> __('Add social icon 4 name and link here.','physique'),
			'section'	=> 'social_section'
	));	
	
	$wp_customize->add_setting('icon4-link',array(
			'sanitize_callback'	=> 'sanitize_url'
	));
	
	$wp_customize->add_control('icon4-link',array(
			'type'	=> 'text',
			'section'	=> 'social_section'
	));
	
	
}
add_action( 'customize_register', 'physique_customize_register' );	

function physique_css(){
		?>
        <style>
				a, 
				.tm_client strong,
				.postmeta a:hover,
				#sidebar ul li a:hover,
				.blog-post h3.entry-title{
					color:<?php echo esc_attr(get_theme_mod('color_scheme','#e94c23')); ?>;
				}
				a.blog-more:hover,
				.nav-links .current, 
				.nav-links a:hover,
				#commentform input#submit,
				input.search-submit,
				.nivo-controlNav a.active,
				.blog-date .date,
				.section-box .sec-left a,
				#slider .top-bar .slide-button:hover,
				a.read-more:hover,
				#slider .top-bar .slide-button{
					background-color:<?php echo esc_attr(get_theme_mod('color_scheme','#e94c23')); ?>;
				}
				#header,
				.main-nav ul li:hover ul{
					background-color:<?php echo esc_attr(get_theme_mod('headerbg-color','#000000')); ?>;
				}
				.header-social,
				.header-social-wrap::after,
				.header-social::after{
					background-color: <?php echo esc_attr(get_theme_mod('social-color','#e94c23')); ?>;
				}
				.header-social-wrap::before{
					border-top: 15px solid <?php echo esc_attr(get_theme_mod('social-color','#e94c23')); ?>;
				}
				.main-nav ul li.current_page_item a,
				.main-nav ul li a:hover{
					color:<?php echo esc_attr(get_theme_mod('color_scheme','#e94c23')); ?>;
				}
				.copyright-wrapper{
					background-color:<?php echo esc_attr(get_theme_mod('footer-color','#2b2b2b')); ?>;
				}
		</style>
	<?php }
add_action('wp_head','physique_css');

function physique_customize_preview_js() {
	wp_enqueue_script( 'physique-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'physique_customize_preview_js' );