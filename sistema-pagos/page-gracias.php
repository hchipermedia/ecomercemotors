<?php
/*
* Template Name: Gracias
*/


get_header(); 
?>
	<?php while ( have_posts() ) : the_post(); ?>
		<section class="SistemaPagos u-contenedor">
		   	<ul class="SistemaPagos-breadcrumbs">
		   	   <li><a href="#">Paso 1 - Ingresa tus datos</a></li>
		   	   <li><a href="#">Paso 2 - Revisión de compra</a></li>
		   	   <li><a href="#">Paso 3 - Realiza tu pago</a></li>
		   	   <li><a class="active" href="#">Paso 4 - Finalizar</a></li>
		   	</ul>
		   	<h1 class="SistemaPagos-title">Paso 4 - Finalizar</h1>
		   	<form action="<?php echo home_url(); ?>/pago/paso2" method="POST" class="SistemaPagos-form">
		      	<div class="">
		      	   	<h2 class="SistemaPagos-formColumn-title">Detalles de tu pedido</h2>
		      	   	<fieldset>
		      	   		<p>Concepto: <strong><?php echo $_REQUEST['item_name']; ?></strong></p>
		      	   		<p>Método de pago: <strong>PayPal</strong></p>
		      	   		<?php
		      	   		$str = $_REQUEST['payment_date']; 

		      	   		$date = new DateTime($str);

		      	   		$date->setTimezone(new DateTimezone('UTC'));

		      	   		$payment_date = $date->format('Y-m-d');

		      	   		?>
		      	   		<p>Fecha: <strong><?php echo $payment_date; ?></strong></p>

		      	   		<p>Total: <strong>$<?php echo $_REQUEST['mc_gross']; ?></strong></p>
		      	  	</fieldset> 
		      	</div>
		      	<div class="">
		      	   	<h2 class="SistemaPagos-formColumn-title">Datos del cliente</h2>
		      	   	<fieldset>
		      	   		<p>Nombre: <strong><?php echo $_REQUEST['first_name'].' '.$_REQUEST['last_name']; ?></strong></p>
		      	   		<p>Correo: <strong><?php echo $_REQUEST['payer_email']; ?></strong></p>
		      	   	</fieldset>
		      	</div>
		   </form>
		</section>
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
