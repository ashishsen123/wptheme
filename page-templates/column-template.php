<?php
/**
  * Template Name: column template page
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */

get_header(); ?>
		
	<div id="primary" class="content-area">
	
		
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		
			<!-- #primary -->
			<div class="column-sidebar">
		<div class="columnpage-widget-1">
			<div class="firstwidget-1">
			<?php dynamic_sidebar('column-widget-1');
			
			?>
			</div>
		</div>
		<div class="columnpage-widget-2">
			<div class="firstwidget-2">
			<?php dynamic_sidebar('column-widget-2');
			
			?>
			</div>
		</div>
		<div class="columnpage-widget-3">
			<div class="firstwidget-3">
			<?php dynamic_sidebar('column-widget-3');
			
			?>
			</div>
		</div>
		<div class="columnpage-widget-4">
			<div class="firstwidget-4">
			<?php dynamic_sidebar('column-widget-4');
			
			?>
			</div>
		</div>
		
		</div>
	
</div>

<?php get_footer(); ?>