<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package musicinthemorning
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

	<?php echo '<h2>Main Series Schedule</h2>
		<h3>Wednesdays & Thursdays</h3>
		<p><strong>Vancouver Academy of Music</strong><br>
		Coffee 10am – Concert 10:30am</p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10412.359540304024!2d-123.14616299999999!3d49.274694!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673cca6be1cb3%3A0xaa5f41a16b863d85!2s1270+Chestnut+St%2C+Vancouver%2C+BC+V6J+4R9!5e0!3m2!1sen!2sca!4v1532801548850" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>';

		echo '<h3>Fridays</h3>
		<p><strong>Christ Church Cathedral</strong><br>
		Coffee 10am – Concert 10:30am</p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.573849970145!2d-123.12252118499624!3d49.284471678565964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867181c0caca91%3A0xd67416bf0b1dc960!2sChrist+Church+Cathedral!5e0!3m2!1sen!2sca!4v1535233871179" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>'; ?>
