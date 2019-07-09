<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<section class="u-contenedor">

	<?php while ( have_posts() ) : the_post(); ?>
	    <article class="Post u-contenido">	
			
			<!-- Imágen destacada -->
			<?php if ( has_post_thumbnail() ) : ?>

			<?php endif; ?>
			<!-- Título del artículo -->
			<h1 class="Post-title"><?php the_title(); ?></h1>
			<!-- Contenido -->
			<?php the_content(); ?>	
			<!-- Compartir en redes sociales -->

			<!-- Imprimo botón de pago -->
			<?php paypalButtonSH(); ?>
		</article>
	<?php endwhile; // end of the loop. ?>
</section>
<?php get_footer(); ?>

			<!--<?php anliSocialShare(); ?>funcion para las redes sociales-->