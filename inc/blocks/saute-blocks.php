<?php 
/** Bloques de contenido. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="SauteBlocks">
	<!-- Contenedor -->
	<div class="SauteBlocks-contenido">
		
		<!-- Títulos de la sección -->
		<div class="SauteBlocks-titulos u-contenedor">
			<h1 class="SauteBlocks-titulo"><?php the_field('tituloBloques', 'option'); ?></h1>
			<h2 class="SauteBlocks-subtitulo">
				<?php the_field('subtituloBloques', 'option'); ?>
			</h2>
		</div>
		
		<?php if( have_rows('bloquesBloques', 'option') ): ?>
			<?php while( have_rows('bloquesBloques', 'option') ): the_row(); ?>
				
	 			<!-- bloque -->
				<div class="SauteBlocks-block" >
					<!-- Imágen del bloque -->
					<figure class="SauteBlocks-blockFigure" style="background-image: url('<?php the_field('imagenFondoPortada', 'option'); ?>')">
						<!-- <img src="<?php the_sub_field('imagen'); ?>" alt="<?php the_sub_field('titulo'); ?>"> -->
					</figure>
					<!-- Contenido del bloque -->
					<div class="SauteBlocks-blockWrapper">
						<div class="SauteBlocks-blockContent">
							<h3 class="SauteBlocks-blockTitulo"><?php the_sub_field('titulo'); ?></h3>
							<h4 class="SauteBlocks-blockSubtitulo"><?php the_sub_field('subtitulo'); ?></h4>
							<p class="SauteBlocks-blockDescripcion">
								<?php the_sub_field('descripcion'); ?>
							</p>
							<a href="" class="SauteBlocks-blockAction btn btn-default btn-raised">
								<i class="fa fa-plus"></i>
								 <?php the_sub_field('accion'); ?>
							</a>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>