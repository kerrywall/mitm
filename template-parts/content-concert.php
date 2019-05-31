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
		<?php 				

		$series = get_the_category()[0]->cat_name;

		if ($series == "Main Series" || $series == "Summer Music Vancouver") {

			echo '<div class="tickets"><h2>Single Tickets</h2>';

			echo '<p><strong>Main Concert Series & Summer Music Vancouver</strong><br>
$42 Adults  •  $38 Seniors</p>';

			echo '<p>To buy tickets by phone, please call the box office at 604.873.4612.</p>';

			// check if the repeater field has rows of data
					if( have_rows('ticket_links') ):

						echo '<h3>Buy tickets for these performances online:</h3>';

					 	// loop through the rows of data
					    while ( have_rows('ticket_links') ) : the_row();

					        echo '<p class="ticket-link"><a href="'.get_sub_field('ticket_link').'">'.get_sub_field('performance_date').'</a></p>';

					    endwhile;


					else :

					    echo '<p>Tickets will be available online soon.</p>';

					endif;
					echo '</div>';

				}

				 ?>
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
			            
		            	<h2>Performers</h2>
		            	<p><?php the_content(); ?></p>
			            
			            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly

			        endif;

			    endwhile;

			else :

			    // no rows found

			endif;



			if ($series == "Main Series") {

				echo '<h2>Concert Schedule</h2>';
 
				echo '<h3>Wednesdays & Thursdays</h3>
				<p><strong>Vancouver Academy of Music</strong><br>
				Coffee 10am – Concert 10:30am</p>';

				echo '<h3>Fridays</h3>
				<p><strong>Christ Church Cathedral</strong><br>
				Coffee 10am – Concert 10:30am</p>';
			}
			
		?>
	</aside>

	
</article><!-- #post-<?php the_ID(); ?> -->
