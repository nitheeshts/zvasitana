<?php
/**
   Template Name: Logo Design Gallery
 * The template for displaying all pages.
 */
get_header(); ?>
<div class="clear"></div>
</header> <!-- / END HOME SECTION  -->
<div id="content" class="site-content">
<div class="container">
<?php while ( have_posts() ) : the_post(); 		
						get_template_part( 'content', 'gallery' );
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					endwhile; 
				?>
</div><!-- .container -->
<?php get_footer(); ?>