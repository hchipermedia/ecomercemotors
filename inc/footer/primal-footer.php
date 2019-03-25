<?php
/* Footer
 ----------------------------------*/
?>

</main>

<footer class="PrimalFooter u-contenedorCompleto">	
    
    <section class="PrimalFooter-contenido u-contenedor">
		
		<div class="PrimalFooter-contenedor">
			<h2>About</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quam aliquam, vitae omnis quaerat deserunt quisquam modi accusantium similique quae qui sit, repellat alias pariatur illum repellendus consequatur eligendi. Excepturi voluptates mollitia expedita perspiciatis, illum culpa fugit aliquid. Et optio voluptatem unde voluptas, cumque iste eius odio facilis sequi animi?</p>
		</div>

		<div class="PrimalFooter-contenedor">
			<h2>Contacto</h2>
			<div class="PrimalFooter-contenedorDatos">
			    <p>
			    	<i class="fa fa-map-marker"></i>
			    	<?php the_field('direccionContacto', 'option'); ?>
			    </p>

			    <p>
			    	<i class="fa fa-phone"></i>
			    	<?php the_field('telefonoContacto', 'option'); ?>
			    </p>

			    <p>
			    	<i class="fa fa-envelope"></i>
			    	<?php the_field('correoContacto', 'option'); ?>
			    </p>
			   
			</div><!-- #social-contacto -->
	
			<div class="PrimalFooter-contenidoComplementos">

				<p class="SocialNetworks-blockTitle">Newsletter</p>
				<form action="//consejojuvenilxalapa.us11.list-manage.com/subscribe/post?u=b5152aad17a27de5bf0a382fa&amp;id=3f2fbfe47f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-cjx" target="_blank" novalidate>
					<input type="email" id="exampleInputEmail1" placeholder="E-mail">
				    <input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="button-nl btn btn-default">
				</form>

				<!-- Facebook -->
				<a href="<?php the_field('facebookContacto', 'option'); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
				<!-- Twitter -->
				<a href="<?php the_field('twitterContacto', 'option'); ?>" title="Twitter" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>
				<!-- Youtube -->
				<a href="<?php the_field('googleContacto', 'option'); ?>"title="Youtube" target="_blank"><i class="fa fa-youtube-square fa-3x"></i></a>
				<!-- Google Plus -->
				<a href="<?php the_field('youtubeContacto', 'option'); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a>
			</div> 
			
		</div>

		<div class="PrimalFooter-contenedor">
			<h2>Facebook Fanpage</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ducimus, suscipit velit. Minima aliquam, adipisci laudantium vitae, aut laboriosam natus! Soluta alias, accusamus odit adipisci cum, non quae dicta excepturi placeat nostrum animi eius reiciendis itaque ex iste in, error?</p>
		</div>

    </section>     

</footer>