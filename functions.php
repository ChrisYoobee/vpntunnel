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

	.menu-main-nav-container, .menu-programmes-container{
		background-color: <?php echo get_theme_mod('newtheme_nav_colour'); ?>;
	}

	a:link,
	a:visited,
	#menu-main-nav li a,
	#menu-programmes li a{
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
