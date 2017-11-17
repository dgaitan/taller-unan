<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BlogUnan
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8">	
			<?php
			while ( have_posts() ) : the_post();

				?>
				<h1><?php the_title(); ?></h1>
				<?php the_post_thumbnail(); ?>
				<div class="content">
					<?php the_content(); ?>
				</div>
				<?php

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


<?php
get_footer();
