<?php
/**
 * Template Name: Services
 *
 * Description: A page template that displays only posts from Services category (ID = 20).
 */
get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php function search_filter($query) {
		  if ( !is_admin() && $query->is_main_query() ) {
			  $query->set('cat', 20 );
		  }
		}
		add_action('pre_get_posts','search_filter');
		?>

		<?php /** get_template_part( 'content', 'page' ); */?>
		
	<?php endwhile; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>