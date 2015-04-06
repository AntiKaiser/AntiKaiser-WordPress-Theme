<?php
/**
 * @package AntiKaiser
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail(array(400,600));
		} ?>
		<?php the_content(); ?>
		<?php
			$image_ids = get_field('project_gallery', false, false);
			$shortcode = '[gallery ids="' . implode(',', $image_ids) . '"]';
			echo do_shortcode( $shortcode );
		?>
		<?php the_field('video_url'); ?>
		<?php the_field('project_status'); ?>
		<?php 
			$term = get_field('project_type');
			if( $term ): ?>
			<p><?php echo $term->name; ?></p>
		<?php endif; ?>
		<?php the_field('project_genre'); ?>
		<?php the_field('release_date'); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'AntiKaiser2014' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
