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
		<section id="events" class="site-events">
			<div class="content">
				<h2>Upcoming Events</h2>
				<h3>Nam euismod sapien velit, id pretium odio ullamcorper non. </h3>
				<div class="event">
					<img src="<?php echo get_template_directory_uri(); ?>/img/radek-grzybowski-74331-unsplash.jpg" alt="An image of a concert hall">
					<div class="description">
						<h4>Music in the Morning</h4>
						<p>January 4, 2019</p>
					</div>
				</div>
				<div class="event">
					<img src="<?php echo get_template_directory_uri(); ?>/img/radek-grzybowski-74331-unsplash.jpg" alt="An image of a concert hall">
					<div class="description">
						<h4>Music in the Morning</h4>
						<p>January 4, 2019</p>
					</div>
				</div>
				<div class="event">
					<img src="<?php echo get_template_directory_uri(); ?>/img/radek-grzybowski-74331-unsplash.jpg" alt="An image of a concert hall">
					<div class="description">
						<h4>Music in the Morning</h4>
						<p>January 4, 2019</p>
					</div>
				</div><!--events-->
				<p>
					<a class="view-all" href="#">View all Events</a>
				</p>
			</div>
		</section>
	</div><!-- #primary -->

<?php
get_footer();
