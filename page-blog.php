<?php
/*
Template Name: Blog
*/

get_header(); ?>
<h1>hola</h1>
<section class="u-contenedorCompleto">

	<?php while ( have_posts() ) : the_post(); ?>
	   
	    <article class="Page">	
			
			<!-- Imágen destacada -->
			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="Page-featuredImage">
					<?php the_post_thumbnail( 'large' ); ?>
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