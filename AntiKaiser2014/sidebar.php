<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package AntiKaiser
 */
?>
	<div id="secondary" class="widget-area grid-30" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
			
			<?php
			// RELATED PROJECTS WIDGET
			$posts = get_field('associated_projects');
			if( $posts ): ?>
			<aside id="meta" class="widget">
				<h2 class="widget-title">Associated Projects</h2>
					<ul>
					<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endforeach; ?>
					</ul>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			</aside>
			<?php endif; ?>

			<?php
			// RELATED NEWS ITEMS WIDGET
			// get current post
			global $post;
			// get custom field data.
			// "custom_field_key" is custom field key (ACF relationship field), return value is array of post IDs
			$relations = $post->associated_projects;
			//
			$meta_array = array();
			foreach ((array) $relations as $relation){
				$meta_array[] = array(
					'key' => 'associated_projects',
					'value' => '"' . $relation . '"',
					'compare' => 'LIKE'
				);
			}

			if (count($meta_array) > 1) $meta_array['relation'] = 'OR';
				$posts = get_posts(array(
					'post_type' => 'news',
					'meta_query' => $meta_array
				));
				
				if( $posts ): ?>
				<aside id="meta" class="widget">
					<h2 class="widget-title">Related News</h2>
					<ul>
					<?php foreach ($posts as $post) {
						setup_postdata($post);
						?>
						<li>
							<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
						</li>
						<?php
					} ?>
					</ul>
				</aside>
				<?php endif; //end widget area ?>

			<?php
			// RELATED BLOG POSTS WIDGET
			// get current post
			global $post;
			// get custom field data.
			// "custom_field_key" is custom field key (ACF relationship field), return value is array of post IDs
			$relations = $post->related_projects;
			//
			$meta_array = array();
			foreach ((array) $relations as $relation){
				$meta_array[] = array(
					'key' => 'related_projects',
					'value' => '"' . $relation . '"',
					'compare' => 'LIKE'
				);
			}

			if (count($meta_array) > 1) $meta_array['relation'] = 'OR';
				$posts = get_posts(array(
					'post_type' => 'post',
					'meta_query' => $meta_array
				));
				
				if( $posts ): ?>
				<aside id="meta" class="widget">
					<h2 class="widget-title">Related Blog Posts</h2>
					<ul>
					<?php foreach ($posts as $post) {
						setup_postdata($post);
						?>
						<li>
							<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
						</li>
						<?php
					} ?>
					</ul>
				</aside>
				<?php endif; //end widget area ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
