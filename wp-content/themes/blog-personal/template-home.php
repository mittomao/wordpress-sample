<?php
/**
 * Template for Home Page
 *
 * Template name: Home
 *
 * @package Blog_Personal
 */

get_header();
?>
	<?php 
		global $post;        
	?>
	<?php the_content(); ?>
<?php
get_footer();

