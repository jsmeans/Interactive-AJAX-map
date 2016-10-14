<?php get_header(); ?>
<div class="container clearfix page-body">

<div class="grid_12 omega">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<h3>   <?php the_title(); ?></h3>
	<p><?php the_content(); ?></p>
	<hr>

<?php endwhile; else: ?>  

<p>There are no posts or pages</p>

<?php endif; ?>

</div>
</div>

<?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>