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

<div class="HomeCover" style="background-image: url('<?php echo get_plantilla_url(''); ?>/images/ktm.jpg');">
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
</div>

<!--pone tres imagenes  -->
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col col-lg-3">
      	<div>
      		<img src="<?php echo get_plantilla_url(''); ?>/images/img2.jpg" class="d-block w-100" alt="...">
      		<p>Esta es la primera imagen</p>
      	</div>
      </div>
      <!--<div class="col col-lg-3">
      	Variable width content
      	<div>
      		<img src="<?php echo get_plantilla_url(''); ?>/images/img1.jpg" class="d-block w-100" alt="...">
      	</div>
   	</div>-->
   	<div class="col col-lg-3">
      	<div>
      		<img src="<?php echo get_plantilla_url(''); ?>/images/img3.jpg" class="d-block w-100" alt="...">
      		<p>Esta es la segunda imagen</p>
      	</div>
      </div>
   </div>
</div>
<?php get_footer(); ?>
