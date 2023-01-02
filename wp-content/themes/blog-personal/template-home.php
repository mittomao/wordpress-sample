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
	<div id="primary" class="content-area <?php echo esc_attr( $blog_personal_layout_class );?>">
		<main id="main" class="site-main">
			<?php the_content(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php

