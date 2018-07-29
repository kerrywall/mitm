<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package musicinthemorning
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<section class="entry-content">
		<aside class="sidebar">
			<?php get_search_form(); ?>
			<h3>Locations</h3>
			<?php 
			// The Query

			$args = array(
				'post_type' => array( 'location' )
			);

			$locations = new WP_Query( $args );

			// The Loop
			if ( $locations->have_posts() ) {
				echo '<div class="location">';
				while ( $locations->have_posts() ) {
					$locations->the_post();
					echo '<h4>' . get_the_title() . '</h4>';
					echo get_field('map');
				}
				echo '</div>';
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				// no posts found
			}
			?>
		</aside>
		
			<div class="content">
				<?php

				$args = array(
					'post_type' => array( 'concert' )
				);

				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {
					echo '<section id="events" class="site-events">';
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						if (has_post_thumbnail()) {
							$thumbnail = get_the_post_thumbnail_url($large);
						} else {
							$thumbnail = get_template_directory_uri() . '/img/radek-grzybowski-74331-unsplash.jpg';
						}
						echo '<div class="event">
								<a href="'.get_permalink().'">
								<img src="'.$thumbnail.'" alt="">
								<div class="description">
									<h4>'.get_the_title().'</h4>
									<p>'.get_field('date').'</p>
								</div>
								</a>
							</div>';
					}
					echo '</section>';
					/* Restore original Post Data */
					wp_reset_postdata();
				} else {
					// no posts found
				} ?>
			
	</section><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
