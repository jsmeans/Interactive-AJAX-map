<?php get_header(); ?>

	<div>

		<div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
			<?php endwhile; else: ?>  

			<p>There are no posts or pages</p>

			<?php endif; ?>

		</div>

	</div>

<?php get_footer(); ?>