<!-- Botón de pago generado -->
<div class="form-box round-corner group">

	<?php
	// Obtengo el Id del botón
	$botonesPagoIds = get_field('botonDePagoCPT');

	//var_dump($botonesPagoIds);
	$conta = 0;
	while(have_rows('botonDePagoCPT')) { the_row();
		$urlimagendeboton =  get_field('imagenBotonPagoCPT', get_sub_field('boton'));
		if ($urlimagendeboton == '' ) {	$urlimagendeboton =  get_plantilla_url().'/images/pago-default.png'; }		
		list($width_img, $height_img, $imgtype, $imgattr) = getimagesize($urlimagendeboton);		
		$estilo_boton = 'style="background: none; ' .
		$estilo_boton = 'background-image: url('.$urlimagendeboton.'); ' .
		$estilo_boton =	'background-repeat: no-repeat; ' .
		$estilo_boton =	'width: '.$width_img.'px; ' .
		$estilo_boton =	'height: '.$height_img.'px; ' .
		$estilo_boton =	'margin: 20px auto;"';	

		// Asigno valores
		$conceptoBoton = get_the_title(get_sub_field('boton'));
		$importeBoton = get_field('precioBotonPagoCPT', get_sub_field('boton'));
		$descripcionFormaPagoBoton = get_field('descripcionBotonPagoCPT', get_sub_field('boton'));
		$boton = 
			'<form action="' . home_url() . '/pago/paso1" method="post"> ' .
		        '<input type="submit" name="boton" value="" '. $estilo_boton .'> ' .
		        '<input type="hidden" name="concepto" value="' . $conceptoBoton . '"> ' .
		        '<input type="hidden" name="importe" value="' . $importeBoton . '"> ' .
		        '<input type="hidden" name="descripcionformapago" value="' . $descripcionFormaPagoBoton . '"> ' .
		    '</form>';
		echo $boton;
		$conta++;
	}
?>

</div>


