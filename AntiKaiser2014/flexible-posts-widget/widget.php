<?php
/**
 * Flexible Posts Widget: Default widget template
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;

if ( !empty($title) )
	echo $before_title . $title . $after_title;

if( $flexible_posts->have_posts() ):
?>
	<div class="dpe-flexible-posts">
	<?php while( $flexible_posts->have_posts() ) : $flexible_posts->the_post(); global $post; ?>
		<p class="post-date"><?php the_date('Y.m.d'); ?></p>
		<p class="post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></p>
		<div class="post-excerpt"><?php the_excerpt(); ?></div>
		<p class="post-permalink"><a href="<?php echo the_permalink(); ?>">Read More &raquo;</a></p>
	<?php endwhile; ?>
	</ul><!-- .dpe-flexible-posts -->
<?php else: // We have no posts ?>
	<div class="dpe-flexible-posts no-posts">
		<p><?php _e( 'No post found', 'flexible-posts-widget' ); ?></p>
	</div>
<?php	
endif; // End have_posts()
	
echo $after_widget;
