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

		$args = array(
			'post_type' => 'concert' , 'meta_key'=> 'sort_date', 'orderby'	=> 'meta_value_num', 'order' => 'ASC', 'category_name' => 'summer-music-vancouver', 'tag__not_in' => array( 19 )
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			echo '<section class="site-events smv">';
			echo '<h2>Summer Music Vancouver</h2>';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				if (has_post_thumbnail()) {
					$thumbnail = get_the_post_thumbnail_url($post->ID, 'large');
				} else {
					$thumbnail = get_template_directory_uri() . '/img/radek-grzybowski-74331-unsplash.jpg';
				}
				echo '<div class="event">
						<a href="'.get_permalink().'?view=list">
						<img src="'.$thumbnail.'" alt="">
						<div class="description">
							<h4>'.get_the_title().'</h4>
								<p>'.get_field('performance_date').'</p>
							
						</div>
						</a>
					</div>';
			}
			echo '</section>';
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found

		}

		//subscriptions
		$args = array(
			'post_type' => 'product' , 'product_cat' => 'subscription'
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			echo '<section class="site-events smv">';
			echo '<h2>Subscriptions</h2>';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				if (has_post_thumbnail()) {
					$thumbnail = get_the_post_thumbnail_url($post->ID, 'large');
				} else {
					$thumbnail = get_template_directory_uri() . '/img/radek-grzybowski-74331-unsplash.jpg';
				}
				echo '<div class="event">
						<a href="'.get_permalink().'/">
						<img src="'.$thumbnail.'" alt="">
						<div class="description">
							<h4>'.get_the_title().'</h4>
							<p>&nbsp;</p>
						</div>
						</a>
					</div>';
			}
		
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		} 

		//main series
		$args = array(
			'post_type' => 'concert' , 'meta_key'=> 'sort_date', 'orderby'	=> 'meta_value_num', 'order' => 'ASC', 'category_name' => 'main-series'
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			echo '<section class="site-events smv">';
			echo '<h2>Main Series</h2>';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				if (has_post_thumbnail()) {
					$thumbnail = get_the_post_thumbnail_url($post->ID, 'large');
				} else {
					$thumbnail = get_template_directory_uri() . '/img/radek-grzybowski-74331-unsplash.jpg';
				}
				echo '<div class="event">
						<a href="'.get_permalink().'?view=list">
						<img src="'.$thumbnail.'" alt="">
						<div class="description">
							<h4>'.get_the_title().'</h4>
							<p>'.get_field('performance_date').'</p>
						</div>
						</a>
					</div>';
			}
		
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		} 

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'musicinthemorning' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
