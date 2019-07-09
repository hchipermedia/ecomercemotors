<?php
/**
 Template Name: servicio
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
				<div class="allservices">	
					<div class="row">
						<div class="col">
							<a href="<?php echo home_url(); ?>/presion-de-llantas"><!--funcion que imprime la pagina que se crea en wordpress-->
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/presion.jpg"/>
							<div class="services">
								<h2 href="#">presion de llantas</h2>
							</div>
							</a>
						</div>
						<div class="col">
							<a href="<?php echo home_url(); ?>/cambio-de-aceite"><!--funcion que imprime la pagina que se crea en wordpress-->
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/aceite.jpg"/>
							<div class="services">
								<h2 href="#">Cambio de aceite</h2>
							</div>
						</div>
						<div class="col">
							<a href="<?php echo home_url(); ?>/mantenimiento-de-carburador"><!--funcion que imprime la pagina que se crea en wordpress-->
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/carburador.jpg"/>
							<div class="services">
								<a href="#">Mantenimiento carburador</a>
							</div>
						</div>
						<div class="col">
							<a href="<?php echo home_url(); ?>/cambio-de-bujias"><!--funcion que imprime la pagina que se crea en wordpress-->
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/bujia.jpg"/>
							<div class="services">
								<a href="#">Cambio de bujias</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Compartir en redes sociales -->
				<?php anliSocialShare(); ?>
			</section>
		</article>
	<?php endwhile; // end of the loop. ?>
</section>
<?php get_footer(); ?>
<!--
<div class="servicios-2col">
					<div class="row">
						<div class="servicios-datos">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
							<div class="service1">
								<h2>Cambio de aceite</h2>
								<p>hola que tal hola que tal hola que tal hola que tal  hola que tal hola que tal hola que tal hola que tal hola que tal hola que tal hola que tal hola que tal</p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley2.jpg"/>
							<div class="service2">
								<h2>Cambio de filtro de alto flujo</h2>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
					</div>
				</div>-->