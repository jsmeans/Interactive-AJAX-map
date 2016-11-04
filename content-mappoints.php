
	<div class="map-wrap"><div id="map_canvas" style="width:100%; height:500px;" >
	
		</div>
	</div>
		<?php 
		$args= array(
			'post_type' => 'story',
			'posts_per_page' => 10,
			
			);
		$the_query = new WP_Query( $args );
		?>

		<?php if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

		<div class="mappoint" data-address="<?php the_field( 'address' ); ?>" data-title="<?php the_title(); ?>"></div>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	



