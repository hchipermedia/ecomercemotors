<?php 
/** Bloques de contenido. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="PrimalBlocks u-contenido">
	<!-- Contenedor -->
	<div class="PrimalBlocks-contenido u-contenedor">
		<!-- Títulos de la sección -->
		<h1 class="PrimalBlocks-titulo"><?php the_field('tituloBloques', 'option'); ?></h1>
		<h2 class="PrimalBlocks-subtitulo">
			<?php the_field('subtituloBloques', 'option'); ?>
		</h2>
		
<!-- 		<?php //if( have_rows('bloquesBloques', 'option') ): ?>
			<?php //while( have_rows('bloquesBloques', 'option') ): the_row(); ?> -->
				
				<!-- bloque -->
				<div class="PrimalBlocks-block">
					<figure class="PrimalBlocks-blockFigure">
						<!-- <img src="<?php the_sub_field('imagen'); ?>" alt="<?php the_sub_field('titulo'); ?>"> -->
						<i class="fa fa-laptop" aria-hidden="true"></i>
					</figure>
					<h3 class="PrimalBlocks-blockTitulo">Título del bloque</h3>
					<p class="PrimalBlocks-blockDescripcion">
						Descripción lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus  molestiae minus, quas totam.
					</p>
					<a href="" class="PrimalBlocks-blockAction u-btn">
						<i class="fa fa-search-plus" aria-hidden="true"></i>
						Ver más
					</a>
				</div>

				<div class="PrimalBlocks-block">
					<figure class="PrimalBlocks-blockFigure">
						<!-- <img src="<?php the_sub_field('imagen'); ?>" alt="<?php the_sub_field('titulo'); ?>"> -->
						<i class="fa fa-desktop" aria-hidden="true"></i>
					</figure>
					<h3 class="PrimalBlocks-blockTitulo">Título del bloque</h3>
					<p class="PrimalBlocks-blockDescripcion">
						Descripción lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus  molestiae minus, quas totam.
					</p>
					<a href="" class="PrimalBlocks-blockAction u-btn">
						<i class="fa fa-search-plus" aria-hidden="true"></i>
						Ver más
					</a>
				</div>

				<div class="PrimalBlocks-block">
					<figure class="PrimalBlocks-blockFigure">
						<!-- <img src="<?php the_sub_field('imagen'); ?>" alt="<?php the_sub_field('titulo'); ?>"> -->
						<i class="fa fa-mobile" aria-hidden="true"></i>
					</figure>
					<h3 class="PrimalBlocks-blockTitulo">Título del bloque</h3>
					<p class="PrimalBlocks-blockDescripcion">
						Descripción lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus  molestiae minus, quas totam.
					</p>
					<a href="" class="PrimalBlocks-blockAction u-btn">
						<i class="fa fa-search-plus" aria-hidden="true"></i>
						Ver más
					</a>
				</div>

<!-- 			<?php //endwhile; ?>
		<?php //endif; ?> -->
	</div>
</section>