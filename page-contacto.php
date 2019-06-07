<?php
/*
Template Name: Contacto
*/

get_header(); ?>
<section class="u-contenedorCompleto">

	<?php while ( have_posts() ) : the_post(); ?>
	   
	    <article class="Page">
			<section class="u-contenedor SH-article">
				<!-- Título del artículo -->
				<h1 class="Page-title"><?php the_title(); ?></h1>
				<!-- Contenido -->
				<?php the_content(); ?>
				<div class="Formulario1">
					<form>
						<input type="text" id="Nombre" placeholder="Nombre">
						<input type="text" id="Correo" placeholder="Correo">
						<input type="text" id="Telefono" placeholder="Telefono">
						<textarea id="mensaje" placeholder="Escribe aqui el mensaje"></textarea>
						<input type="button" value="Enviar" id="button">
					</form>
				</div>
				<!-- Compartir en redes sociales -->
				<?php anliSocialShare(); ?>
			</section>
		</article>
	<?php endwhile; // end of the loop. ?>
</section>

<?php get_footer(); ?>