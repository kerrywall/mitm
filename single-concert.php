<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package musicinthemorning
 */

get_header();
?>


	<div id="primary" class="content-area">
		<?php if (has_post_thumbnail()) : ?>
			<div class="hero-image">
				<img class="hero" src="<?php echo the_post_thumbnail_url($large); ?>" alt="">
				<div class="embedded-text">
					<header class="entry-header hero">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php if (get_field('performance_date')) { ?>
							<p class="date"><?php echo get_field('performance_date'); ?></p>
						<?php } ?>
					</header><!-- .entry-header -->
				</div>
			</div>
		<?php else : ?>
			<header class="entry-header no-hero">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php if (get_field('date')) { ?>
					<p class="date"><?php echo get_field('performance_date'); ?></p>
				<?php } ?>
			</header>
		<?php endif; ?>
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
