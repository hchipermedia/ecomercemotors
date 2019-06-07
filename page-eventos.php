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
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
								<div>
									<a href="#">10 Primero</a>
								</div>
							</div>
							<div class="col">
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
								<div>
									<a href="#">8 Segundo</a>
								</div>
							</div>
							<div class="col">
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
								<div>
									<a href="#">21 Tercero</a>
								</div>
							</div>
							<div class="col">
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
								<div>
									<a href="#">17 PCuarto</a>
								</div>
							</div>
						</div>
					</div>
					<div class="Eventos-4col">
						<div class="row">
							<div class="col">
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
								<div>
									<a href="#">10 Primero</a>
								</div>
							</div>
							<div class="col">
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley2.jpg"/>
								<div>
									<a href="#">8 Segundo</a>
								</div>
							</div>
							<div class="col">
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley3.jpg"/>
								<div>
									<a href="#">21 Tercero</a>
								</div>
							</div>
							<div class="col">
								<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley4.jpg"/>
								<div>
									<a href="#">17 PCuarto</a>
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