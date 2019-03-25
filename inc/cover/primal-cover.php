<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>


<section class="PrimalCover u-contenedorCompleto" style="background-image: url('<?php the_field('imagenFondoPortada', 'option'); ?>')">
	
	<div class="PrimalCover-contenido u-contenedor">
		
		<!-- Títulos y llamadas a la acción -->
		<div class="PrimalCover-titulos">
			<h1 class="PrimalCover-titulo"><?php the_field('tituloPortada', 'option'); ?></h1>		
			<h2 class="PrimalCover-subtitulo"><?php the_field('subtituloPortada', 'option'); ?></h2>
			<a href="#" class="PrimalCover-action btn btn-default btn-raised"><?php the_field('accion1Portada', 'option'); ?></a>
			<a href="#" class="PrimalCover-action btn btn-default btn-raised"><?php the_field('accion2Portada', 'option'); ?></a>
		</div>
		
		<!-- Imagen principal -->
		<figure class="PrimalCover-imagen">
			<img src="<?php the_field('imagenPortada', 'option'); ?>" alt="Sitio web efectivo SH">
		</figure>

	</div>		
	
</section>