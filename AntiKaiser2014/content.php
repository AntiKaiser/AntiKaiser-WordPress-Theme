<?php
/**
 * @package AntiKaiser
 */
?>

<?php if ( is_post_type_archive('news') ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'grid-33' ); ?>>
	<div class="news-archive">
		<p class="post-date"><?php the_date('F j, Y'); ?></p>
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<p class="post-permalink"><a href="<?php echo the_permalink(); ?>">Read More &raquo;</a></p>
	</div>
</article>
<?php else : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'grid-33' ); ?>>
	<div class="blog-archive">
		<p class="post-date"><?php the_date('F j, Y'); ?></p>
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<p class="post-permalink"><a href="<?php echo the_permalink(); ?>">Read More &raquo;</a></p>
	</div>
</article>
<?php endif; ?>