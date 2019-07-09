<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 */

get_header(); ?>

<section class="u-contenedorCompleto">

	<?php while ( have_posts() ) : the_post(); ?>
	   
	    <article class="Page">	
			
			<!-- Imágen destacada -->
			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="Page-featuredImage">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				</figure>
			<?php else : ?>
				<figure class="Page-featuredImage">
					<img src="<?php the_field('thumbPersonalizada', 'option'); ?>" alt="">
				</figure>
			<?php endif; ?>

			<section class="u-contenedor SH-article">
				<!-- Título del artículo -->
				<h1 class="Page-title"><?php the_title(); ?></h1>
				<!-- Contenido -->
				<?php the_content(); ?>	
				<!-- Compartir en redes sociales -->
				<?php anliSocialShare(); ?>
			</section>
		</article>
	<?php endwhile; // end of the loop. ?>
</section>

<?php get_footer(); ?>
