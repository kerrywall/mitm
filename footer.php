<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package musicinthemorning
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<section class="site-info clearfix">
			<div class="about">
				<h2>About Us</h2>
				<p>Music in the Morning is a distinctive morning concert series that inspires its audiences with masterpieces of the past, while challenging them with music of our time performed by the finest local, national and international talent – all at affordable ticket prices.</p>
			</div>
			<div class="donate">
				<h2>Donate to MITM</h2>
				<p>Ticket sales and subscriptions make up only half the revenue needed for us to be able to provide varied and high quality programming and meaningful concert experiences for people of all ages at Music in the Morning. Gifts from our audience members and other supporters help us make up for this funding gap.</p>
				<p><a href="https://www.canadahelps.org/en/charities/music-in-the-morning-concert-society/" target="_blank">Donate Online</a></p>
			</div>
			<div class="contact">
				<h2>Contact Us</h2>
				<p class="email"><a href="mailto:info@musicinthemorning.org">info@musicinthemorning.org</a></p>
				<p class="address">Music in the Morning<br>
					PO Box 95024, Kingsgate RPO<br>
					Vancouver, BC<br>
					V5T 4T8</p>
			</div>
			<div class="news">
				<a class="twitter-timeline" data-height="300" data-theme="dark" href="https://twitter.com/MITMVancouver?ref_src=twsrc%5Etfw">Tweets by MITMVancouver</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</section><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

</body>
</html>
