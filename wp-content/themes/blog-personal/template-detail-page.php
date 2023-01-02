<?php
/**
 * Template for Home Page
 *
 * Template name: Detail Page
 *
 * @package Blog_Personal
 */

get_header();
?>
	<div id="primary" class="content-area <?php echo esc_attr( $blog_personal_layout_class );?>">
		<main id="main" class="site-main">
			<?php the_content(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
