<?php get_header(); ?>

<div>

	<div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="title">
				<a href="<?php the_permalink() ;?>">
					<?php the_post_thumbnail('large'); ?>
				</a>
			</div>

			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

			<ul>
				<li>Posted in: <?php the_category(', '); ?></li>
				<li>Written by: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
				<li>On: <?php the_time('F j, Y'); ?></li>
			</ul>

			<div>

				<?php the_excerpt(); ?>
				<p><a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
			</div>

		<?php endwhile; endif; ?>  
		
	</div>

</div>



<?php get_footer(); ?>