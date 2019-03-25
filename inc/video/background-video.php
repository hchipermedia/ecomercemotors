<?php 
/** Sección de texto. Estilo Starchi
------------------------------------------------------------------- */ 
?>

<!-- StarchiBloques -->
<section id="videoBg" class="VideoBackground u-contenedor-completo" style="">
	<!-- Contenedor -->
	<video src="<?php echo get_plantilla_url().'/video/bgvideo'?>.mp4" type="video/mp4" width="100%" height="" autoplay muted loop>

	</video>
	<div class="VideoBackground-contenido u-contenedor">
		<div class="PrimalText-texto">
			<?php the_field('contenidoTexto', 'option'); ?>
		</div>	
	</div>
</section>