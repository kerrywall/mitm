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
 * @package musicinthemorning
 */

get_header();
?>

	<div id="primary" class="content-area">
		<?php if ( is_front_page() ) : ?>
			<img class="hero" src="<?php echo get_template_directory_uri() ?>/img/larisa-birta-102093-unsplash.jpg" alt="">
		<?php endif; ?>
		<main id="main" class="site-main clearfix">

		<?php
		if ( have_posts() ) :

			if ( is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
		<?php

		$args = array(
			'post_type' => array( 'concert' ), 'post_count' =>3
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {

			echo '<section id="events" class="site-events">
				<div class="content">
					<h2>Upcoming Events</h2>
					<h3>Nam euismod sapien velit, id pretium odio ullamcorper non. </h3>';
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
			echo '<p>
					<a class="view-all" href="concerts">View all Events</a>
				</p></div></section>';
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		} ?>
	</div><!-- #primary -->

<?php
get_footer();
