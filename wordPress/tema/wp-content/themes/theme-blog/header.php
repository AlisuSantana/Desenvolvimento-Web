<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
  </head>
  
  <body class='body' style='background-color:#f1faee;' data-spy="scroll" data-target="#navbar-Principal" data-offset="0" >  
	
		<div class="row">		
				<nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark bg-my-color-2 fixed-top " role="navigation">
					<div class="container-fluid h5 font-weight-bold text-monospace" >
				
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my_navbar" aria-controls="my_navbar" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

					<div class="collapse navbar-collapse" id="my_navbar">						
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0 m-auto">							
								<?php
								wp_nav_menu( array(
								'theme_location'    => 'menu-tema-blog',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse mx-5 ',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav ',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
								) );
								?>							
							 <li class="nav-item">
								<a class="nav-link mx-2" href="#contacts">Contato</a>
							 </li>							  
							 <li class="nav-item">
								<a class="nav-link mx-2" href="#about">Sobre</a>
							 </li>							  
						</ul>
					</div>					
				</div>	
			</nav>
		</div>

			<div class="container">
			
			  <div class="row my-5 align-items-center">
				<div class="col-md-6 col-sm-12 mt-5">
				  <?php          
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

					if ( has_custom_logo() ) {
					  echo '<img src="' . esc_url( $logo[0] ) . '" class="img-fluid">';
					} else {
					  echo '<h1>' . get_bloginfo('name') . '</h1>';
					  echo '<p class="lead">' . get_bloginfo('description') . '</p>';
					}          
				  ?>
				</div>

				<div class="col-md-4 offset-md-2 col-sm-12">          
				  <?php 
					// Adiciona o fomrulário de buscas
					dynamic_sidebar('Busca'); 
					?>
				</div>

			  </div>

