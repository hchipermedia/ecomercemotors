<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>
	<!-- Este codigo es el que hace posible el slider
 	================================================== -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
	      <li data-target="#carouselExampleControls" data-slide-to="1"></li>
	      <li data-target="#carouselExampleControls" data-slide-to="2"></li>
	   </ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo get_plantilla_url(''); ?>/images/img1.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Vive al extremo</h5>
					<p>la vida es un riesgo carnal</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?php echo get_plantilla_url(''); ?>/images/img2.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo get_plantilla_url(''); ?>/images/img3.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!--<div class="HomeCover" style="background-image: url('<?php echo get_plantilla_url(''); ?>/images/ktm.jpg');">
		<div class="HomeCover-content u-contenedor">
			<div class="HomeCover-contentTextos">
				<h3>.</h3>
				<h2>.</h2>
			</div>
			<div class="HomeCover-contentBotones">
				<button class="btn btn-primary">Botón</button>
				<button class="btn btn-primary">Botón</button>
			</div>
		</div>
	</div>-->

	<div class="Portada-4col">	

		<div class="row">
			<div class="col">
				<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley-davidson-livewire.jpg"/>
				<h2>
					<a href="#">1</a>
				</h2>
			</div>
			<div class="col">
				<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley2.jpg"/>
				<h2>
					<a href="#">2</a>
				</h2>
			</div>
			<div class="col">
				<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley3.jpg"/>
				<h2>
					<a href="#">3</a>
				</h2>
			</div>
			<div class="col">
				<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley4.jpg"/>
				<h2>
					<a href="#">4</a>
				</h2>
			</div>
		</div>
	</div>
		<!--seccion donde estara la lista de elentos-->
	<div>
		<hgroup><h2><a>DON'T MISS OUT TODAY'S GREAT EVENT</a></h2></hgroup>
	</div>
	<section id="article-list">
		<article>
			<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley5.jpg">
			<h2><a href="#">Titulo de nuestro Articulo</a></h2>
			<p class="date">10 de mayo de 2019<a href="#">Categoria 1</a></p>
			<p class="extract">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet ligula justo, at vulputate odio malesuada et. Praesent sed bibendum enim, vel ultrices purus. Phasellus interdum, urna et tristique sodales, magna tortor volutpat ipsum, et blandit ipsum ante vitae purus. Nullam placerat nisl sem. Donec placerat nunc purus, vel vestibulum tellus consequat id. Morbi imperdiet lorem enim, non accumsan erat commodo sed. Integer volutpat libero vitae leo tincidunt, et eleifend mauris congue. Maecenas et felis lobortis, tristique turpis eu, placerat eros. Etiam ornare erat at mi pharetra, vel volutpat mauris iaculis.</p>
	</section>

	<div class="HomeCover-contentBotones">
		<button class="btn-primary">VISIT EVENT</button>
	</div>

	<div>
		<hgroup><h2><a>GALLERY</a></h2></hgroup>
	</div>

	<div class="container">	
		<div class="row">
			<div class="col-2">
				<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley2.jpg"/>
				<h2>
					<a href="#">Uno</a>
				</h2>
			</div>
			<div class="col-2">
				<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley2.jpg"/>
				<h2>
					<a href="#">Uno</a>
				</h2>
			</div>
			<div class="col-2">
				<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley2.jpg"/>
				<h2>
					<a href="#">Uno</a>
				</h2>
			</div>
			<div class="col-2">
				<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley3.jpg"/>
				<h2>
					<a href="#">Uno</a>
				</h2>
			</div>
			<div class="col-2">
				<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley6.jpg"/>
				<h2>
					<a href="#">Uno</a>
				</h2>
			</div>
			<div class="col-2">
				<img class="thumb" src="<?php echo get_plantilla_url(''); ?>/images/harley5.jpg"/>
				<h2>
					<a href="#">Uno</a>
				</h2>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
