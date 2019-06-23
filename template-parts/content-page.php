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
				<p>Noon with June:<br>
				Lunch with the Artists<br>
				11:45am | Mary Olson Hall<br>
				June Goldsmith, C.M., O.B.C.</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10412.359540304024!2d-123.14616299999999!3d49.274694!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673cca6be1cb3%3A0xaa5f41a16b863d85!2s1270+Chestnut+St%2C+Vancouver%2C+BC+V6J+4R9!5e0!3m2!1sen!2sca!4v1532801548850" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
			</aside>
			<div class="content">
		<?php } ?>
		
		<?php
		the_content();
		?><?php if (is_page('noon-with-june')) { 
			if( have_rows('events') ):

			 	// loop through the rows of data
			    while ( have_rows('events') ) : the_row();

			    	$event = get_sub_field('event')->post_title;
			    	$date = get_sub_field('date');
			    	$link = get_sub_field('event')->guid;

			   ?><p><a href="<?php echo $link ?>"><?php echo $event ?></a><br><?php echo $date ?></p><?

			    endwhile;


			endif;
		?></div><?php }?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
