<?php
/*
Template Name: Eventos
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
					<div class="Eventos-4col">
						<div class="row">
							<div class="col">
								<a href="<?php echo home_url(); ?>/maniac-route"><!--funcion que imprime la pagina que se crea en wordpress-->
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
								<div>
									<h2 href="#">maniac route</h2>
								</div>
							</div>
							<div class="col">
								<a href="<?php echo home_url(); ?>/extreme-route"><!--funcion que imprime la pagina que se crea en wordpress-->
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
								<div>
									<h2 href="#">Extreme route</h2>
								</div>
							</div>
							<div class="col">
								<a href="<?php echo home_url(); ?>/vive-xico"><!--funcion que imprime la pagina que se crea en wordpress-->
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
								<div>
									<h2 href="#">Vive Xico</h2>
								</div>
							</div>
							<div class="col">
								<a href="<?php echo home_url(); ?>/vive-xalapa"><!--funcion que imprime la pagina que se crea en wordpress-->
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
								<div>
									<h2 href="#">Vive Xalapa</h2>
								</div>
							</div>
						</div>
					</div>
					<div>
						
					</div>
				<!-- Compartir en redes sociales -->
				<?php anliSocialShare(); ?>
			</section>
		</article>
	<?php endwhile; // end of the loop. ?>
</section>

<?php get_footer(); ?>