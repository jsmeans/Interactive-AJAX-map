<?php 
/*
Template Name: Stories Page
*/
?>

<?php get_header(); ?>
<div class="container clearfix">

<div class="story">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
	<p><?php the_content(); ?></p>


<?php endwhile; endif; ?>

</div></div>




<?php get_footer(); ?>