<?php
/**
 * The Template for displaying all single posts.
 *
 * @package AntiKaiser
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main grid-100" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'projectssingle' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>