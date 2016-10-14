<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>

  </head>

<body>
	<header>
		<nav>
			
			<div class="logo">

				<a href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>

			</div>
			
			<div id="menu">

              <?php main_nav(); ?>
            
	        </div>

		</nav>
			
	</header>
	