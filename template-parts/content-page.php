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
	<?php if (is_front_page()) { ?>
	<header class="entry-header-home">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php } else { } ?>

	<div class="entry-content">
		<?php if (!is_front_page()) { ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<?php }
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'musicinthemorning' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<?php if (is_front_page()) { ?>
	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php } ?>

</article><!-- #post-<?php the_ID(); ?> -->
