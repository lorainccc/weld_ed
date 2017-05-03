<?php
/**
Template Name: Subpage with no sidebar
 */
get_header(); ?>

<div class="small-12 medium-12 large-12 columns maincontent">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="medium-3 large-3 columns show-for-medium-up sidenavigation">
			<?php if ( is_active_sidebar( 'sidebarnavigation' ) ) : ?>
					<ul id="navsidebar">
						<?php dynamic_sidebar( 'sidebarnavigation' ); ?>
					</ul>
				<?php endif; ?>
			
			</div>
			<div class="small-12 medium-9 large-9 columns">
		
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