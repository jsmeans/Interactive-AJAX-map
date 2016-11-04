<?php get_header(); ?>

<div>
	<div class="container">




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="clearfix">

	<h3><?php the_field( 'story' ); ?></h3>

	<cite>&mdash; <?php the_title(); ?></cite>

	

</div>

<?php endwhile; endif; ?>

</div>
</div>

<?php get_footer(); ?>