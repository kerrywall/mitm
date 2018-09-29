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

		<?php } ?>
		<?php if (is_page('noon-with-june')) { ?>
			<aside class="sidebar">
				<p><span style="font-style: italic; color: #333;">11:30am-12:30pm: Concert ($42)</span><br>
<strong>12:45pm-1:45pm: Noon with June ($25)</strong><br>
					Christ Church Cathedral<br>
					690 Burrard Street, Vancouver<br>
					June Goldsmith, C.M., O.B.C.</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.573849970145!2d-123.12252118499624!3d49.284471678565964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867181c0caca91%3A0xd67416bf0b1dc960!2sChrist+Church+Cathedral!5e0!3m2!1sen!2sca!4v1535233871179" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
			</aside>
			<div class="content">
		<?php } ?>
		
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'musicinthemorning' ),
			'after'  => '</div>',
		) );
		?><?php if (is_page('noon-with-june')) { ?></div><?php }?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
