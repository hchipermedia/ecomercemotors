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
							<option value="Hombre">Hombre</option>
							<option value="Mujer">Mujer</option>
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

	$cuerpoCorreo = '<table>
						<thead>
						</thead>
						<tbody>
							<tr>
								<th>Prospecto</th>
							</tr>
							<tr>
								<td>
									<strong>Nombre:'.$_POST['nombre'].'</strong>
								</td>
							</tr>
							<tr>
								<td>
									<strong>Correo:'.$_POST['correo'].'</strong>
								</td>
							</tr>
							<tr>
								<td>
									<strong>Telefono:'.$_POST['telefono'].'</strong>
								</td>
							</tr>
							<tr>
								<td>
									<strong>Genero:'.$_POST['genero'].'</strong>
								</td>
							</tr>
							<tr>
								<td>
									<strong>Asunto:'.$_POST['mensaje'].'</strong>
								</td>
							</tr>
						</tbody>
					</table>';
	require 'inc/PHPMailer/PHPMailerAutoload.php';
	// Correo al propietario
	$correo = new PHPMailer;
	$correo->setFrom('hhipermedia@gmail.com', 'Hugo');
	$correo->addAddress('hchipermedia@gmail.com', 'Victor Hugo');
	$correo->Subject = 'Correo de prueba';
	// $correo->Body = 'Hola este es un correo de prueba';
	$correo->Body = $cuerpoCorreo;
	$correo->CharSet = 'utf8';
	$correo->isHTML(true);
	$correo->send();
}
 ?>

<?php get_footer(); ?>
