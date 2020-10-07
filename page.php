<?php get_header(); ?>

	<div id="primar">
		<main id="main" class="site-main">

			<?php

				while ( have_posts() ) :
					the_post();
				endwhile; 
				// End the loop.
			?>
		</main>	
	</main>		

<?php get_footer();?>