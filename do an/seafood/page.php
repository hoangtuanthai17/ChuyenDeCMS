<?php get_header(); ?>


			<?php

			// Start the Loop.
			while ( have_posts() ) :
                the_post();
                ?>
                <?php echo the_content();?>
            <?php
			endwhile; // End the loop.
			?>
<?php get_footer();
    ?>