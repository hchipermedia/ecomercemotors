<?php
/*
Template Name: Nosotros
*/

get_header(); ?>

<section class="u-contenedorCompleto">

	<?php while ( have_posts() ) : the_post(); ?>
	   
	    <article class="Page">	

			<section class="u-contenedor page-nosotros">
				<!-- Título del artículo -->
				<h1 class="Page-title"><?php the_title(); ?></h1>

				<!-- Imágen destacada -->
				<?php if ( has_post_thumbnail() ) : ?>
					<figure class="Page-featuredImage">
						<?php the_post_thumbnail( 'large' ); ?>
							
						</figure>
						<?php else : ?>
							<figure class="Page-featuredImage">
								<img src="<?php the_field('thumbPersonalizada', 'option'); ?>" alt="">
							</figure>
				<?php endif; ?>

				<!-- Contenido -->
				<?php the_content(); ?>
				<h2 class="page-sub">Ofertas especiales </h2>
				<div class="Nosotros-4col">	
					<div class="row">
						<div class="col">
							<h2>1.</h2>
							<div>
								<p>ahsuhiushdlisudhaslijdaslijasi</p>
							</div>
						</div>
						<div class="col">
							<h2>2.</h2>
							<div>
								<p>ahsuhiushdlisudhaslijdaslijasi</p>
							</div>
						</div>
						<div class="col">
							<h2>3.</h2>
							<div>
								<p>ahsuhiushdlisudhaslijdaslijasi</p>
							</div>
						</div>
						<div class="col">
							<h2>4.</h2>
							<div>
								<p>ahsuhiushdlisudhaslijdaslijasi</p>
							</div>
						</div>
					</div>
				</div>
				<h2 class="page-sub">Clientes</h2>
				<div class="Clientes-4col">	
					<div class="row">
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/honda.jpg"/>
							<div class="sub4">
								<a href="#">10 Primero</a>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/logoharley.jpg"/>
							<div class="sub4">
								<a href="#">8 Segundo</a>
								<p>hola que tal hola que tal </p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/suzukilogo.jpg"/>
							<div class="sub4">
									<a href="#">21 Tercero</a>
									<p>hola que tal hola que tal </p>
							</div>
						</div>
						<div class="col">
							<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/logobmw.jpg"/>
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

<!--
				<div class="Nosotros-4col">
					<div class="row">
						<div class="col">
							<div class="texto">
								<a>1.</a>
								<div>
									<p>hola que tal este es el primer parrafo de la pagina web espero y les agrade</p>
								</div>
							</div>	
						</div>
						<div class="col">
							<a>2.</a>
							<div>
								<p>hola que tal este es el primer parrafo de la pagina web espero y les agrade</p>
							</div>
						</div>
						<div class="col">
							<a>3.</a>
							<div>
								<p>hola que tal este es el primer parrafo de la pagina web espero y les agrade</p>
							</div>
						</div>
						<div class="col">
							<a>4.</a>
							<div>
								<p>hola que tal este es el primer parrafo de la pagina web espero y les agrade</p>
							</div>
						</div>
					</div>
				</div>


-->