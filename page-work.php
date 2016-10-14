
<?php 
/*
Template Name: Work Page
*/
?>

<?php get_header(); ?>
<div class="container clearfix">

<div class="work grid_12 omega">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3>   <?php the_title(); ?></h3>
	<p><?php the_content(); ?></p>
	<hr>

<?php endwhile; endif; ?>

</div></div>

<?php

	$args = array(
		'post_type' => 'work'
	);
	
	$query = new WP_Query( $args );

?>

<section class="works clearfix">

	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<div class="grid_12 container category">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(''); ?></a>
			<p><?php the_field('company'); ?></p>
			<p>
				<?php the_category(', '); ?>
			</p>
		</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>

</div>

<div class="container">
<?php get_template_part('content', 'testimonials'); ?>
</div>
<?php get_footer(); ?>