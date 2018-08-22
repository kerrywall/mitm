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
			if( have_rows('artists') ):

			 	// loop through the rows of data
			    while ( have_rows('artists') ) : the_row();

			        $post_object = get_sub_field('artist');

			        if( $post_object ): 

			        	// override $post
			        	$post = $post_object;
			        	setup_postdata( $post ); 

			        	?>
			            
		            	<h2><?php the_title(); ?></h2>
		            	<p><?php the_content(); ?></p>
			            
			            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly

			        endif;

			    endwhile;

			else :

			    // no rows found

			endif;

			echo '<h2>Concert Schedule</h2>';

			$series = get_the_category()[0]->cat_name;

			if ($series == "Main Series") {
 
				echo '<h3>Wednesdays & Thursdays</h3>
				<p><strong>Vancouver Academy of Music</strong><br>
				Coffee 10am – Concert 10:30am</p>';

				echo '<h3>Fridays</h3>
				<p><strong>Christ Church Cathedral</strong><br>
				Coffee 11am – Concert 11:30am</p>';

			}
			
		?>
	</aside>

	
</article><!-- #post-<?php the_ID(); ?> -->
