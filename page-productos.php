<?php
/*
Template Name: Productos
*/
get_header(); ?>
<section class="u-contenedorCompleto">
	<?php 
    // la consulta
	$args = array('post_type'=>'product'); // arreglo de una posicion con un valor.
	$the_query = new WP_Query($args); ?> <!--se le pasan los valores the_query-->
	<?php if ($the_query->have_posts()) : ?> <!--te preguntara si el objeto tiene algo -->
		<article class="Page">
			<section class="u-contenedor SH-article">
				<!-- Título del artículo -->
				<h1 class="Page-title"><?php the_title(); ?></h1> 
				<div class="row">
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?> <!---->
						<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?> <!--funcion-->
						<div class="col-4">
							<?php the_post_thumbnail('medium'); ?>
							<div class="sub4">
								<a href="<?php the_permalink() ?>"><h2> <?php the_title(); ?></h2></a> <!--en esta linea con la funcion the_permalink se dirije a la pagina del producto que hagas clic-->
								<p><?php echo wc_price( $price ); ?></p> <!-- con esta linea imprimes los precios de los productos-->
							</div>
						</div>
					<?php endwhile; ?> 
				</div>
				<?php wp_reset_postdata(); ?>
				<?php the_content(); ?>
			</section> 
		</article>
	<?php else:?> <!--si no muestra este mensaje-->
		<p><?php esc_html_e('Lo sentimos, no hay publicaciones que coincidan con tus criterios.'); ?></p> 
	<?php endif; ?>	
</section>
<?php get_footer(); ?>