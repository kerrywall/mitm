<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package musicinthemorning
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="clearfix">

	<section class="entry-content">
		<?php the_content(); ?>
	</section><!-- .entry-content -->

	<aside class="entry-sidebar">
		<h2>Artist Information</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi alias totam necessitatibus enim voluptatibus dignissimos repellendus ea, voluptas corporis sunt veniam in earum consequatur adipisci, est. Quis, voluptates. Nisi, autem?</p>
	</aside>

	
</article><!-- #post-<?php the_ID(); ?> -->
