<?php 
/** Bloques de testimonio. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="PrimalTestimony">
	<!-- Contenedor -->
	<div class="PrimalTestimony-contenido u-contenedor">
		<!-- Títulos de la sección -->
		<h1 class="PrimalTestimony-titulo"><?php the_field('tituloTestimonios', 'option'); ?></h1>
		<h2 class="PrimalTestimony-subtitulo">
			<?php the_field('subtituloTestimonios', 'option'); ?>
		</h2>
		
		<?php if( have_rows('bloquesTestimonios', 'option') ): ?>
			<?php while( have_rows('bloquesTestimonios', 'option') ): the_row(); ?>
				
				<!-- bloque -->
				<div class="PrimalTestimony-block">
					<figure class="PrimalTestimony-blockFigure">
						<i class="fa fa-quote-left"></i>
					</figure>
					<blockquote class="PrimalTestimony-blockCita">
						<?php the_sub_field('cita'); ?>
					</blockquote>
					<h4 class="PrimalTestimony-blockAuthor">
						<?php the_sub_field('autor'); ?>
						<span class="PrimalTestimony-blockMeta">
							<?php the_sub_field('descripcion'); ?>
						</span>
					</h4>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>