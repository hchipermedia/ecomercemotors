<?php
/*
Template Name: Galeria
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
				<div class="Galeria1-4col">	
					<div class="row">
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
							<div class="sub4">
								<a href="#">10 Primero</a>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley2.jpg"/>
							<div class="sub4">
								<a href="#">8 Segundo</a>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley3.jpg"/>
							<div class="sub4">
									<a href="#">21 Tercero</a>
									<p>hola que tal hola que tal </p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley4.jpg"/>
							<div class="sub4">
								<a href="#">17 PCuarto</a>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
					</div>
				</div>
				<div class="Galeria2-4col">	
					<div class="row">
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
							<div class="sub4">
								<a href="#">10 Primero</a>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley2.jpg"/>
							<div class="sub4">
								<a href="#">8 Segundo</a>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley3.jpg"/>
							<div class="sub4">
								
									<a href="#">21 Tercero</a>
									<p>hola que tal hola que tal </p>
								
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley4.jpg"/>
							<div class="sub4">
								<a href="#">17 PCuarto</a>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
					</div>
				</div>
				<div class="Galeria3-4col">	
					<div class="row">
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
							<div class="sub4">
								<a href="#">10 Primero</a>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley2.jpg"/>
							<div class="sub4">
								<a href="#">8 Segundo</a>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley3.jpg"/>
							<div class="sub4">
								
									<a href="#">21 Tercero</a>
									<p>hola que tal hola que tal </p>
								
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley4.jpg"/>
							<div class="sub4">
								<a href="#">17 PCuarto</a>
								<p>hola que tal hola que tal </p>
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