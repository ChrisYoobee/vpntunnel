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



	<div class="vpntunnel-nav"  id="top">
		<div class="logo-image">

			<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		 	?>
		<a href="http://192.168.33.10/wordpress">
			<img src=" <?= $image[0]; ?>  " class="logoimg">
		</a>
		</div>

			<?php wp_nav_menu(array('theme_location'=>'primary')); ?>



	</div>


	<?php if(is_front_page()): ?>
	<div class="header" style="background-image: url(<?php header_image();?>); " height="<?php echo get_custom_header()->height; ?>" >
		<div id="modal">


			<!-- <div class="form-group username">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username">
				<span class="input-errors"></span>
			</div>
			<div class="form-group password">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" id="password">
				<span class="input-errors"></span>
			</div> -->
			<div class="log-in-btn">
				<a href="http://192.168.33.10/wordpress/wp-login.php"> <p>log in</p></a>
			</div>
			<div class="sign-up-btn">
				<a href="http://192.168.33.10/wordpress/wp-signup.php"> <p>sign up</p> </a>
				<?php wp_create_user( $username, $password, $email ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="header-banner-text">
					<h2> <?php echo get_theme_mod('headerBanner_text'); ?> </h2>
				</div>
			</div>
			<div class="col-sm-8 btn-placement ">
				<div class="btn btn-primary header-button">
				<a href="#vpn-services"><h4>Get VPN Tunnel</h4></a>
					<img src="./wp-content/themes/vpntunnelTheme/assets/btn-arrow.png" alt="icon">
				</div>
			</div>
		</div>





	</div>


	<?php endif; ?>

	
