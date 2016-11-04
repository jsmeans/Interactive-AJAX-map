<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <?php wp_head(); ?>

  </head>

<body>
	<header>


		<section class="nav-toggle">
			<h1><a href="#" class="nav-button">ICG</a></h1>
		</section>

		<nav class="overlay">
			
			<section class="nav-toggle">
			<h1><a href="#" class="nav-button">ICG</a></h1>
			</section>
			
			<div id="menu" class="container">

              <?php main_nav(); ?>
            
	        </div>			

		</nav>
			
	</header>
	