<div class="container">


<?php 
$args= array(
	'post_type' => 'story',
	'posts_per_page' => 1,
	'orderby' => 'rand',
	);
$the_query = new WP_Query( $args );
?>

<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

<div class="excerpt">

	<h2>&ldquo;<?php the_field( 'excerpt' ); ?>&rdquo;</h2>

	<cite>&mdash; <?php the_title(); ?></cite>

</div>
<div class="more">
<button><a href="<?php the_permalink(); ?>">Read the Whole Thang</a></button>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>

</div>

