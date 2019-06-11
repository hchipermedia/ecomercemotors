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
					<form action="" method="POST">
						<input type="text" name="nombre" id="Nombre" placeholder="Nombre">
						<input type="text" name="correo" id="Correo" placeholder="Correo">
						<select name="genero">
							<option value="1">Hombre</option>
							<option value="0">Mujer</option>
						</select>
						<input type="text" name="telefono" id="Telefono" placeholder="Telefono">
						<textarea id="mensaje" name="mensaje" placeholder="Escribe aqui el mensaje"></textarea>
						<input type="submit" name="enviar" value="Enviar" id="button">
					</form>
				</div>
				<!-- Compartir en redes sociales -->
				<?php anliSocialShare(); ?>
			</section>
		</article>
	<?php endwhile; // end of the loop. ?>
</section>
<?php 

	if (isset($_POST['enviar'])) {

		echo '<h1 style="color:white">hola mundo</h1>';
		echo '<h1 style="color:white">Nombre:'.$_POST['nombre'].'</h1>';
		echo '<h1 style="color:white">Correo:'.$_POST['correo'].'</h1>';
		echo '<h1 style="color:white">Telefono:'.$_POST['telefono'].'</h1>';
		echo '<h1 style="color:white">Genero:'.$_POST['genero'].'</h1>';

			# code...
		}

 ?>

<?php get_footer(); ?>