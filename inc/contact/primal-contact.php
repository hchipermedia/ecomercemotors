<?php 
/** Sección de texto. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>

<!-- PrimalBloques -->
<section class="PrimalContacto u-contenedor-completo" style="background-image: url('<?php the_field('imagenFondoPortada', 'option'); ?>')">
	<div class="PrimalContacto-contenido u-contenedor" >
		<div class="PrimalContacto-formulario" style="">
			<h3>primalContact Lorem ipsum dolor sit amet.</h3>
			<?php echo do_shortcode('[contact-form-7 id="73" title="Default CF"]'); ?>
		</div>
	</div>
</section>