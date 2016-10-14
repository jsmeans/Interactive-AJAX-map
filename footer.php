		

		<footer>

		

			<div>
				<p>Extra Info</p>

			</div>

			
			<div class="container">
				<div class="footer_left">
					<?php if(dynamic_sidebar('footer_left')): ?>
						<?php else: ?>

						
					<?php endif; ?>
				</div>
				<div class="footer_middle">
					<?php if(dynamic_sidebar('footer_middle')): ?>
						<?php else: ?>
						

					<?php endif; ?>
				</div>
				<div class="right-footer">
					<?php if(dynamic_sidebar('footer_right')): ?>
						<?php else: ?>
						
						
					<?php endif; ?>
				</div>
			</div>
			
			<div class="footer-bottom">

			<div id="copyright" class="container">
				<p>&copy;<?php echo date('Y'); ?> <a href="#"> ICG</a></p>
			</div>

			</div>
		</footer>

		<?php wp_footer(); ?>
		
   
	</body>
</html>

