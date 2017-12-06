<?php

function customThemeEnqueues(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('customStyle', get_template_directory_uri() . '/css/CustomThemeStyle.css', array(), '1.0.0', 'all');

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_enqueue_script('customScript', get_template_directory_uri() . '/js/customThemeScript.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'customThemeEnqueues');

function customThemeSetUp(){
	add_theme_support('menus');
	register_nav_menu('primary', 'This is the main navigation, positioned at the top of the page');
	register_nav_menu('seconday', 'This is the seconday navigation, located at the bottom of the page');


}

add_action('init', 'customThemeSetUp');

add_theme_support('custom-background');

$customHeaderSetting = array(
		'default-image' => '',
		'width' => 1280,
		'height' => 700,
		'flex-height' => false,
		'flex-width' => true,
		'default-text-color' => '',
		'header-text' => true,
		'default-text-color' => '000',
		'uploads' => true,
		'video' => false
	);
add_theme_support('custom-header', $customHeaderSetting);
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));





//Customize colours
function customTheme_customize_colour($wp_customize){
	//Settings
	$wp_customize->add_setting('newtheme_text_colour', array(
		'default' => '#000000',
		'transport' => 'refresh'
	));

	$wp_customize->add_setting('newtheme_nav_colour', array(
		'default' => '#000000',
		'transport' => 'refresh'
	));

	$wp_customize->add_setting('newtheme_link_colour', array(
		'default' => '#000000',
		'transport' => 'refresh'
	));

	//Section
	$wp_customize->add_section('newtheme_text_colour_section', array(
		'title' => __('Standard Colours', 'New Custom Theme'),
		'priority' => 30
	));

	//Add the Control
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'newtheme_text_colour_control', array(
		'label' => __('Text Colour', 'New Custom Theme'),
		'section' => 'colors',
		'settings' => 'newtheme_text_colour',
	)));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'newtheme_nav_colour_control', array(
		'label' => __('Navigation Colour', 'New Custom Theme'),
		'section' => 'colors',
		'settings' => 'newtheme_nav_colour',
	)));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'newtheme_link_colour_control', array(
		'label' => __('Link Colour', 'New Custom Theme'),
		'section' => 'colors',
		'settings' => 'newtheme_link_colour',
	)));
}
add_action('customize_register', 'customTheme_customize_colour');



function newtheme_customize_css(){
?>

<style type="text/css">
	p,
	section,
	ul li{
		color: <?php echo get_theme_mod('newtheme_text_colour'); ?>;
	}

	.menu-main-nav-container, .menu-vpn-container{
		background-color: <?php echo get_theme_mod('newtheme_nav_colour'); ?>;
	}

	a:link,
	a:visited,
	#menu-main-nav li a,
	#menu-vpn li a{
		color: <?php echo get_theme_mod('newtheme_link_colour'); ?>;
	}

</style>


<?php
}
add_action('wp_head', 'newtheme_customize_css');






function newTheme_footer_text($wp_customize){
	//Settings
	$wp_customize->add_setting('newTheme_footer_text', array(
		'default' => 'This is your footer Text',
		'transport' => 'refresh'
	));

	//Section
	$wp_customize->add_section('newTheme_footer_text_section', array(
		'title' => 'Footer'
	));

	//Control
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newTheme_footer_text_control', array(
		'label' => 'Footer Text',
		'section' => 'newTheme_footer_text_section',
		'settings' => 'newTheme_footer_text'
	)));
}
add_action('customize_register', 'newTheme_footer_text');

function bottomBanner_text($wp_customize){
	//Settings
	$wp_customize->add_setting('bottomBanner_text', array(
		'default' => 'This is your bottom banner text',
		'transport' => 'refresh'
	));

	//Section
	$wp_customize->add_section('bottomBanner_text_section', array(
		'title' => 'Bottom Banner Text'
	));

	//Control
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bottomBanner_text_control', array(
		'label' => 'Bottom Banner Text',
		'section' => 'bottomBanner_text_section',
		'settings' => 'bottomBanner_text'
	)));
}
add_action('customize_register', 'bottomBanner_text');


function headerBanner_text($wp_customize){
	//Settings
	$wp_customize->add_setting('headerBanner_text', array(
		'default' => 'Take Back Your Privacy',
		'transport' => 'refresh'
	));

	//Section
	$wp_customize->add_section('headerBanner_text_section', array(
		'title' => 'Header Banner Text'
	));

	//Control
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'headerBanner_text_control', array(
		'label' => 'Header Banner Text',
		'section' => 'headerBanner_text_section',
		'settings' => 'headerBanner_text'
	)));
}
add_action('customize_register', 'headerBanner_text');


add_theme_support( 'custom-logo' );



	add_theme_support( 'post-thumbnails' );
    add_image_size( 'single-post-thumbnail', 500, 1000, true );
    add_image_size( 'board-game-thumbnail', 150, 150 );



	function VPN_init() {
	    $labels = array(
	        'name'               => _x( 'VPN Info', 'post type general name' ),
	        'singular_name'      => _x( 'VPN Info', 'post type singular name' ),
	        'menu_name'          => _x( 'VPN Info', 'admin menu' ),
	        'name_admin_bar'     => _x( 'VPN Info', 'add new on admin bar' ),
	        'add_new'            => _x( 'Add New VPN Info', 'VPN Info' ),
	        'add_new_item'       => __( 'Add New' ),
	        'new_item'           => __( 'New VPN Info' ),
	        'edit_item'          => __( 'Edit VPN Info' ),
	        'view_item'          => __( 'View VPN Info' ),
	        'all_items'          => __( 'All VPN Info' ),
	        'search_items'       => __( 'Search VPN Info' ),
	        'parent_item_colon'  => __( 'Parent VPN Info:' ),
	        'not_found'          => __( 'No VPN Info found.' ),
	        'not_found_in_trash' => __( 'No VPN Info found in Trash.' )
	    );
	    $args = array(
	        'labels' => $labels,
	        'public' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'vpn'),
	        'query_var' => true,
	        'menu_icon' => 'dashicons-info',
	        'supports' => array(
	            'thumbnail',
	            'title',
	            'editor',),
	            'taxonomies' => array(
	                'category', 'post_tag'),
	        );
	    register_post_type( 'vpn', $args );
	}
	add_action( 'init', 'VPN_init' );



	function services_init() {
		$labels = array(
			'name'               => _x( 'services', 'post type general name' ),
			'singular_name'      => _x( 'services', 'post type singular name' ),
			'menu_name'          => _x( 'Services', 'admin menu' ),
			'name_admin_bar'     => _x( 'services', 'add new on admin bar' ),
			'add_new'            => _x( 'Add New services', 'services Info' ),
			'add_new_item'       => __( 'Add New' ),
			'new_item'           => __( 'New services' ),
			'edit_item'          => __( 'Edit services' ),
			'view_item'          => __( 'View services' ),
			'all_items'          => __( 'All services' ),
			'search_items'       => __( 'Search services' ),
			'parent_item_colon'  => __( 'Parent services:' ),
			'not_found'          => __( 'No services Info found.' ),
			'not_found_in_trash' => __( 'No services found in Trash.' )
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'show_ui' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug' => 'services'),
			'query_var' => true,
			'menu_icon' => 'dashicons-star-filled',
			'supports' => array(
				'title',),
				'taxonomies' => array(
					'category', 'post_tag'),
			);
		register_post_type( 'services', $args );
	}
	add_action( 'init', 'services_init' );


	$metaboxes = array(
    'services' => array(
        'title' => __('services Information'),
        'applicableto' => 'services',
        'location' => 'normal',
        'priority' => 'low',
        'fields' => array(
            'subscriptionInfo' => array(
                'title' => __('Subscription Length'),
                'type' => 'text'
            ),
            'price' => array(
            	'title' => __('Price'),
            	'type' => 'text'
            ),
			'billingConditions' => array(
				'title' => __('Billing Conditions'),
				'type' => 'text'
			),
        )
    )
);
add_action( 'admin_init', 'add_post_format_metabox' );
function add_post_format_metabox() {
    global $metaboxes;
    if ( ! empty( $metaboxes ) ) {
        foreach ( $metaboxes as $id => $metabox ) {
            add_meta_box( $id, $metabox['title'], 'show_metaboxes', $metabox['applicableto'], $metabox['location'], $metabox['priority'], $id );
        }
    }
}
function show_metaboxes( $post, $args ) {
    global $metaboxes;
    $custom = get_post_custom( $post->ID );
    $fields = $tabs = $metaboxes[$args['id']]['fields'];
    $output = '<input type="hidden" name="post_format_meta_box_nonce" value="' . wp_create_nonce( basename( __FILE__ ) ) . '" />';
    if ( sizeof( $fields ) ) {
        foreach ( $fields as $id => $field ) {
            switch ( $field['type'] ) {
                default:
                case "text":
                    $output .= '<label for="subscriptionInfo' . $id . '">' . $field['title'] . '</label><input class="customInput" id="' . $id . '" type="text" name="' . $id . '" value="' . $custom[$id][0] . '" style="width: 100%;" />';
                    break;
                case "number":
                    $output .= '<label for="' . $id . '">' . $field['title'] . '</label><input class="customInput" id="' . $id . '" type="number" name="' . $id . '" value="' . $custom[$id][0] . '" style="width: 100%;" />';
                break;
            }
        }
    }
    echo $output;
}
add_action( 'save_post', 'save_metaboxes' );
function save_metaboxes( $post_id ) {
    global $metaboxes;
    if ( ! wp_verify_nonce( $_POST['post_format_meta_box_nonce'], basename( __FILE__ ) ) )
        return $post_id;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return $post_id;
    if ( 'page' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_page', $post_id ) )
            return $post_id;
    } elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }
    $post_type = get_post_type();
    foreach ( $metaboxes as $id => $metabox ) {
        if ( $metabox['applicableto'] == $post_type ) {
            $fields = $metaboxes[$id]['fields'];
            foreach ( $fields as $id => $field ) {
                $old = get_post_meta( $post_id, $id, true );
                $new = $_POST[$id];
                if ( $new && $new != $old ) {
                    update_post_meta( $post_id, $id, $new );
                }
                elseif ( '' == $new && $old || ! isset( $_POST[$id] ) ) {
                    delete_post_meta( $post_id, $id, $old );
                }
            }
        }
    }
}
