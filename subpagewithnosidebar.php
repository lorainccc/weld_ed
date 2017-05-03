<?php
/**
Template Name: Subpage with no sidebar
 */
get_header(); ?>

<div class="small-12 medium-12 large-12 columns maincontent">
	<div class="small-12 medium-12 large-12 columns">
			<div class="small-12 medium-12 large-12 columns">
         <div id="yoastbreadcrumbs">
					<?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                    } ?>
                </div><!--closes yoastbreadcrumbs div -->
</div>
	<div id="primary" class="small-12 medium-12 large-12 columns content-area">
		<main id="main" class="site-main" role="main">
			<div class="small-12 medium-12 large-12 columns">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
		
</div>

<?php get_footer(); ?>
