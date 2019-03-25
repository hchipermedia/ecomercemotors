<?php 
/** Sección de texto. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>

<!-- PrimalBloques -->
<section class="PrimalText u-contenido">
	<!-- Contenedor -->
	<div class="PrimalText-contenido u-contenedor">

		<h1>Titulos  .h1 o  h1 en content 2.5rem regular</h1>
		<h2>Titulos  .h2 o  h2 en content 2rem regular</h2>
		<h3>Titulos  .h3 o  h3 en content 2rem Light</h3>
		<h4>Titulos  .h4 o  h4 en content 1.5rem regular</h4>
		<h5>Titulos  .h5 o h5 en content 1.5rem regular</h5>

		<ul>
			<li>Listas tendrán 1.25rem y 1.75rem de alto de línea</li>
			<li>
				Lograremos las viñetas usando li:before 
				<ul>
					<li>Poniendo la propiedad content "• ";</li>
					<li>Ademas se cambia el color</li>
				</ul> 
			</li>
			<li>Nulla volutpat aliquam velit</li>
		</ul>

		<ul>
			<li>lalalala</li>
			<li>lalalala</li>
			<li>lalalala</li>
			<li>lalalala</li>
		</ul>

		<!-- Títulos de la sección -->
		<h1 class="PrimalText-titulo">
			<?php the_field('tituloTexto', 'option'); ?>
		</h1>
		<h2 class="PrimalText-subtitulo">
			<?php the_field('subtituloTexto', 'option'); ?>
		</h2>

		<!-- Texto wysiwyg -->
		<div class="PrimalText-texto">
			<?php the_field('contenidoTexto', 'option'); ?>
		</div>		

	</div>
</section>