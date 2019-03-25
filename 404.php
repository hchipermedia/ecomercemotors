<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>

<section class="u-contenedor">

   
    <article class="Page u-contenido error404">	
		
		<h1 class="Page-title">Página no encontrada</h1>
		
		<p>Parece que la página que búscas no existe. ¿Por qué no pruebas usar el buscador que aprece a continuación para encontrar el contenido que deseas? <strong>¡Suerte!</strong></p>
		<?php get_search_form(); ?>
   
	</article>


<?php get_footer(); ?>