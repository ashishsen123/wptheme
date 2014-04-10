<?php
/**
  * Template Name: Sidebar/Content/Sidebar
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
		
		<div class="left-sidebar">
		<div class="sub-pge-widget-1">
			<div class="pagewidget-1">
			<?php dynamic_sidebar('page-widget-1');
			
			?>
			</div>
		</div>
		<div class="sub-pge-widget-2">
			<div class="pagewidget-2">
			<?php dynamic_sidebar('page-widget-2');
			
			?>
			</div>
		
		</div>
		<div class="sub-pge-widget-3">
			<div class="pagewidget-3">
			<?php dynamic_sidebar('page-widget-3');
			
			?>
			</div>
		</div>	
		</div>
		

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
			<?php get_sidebar(); ?>

		</main><!-- #main -->
		
			<!-- #primary -->
	



<?php get_footer(); ?>