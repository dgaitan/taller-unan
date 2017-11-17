<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogUnan
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						?>
						
						<div class="card" style="width: 20rem;">

						  <?php the_post_thumbnail(); ?>
						  <div class="card-body">
						    <h4 class="card-title">
						    	<?php the_title(); ?>
						    </h4>
						    <p class="card-text">
						    	<?php the_excerpt(); ?>
						    </p>
						    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver articulo</a>
						  </div>
						</div>							

						<?php

					endwhile;

					the_posts_navigation();

				else : ?>

					<h1>No hay articulos publicados</h1>

				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


<?php
get_footer();
