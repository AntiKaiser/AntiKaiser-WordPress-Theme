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
		<?php the_content(); ?>
		<?php
		$attachment_id = get_field('pdf_version');
		$url = wp_get_attachment_url( $attachment_id );
		$title = get_the_title( $attachment_id );
		if($attachment_id) {
			echo '<h3>Download PDF Version:</h3><p><a href="' . $url . '" target="_blank">' . $title . '</a></p>';
		} ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'AntiKaiser2014' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
