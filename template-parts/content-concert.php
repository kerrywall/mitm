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

		<?php 

		// check if the repeater field has rows of data
			// check if the repeater field has rows of data
			if(have_rows('artists') ):

				echo '<h2>Artist Information</h2>';

			 	// loop through the rows of data
			    while (have_rows('artists') ) : the_row();

			        // override $post
			        	$post = get_sub_field('artist');
			        	setup_postdata( $post ); ?>
			            <h3><?php the_title(); ?></h3>
			            <?php the_content(); ?>
			            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly

			    endwhile;

			else :

			    // no rows found

			endif;

			// check if the repeater field has rows of data
			// check if the repeater field has rows of data
			if(get_field('location') ):

				echo '<h2>Location</h2>';


			        // override $post
			        	$post = get_field('location');
			        	setup_postdata( $post ); ?>
			            <h3><?php the_title(); ?></h3>
			            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly

			else :

			    // no rows found

			endif;
		?>
	</aside>

	
</article><!-- #post-<?php the_ID(); ?> -->
