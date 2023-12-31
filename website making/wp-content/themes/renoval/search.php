<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Renoval
 */

get_header();
?>
<section id="post-section" class="post-section post-page">
	<div class="container">
		<div class="row">	
			 <div class="<?php esc_attr(renoval_post_layout()); ?>">
			
				<?php if( have_posts() ): ?>
				
					<?php while( have_posts() ) : the_post();
					
							get_template_part('template-parts/content/content','page'); 
							
					endwhile; 
					the_posts_navigation();
					?>
					
				<?php else: ?>
				
					<?php get_template_part('template-parts/content/content','none'); ?>
					
				<?php endif; ?>
			</div>
			<?php  get_sidebar();  ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
