<head>
	<title>Wordpress Refresh</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<?php
	if( is_front_page() ){
		$bodyClass = array('my-body', 'front-page');
	} else {
		$bodyClass = array('my-body');
	}

 ?>
<body <?php body_class($bodyClass); ?>>



	<div class="vpntunnel-nav">
		<div class="logo-image">
			<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		 	?>
			<img src=" <?= $image[0]; ?>  " class="logoimg">
		</div>

			<?php wp_nav_menu(array('theme_location'=>'primary')); ?>



	</div>


	<?php if(is_front_page()): ?>
	<div class="header" style="background-image: url(<?php header_image();?>); " height="<?php echo get_custom_header()->height; ?>" >

		<div class="row">
			<div class="col-sm-4">
				<div class="header-banner-text">
					<h2> <?php echo get_theme_mod('headerBanner_text'); ?> </h2>
				</div>
			</div>
			<div class="col-sm-8 btn-placement ">
				<div class="btn btn-primary header-button ">
					<h4>Get VPN Tunnel</h4>
					<img src="./wp-content/themes/vpntunnelTheme/assets/btn-arrow.png" alt="icon">
				</div>
			</div>
		</div>




<!-- 	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%"> -->
	</div>


	<?php endif; ?>

	<div class="container">








		<?php if(display_header_text()==true): ?>
			<!-- <h1 style="color:#<?php header_textcolor(); ?>"><?php bloginfo('name'); ?></h1> -->
			<h3><?php bloginfo('description'); ?></h3>
		<?php endif; ?>


		<!-- <?php wp_nav_menu(array('theme_location'=>'programmes')); ?> -->
