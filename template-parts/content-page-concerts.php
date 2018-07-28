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
	<div class="entry-content">
		<section class="sidebar">
			&nbsp;
		</section>
		
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
						echo '<div class="event">
								<a href="'.get_permalink().'">
								<img src="' . get_template_directory_uri() . '/img/radek-grzybowski-74331-unsplash.jpg" alt="An image of a concert hall">
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
			
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
