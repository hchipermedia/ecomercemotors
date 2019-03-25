<?php
/**
 * Template Name: Procesa solicitud
 */

//Bloque de seguridad (en progreso)

//Genera número de orden aleatoreo
$id_compra = rand(10000000, 99999999);

//Se reciben y asignan variables
//if ( isset($_POST['boton']) ) {

	//Se rompe el corazón de los crackers
	//if (isset($_POST['boton'])) {
		
		//session_destroy(); //Nos evitamos problemas para recibir notificaciones de paypal
		
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$concepto = $_POST['concepto'];
		$tipopago = $_POST['tipopago']; //puede ser contado o suscripcion
		$importe = $_POST['importe'];

		$descripcionformapago = $_POST['descripcionformapago'];
		if ($tipopago == 'suscripcion') {
			$periodicidad = $_POST['periodicidad'];
			$periodicidad2 = $_POST['periodicidad2'];
			$parcialidades = $_POST['parcialidades'];
			
			switch ($periodicidad2) {
				case 'dia(as)' : $t3 = 'D';
				break;
				case 'semana(s)' : $t3 = 'W';
				break;
				case 'mes(es)' : $t3 = 'M';
				break;
				case 'año(s)' : $t3 = 'Y';
				break;	
			}
		}
	//}    
        
	if ($tipopago == 'contado') {

        if(get_field('spshActivarSandbox', 'option')) {
            $direccionPayPal = 'https://www.sandbox.paypal.com/cgi-bin/webscr?';
            $correoPayPal = get_field('spshSandboxCorreo', 'option');
        } else {
            $direccionPayPal = 'https://www.paypal.com/cgi-bin/webscr?';
            $correoPayPal = get_field('spshCorreoPayPal', 'option');
        }
		//Concatenamos la url para redirigir a paypal
		$redireccion = utf8_encode(
            $direccionPayPal .
            'business=' . $correoPayPal .
            '&cmd=_xclick' .
            '&item_name=' . utf8_decode($concepto) .
            '&amount=' . $importe .
            '&amp;currency_code=MXN' .
            '&image_url='.get_plantilla_url().'/images/logo.png' .
            '&lc=MX' .
            '&no_shipping=1' .
            '&return='.home_url().'/pago/graciaspago' .
            '&rm=2'.
            '&cbt=Regresar al sitio del vendedor' .
            '&cancel_return='.home_url().''.
            '&custom=' . $id_compra .
            '&email=' . $correo .
            '&first_name=' . utf8_decode($nombre) .
            '&last_name=' . utf8_decode($apellido) .
            '&notify_url='.home_url().'/ipn/' .
            '&return='.home_url().'/pago/gracias/' .
            '&charset=utf-8'
            );
		
		$redireccion_deposito = utf8_encode(
		home_url() . '/pago/deposito?' .
		'&concepto=' . utf8_decode($concepto) .
		'&idcompra=' . $id_compra .
		'&importe=' . $importe .
		'&descripcionformapago=' . utf8_decode($descripcionformapago) .
		'&nombre=' . utf8_decode($nombre) .
		'&apellido=' . utf8_decode($apellido) .
		'&correo=' . $correo );
		
		$redireccion_registrar_pago = utf8_encode(
		home_url() . '/pago/registrar-pago?' .
		'&nombre=' . utf8_decode($nombre) .
		'&apellido=' . utf8_decode($apellido) .
		'&correo=' . $correo .
		'&concepto=' . utf8_decode($concepto) .
		'&importe=' . $importe .
		'&amp;descripcionformapago=' . utf8_decode($descripcionformapago) .
		'&amp;registra=registra' );

		//Componemos el cuerpo del mensaje que se enviará al vendedor
		
		$cuerpo_mensaje_vendedor = '<table style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#403732;" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tbody>
        
            <!-- Encabezado del mail -->
            <tr>
                <td style="background-color:#F4F3ED;" align="center" valign="top">
                    <img src="' . $GLOBALS['url_instalacion'] . '/pago/admin/img/encabezado-correo.jpg" style="display: block;" height="160" width="600">
                </td>
            </tr>
        
            <!-- Mensaje para el vendedor -->
            <tr>
                <td style="background-color:#F4F3ED;" align="left" valign="top">
                    <table border="0" cellpadding="10" cellspacing="0" width="100%">
                    <tbody>
        
                        <tr>
                            <td align="left" valign="top">
                                <h2>Nuevo cliente interesado en comprar un producto o servicio</h2>
        
                                <p>Si el cliente no realiza su pago puedes realizar un seguimiento del mismo utilizando la siguiente información.</p>
                                
                                <h2>DATOS DEL CLIENTE</h2>
                                <p>
                                    <strong>Nombre: </strong>' . $nombre . '<br />
                                    <strong>Apellido: </strong>' . $apellido . '<br />
                                    <strong>Correo: </strong>' . $correo . '
                                </p>
                                
                                <h2>DATOS DE SU PEDIDO</h2>
                                <p>
                                    <strong>Concepto: </strong>' . $concepto . '<br />
                                    <strong>Tipo de pago: </strong>' . $tipopago . '<br />
                                    <strong>Importe: </strong> $' . $importe . ' MXN<br />
                                    <strong>Número de compra: </strong>' . $id_compra . '<br />
                                </p>
                                
                                <p></p>
                            </td>
                        </tr>
        
                    </tbody>
                    </table>
                </td>
            </tr>
        
           <!-- Pié de página del correo -->
            <tr>
                <td style="background-color:#3F3631; color:#fff" align="left" valign="top">
                    <table border="0" cellpadding="15" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <td style="color:#fff;" align="left" valign="top">
                            <strong><span>' . $GLOBALS['nombre_comercio'] . '</span><br>
                            <span>' . $GLOBALS['direccion_comercio'] . '</span><br>
                            <span>Email: <a style="color:#fff; text-decoration: none;" href="mailto:' . $GLOBALS['correo_contacto_comercio'] . '" style="color: #fff; text-decoration: none;">' . $GLOBALS['correo_contacto_comercio'] . '</a></span><br>
                            <span>Website: <a style="color:#fff; text-decoration: none;" href="http://' . $GLOBALS['sitio_comercio'] . '/" target="_blank" style="color: #fff; text-decoration: none;">' . $GLOBALS['sitio_comercio'] . '</a></span></strong>
                        </td>
                        <td style="color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:13px;" align="right" valign="top">
                            <p>
                                 <strong>Visitanos en Facebook</strong>
                            </p>
                             <a href="' . $GLOBALS['fb_fanpage_comercio'] . '"><img src="' . $GLOBALS['url_instalacion'] . '/pago/admin/img/logo-facebook.png"></a>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </td>
            </tr>
        
        </tbody>
        </table>';

		//Componemos el cuerpo del mensaje que se enviará al cliente

		$cuerpo_mensaje_cliente = '<table style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#403732;" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tbody>
        
            <!-- Encabezado del mail -->
            <tr>
                <td style="background-color:#F4F3ED;" align="center" valign="top">
                    <img src="' . $GLOBALS['url_instalacion'] . '/pago/admin/img/encabezado-correo.jpg" style="display: block;" height="160" width="600">
                </td>
            </tr>
        
            <!-- Mensaje para el comprador -->
            <tr>
                <td style="background-color:#F4F3ED;" align="left" valign="top">
                    <table border="0" cellpadding="10" cellspacing="0" width="100%">
                    <tbody>
        
                        <tr>
                            <td align="left" valign="top">
                                <h2>Pago con depósito en efectivo</h2>
        
                                <p>Realiza tu depósito utilizando la siguiente información.</p>
                                
                                <h2>DATOS DE DEPÓSITO</h2>
    							<p>
									BANCO: <strong>' . $banco . '</strong><br />
									CUENTA: <strong>' . $cuenta . '</strong><br />
									CLABE: <strong>' . $clabe . '</strong><br />
									TITULAR: <strong>' . $titular . '</strong>
								</p>
                                
                                <h2>DETALLES DE TU PEDIDO</h2>
                                <p>
									Concepto a pagar: <strong>' . $concepto . '</strong><br />
									Número de compra: <strong>' . $id_compra . '</strong><br />
                                </p>
                                
                                <h2>DETALLES DE TU FORMA DE PAGO</h2>
                                <p>
									<strong>Tu pago será de contado</strong><br />
									Importe: <strong>$' . $importe . ' MXN</strong><br />
									Nota: <strong>' . $descripcionformapago . ' MXN</strong><br />
                                </p>
								
                                <h2>SIGUIENTE PASO</h2>
								
								<table border="0" cellpadding="10" cellspacing="0" width="100%">
									<tbody>
										<tr>
											<td>
												<a href="' . $redireccion_deposito . '&print=print"><h2>IMPRIME ESTE MAIL</h2></a>
											</td>
											<td>
                                				<a href="' . $redireccion . '"><h2>PAGAR EN LÍNEA</h2></a>
											</td>
											<td>
                                				<a href="' . $redireccion_registrar_pago . '"><h2>REGISTRA TU PAGO</h2></a>
											</td>
										</tr>
									</tbody>
								</table>
                                
                                <p></p>
                            </td>
                        </tr>
        
                    </tbody>
                    </table>
                </td>
            </tr>
        
            <!-- Pié de página del correo -->
            <tr>
                <td style="background-color:#3F3631; color:#fff" align="left" valign="top">
                    <table border="0" cellpadding="15" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <td style="color:#fff;" align="left" valign="top">
                            <strong><span>' . $GLOBALS['nombre_comercio'] . '</span><br>
                            <span>' . $GLOBALS['direccion_comercio'] . '</span><br>
                            <span>Email: <a style="color:#fff; text-decoration: none;" href="mailto:' . $GLOBALS['correo_contacto_comercio'] . '" style="color: #fff; text-decoration: none;">' . $GLOBALS['correo_contacto_comercio'] . '</a></span><br>
                            <span>Website: <a style="color:#fff; text-decoration: none;" href="http://' . $GLOBALS['sitio_comercio'] . '/" target="_blank" style="color: #fff; text-decoration: none;">' . $GLOBALS['sitio_comercio'] . '</a></span></strong>
                        </td>
                        <td style="color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:13px;" align="right" valign="top">
                            <p>
                                 <strong>Visitanos en Facebook</strong>
                            </p>
                             <a href="' . $GLOBALS['fb_fanpage_comercio'] . '"><img src="' . $GLOBALS['url_instalacion'] . '/pago/admin/img/logo-facebook.png"></a>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </td>
            </tr>
        
        </tbody>
        </table>';
		
		//Redirigimos a paypal y enviamos el formulario via GET luego de enviar el correo
		//header( "Location: " . $redireccion );
	
	}
	
	if ($tipopago == 'suscripcion') {

		//Concatenamos la url para redirigir a paypal
		$redireccion = utf8_encode(
		//'http://localhost/pago/graciaspago.php' .
		'https://www.paypal.com/cgi-bin/webscr?business=' . $GLOBALS['customerpaypalemail'] .
		'&cmd=_xclick-subscriptions&item_name=' . $concepto .
		'&item_number=' . $periodicidad2 .
		'&amp;currency_code=MXN&a3=' . $importe .
		'&p3=' .$periodicidad .
		'&t3=' . $t3 .
		'&src=1&srt=' . $parcialidades .
		'&image_url=' . $GLOBALS['customerpaypallogo'] .
		'&lc=MX&no_shipping=1&return=' . $GLOBALS['paypalreturnurl'] .
		'&rm=' . $GLOBALS['paypalreturnmethod'] .
		'&cbt=' . $GLOBALS['paypalreturnbuttontext'] .
		'&cancel_return=' .$GLOBALS['paypalcancelreturn'] .
		'&custom=' . $id_compra .
		'&email=' . $correo .
		'&first_name=' . $nombre .
		'&last_name=' . $apellido .
		'&charset=utf-8');
		//'&charset=utf-8&submit.x=64&submit.y=20');
		
		//Componemos el cuerpo del mensaje que se enviará al vendedor
		
		$cuerpo_mensaje_vendedor = '<table style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#333;" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tbody>
        
            <!-- Encabezado del mail -->
            <tr>
                <td style="background-color:#fff;" align="center" valign="top">
                    <img src="' . $GLOBALS['url_instalacion'] . '/pago/admin/img/encabezado-correo.jpg" style="display: block;" height="160" width="600">
                </td>
            </tr>
        
            <!-- Mensaje para el vendedor -->
            <tr>
                <td style="background-color:#fff;" align="left" valign="top">
                    <table border="0" cellpadding="10" cellspacing="0" width="100%">
                    <tbody>
        
                        <tr>
                            <td align="left" valign="top">
                                <h2>Nuevo cliente interesado en comprar un producto o servicio</h2>
        
                                <p>Si el cliente no realiza su pago puedes realizar un seguimiento del mismo utilizando la siguiente información.</p>
                                
                                <h2>DATOS DEL CLIENTE</h2>
                                <p>
                                    <strong>Nombre: </strong>'  . $nombre . '<br />
                                    <strong>Apellido: </strong>' . $apellido . '<br />
                                    <strong>Correo: </strong>' . $correo . '
                                </p>
                                
                                <h2>DATOS DE SU PEDIDO</h2>
                                <p>
                                    <strong>Concepto: </strong>' . $concepto . '<br />
                                    <strong>Tipo de pago: </strong>' . $tipopago . '<br />
                                    <strong>Número de orden: </strong>' . $id_compra . '<br />
                                </p>
                                
                                <h2>DETALLES DEL PAGO EN PARCIALIDADES</h2>
                                <p>                        
                                
                                    <strong>Detalles: </strong>' . $parcialidades . ' pagos en total de $' . $importe . ' cada ' . $periodicidad . ' ' . $periodicidad2 . '<br />
                                    <strong>Total: </strong> $' . $importe * $parcialidades . ' MXN<br />
                                </p>
                                
                                <h2>LIGA DIRECTA PARA REALIZAR SU PEDIDO</h2>
                                <p>
                                    <strong>URL :</strong><a href="' . $redireccion . '">' . $redireccion . '</a><br />
                                </p>
                                
                                <p></p>
                            </td>
                        </tr>
        
                    </tbody>
                    </table>
                </td>
            </tr>
        
            <!-- Pié de página del correo -->
            <tr>
                <td style="background-color:#000;" align="left" valign="top">
                    <table border="0" cellpadding="15" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <td style="color:#222;" align="left" valign="top">
                            <strong><span>' . $GLOBALS['nombre_comercio'] . '</span><br>
                            <span>' . $GLOBALS['direccion_comercio'] . '</span><br>
                            <span>Teléfono: </span>' . $GLOBALS['telefono_comercio'] . '<br>
                            <span>Email: <a href="mailto:' . $GLOBALS['correo_contacto_comercio'] . '" style="color: #222; text-decoration: none;">' . $GLOBALS['correo_contacto_comercio'] . '</a></span><br>
                            <span>Website: <a href="http://' . $GLOBALS['sitio_comercio'] . '/" target="_blank" style="color: #222; text-decoration: none;">' . $GLOBALS['sitio_comercio'] . '</a></span></strong>
                        </td>
                        <td style="color:#222; font-family:Arial, Helvetica, sans-serif; font-size:13px;" align="right" valign="top">
                            <p>
                                 <strong>Visitanos en Facebook</strong>
                            </p>
                             <a href="' . $GLOBALS['fb_fanpage_comercio'] . '"><img src="' . $GLOBALS['url_instalacion'] . '/pago/admin/img/logo-facebook.png"></a>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </td>
            </tr>
        
        </tbody>
        </table>';
		
 
	};
	
	if ( isset($_POST['boton']) ) {

		require 'PHPMailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'ssl://email-smtp.us-east-1.amazonaws.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $GLOBALS['ses_smtp_username'];                 // SMTP username
		$mail->Password = $GLOBALS['ses_smtp_password'];                           // SMTP password
		$mail->SMTPSecure = 'ssl';                           	// Enable encryption, 'ssl' or 'tls' also accepted
		$mail->Port = '465';									//Select port to stablish connection , 'ssl' (465) or 'tls' (587).
		
		$mail->From = $GLOBALS['ses_verified_sender'];
		$mail->FromName = 'Sistema de pagos';
		$mail->addAddress($GLOBALS['correo_contacto_comercio']);     // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo($GLOBALS['correo_contacto_comercio']);
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
		
		//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		//$mail->AddAttachment("admin/img/encabezado-correo.jpg");      // attachment
		$mail->isHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = 'Datos de nuevo cliente interesado - '. $id_compra;
		$mail->Body    = $cuerpo_mensaje_vendedor;
		//$mail->AltBody = 'Cuerpo del mensaje ¡Ñú!';
		//$mail->Encoding = 'base64';
		$mail->CharSet = 'utf8';								//Defines charset to utf8 to display latin characters
		
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			//echo 'Message has been sent';
		}
		
		//Send email to customer
		if ($tipopago == 'contado') {
			$mail = new PHPMailer;
			
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'ssl://email-smtp.us-east-1.amazonaws.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = $GLOBALS['ses_smtp_username'];                 // SMTP username
			$mail->Password = $GLOBALS['ses_smtp_password'];                           // SMTP password
			$mail->SMTPSecure = 'ssl';                           	// Enable encryption, 'ssl' or 'tls' also accepted
			$mail->Port = '465';									//Select port to stablish connection , 'ssl' (465) or 'tls' (587).
			
			$mail->From = $GLOBALS['ses_verified_sender'];
			$mail->FromName = $nombre_comercio;
			$mail->addAddress($correo);     // Add a recipient
			//$mail->addAddress('ellen@example.com');               // Name is optional
			$mail->addReplyTo($GLOBALS['correo_contacto_comercio']);
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');
			
			//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			//$mail->AddAttachment("admin/img/encabezado-correo.jpg");      // attachment
			$mail->isHTML(true);                                  // Set email format to HTML
			
			$mail->Subject = 'Datos de depósito bancario - compra No. '. $id_compra;
			$mail->Body    = $cuerpo_mensaje_cliente;
			//$mail->AltBody = 'Cuerpo del mensaje ¡Ñú!';
			//$mail->Encoding = 'base64';
			$mail->CharSet = 'utf8';								//Defines charset to utf8 to display latin characters
			
			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				//echo 'Message has been sent';
			}
		}

		//VÍA SERVIDOR DEL CLIENTE
		/*
		$headers = 'From: Sistema de pagos <' . $GLOBALS['correo_contacto_comercio'] . '>\r\n';
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";*/

		//mail($to, $subject, $message, $headers);
		
		//REDIRIGIMOS A PAYPAL DESPUES DE ENVIAR EL CORREO
		//echo $redireccion;
		$redireccion = html_entity_decode( $redireccion );
		if ($_POST['boton'] == 'Depósito en efectivo') {
			header( "Location: " . $redireccion_deposito );
		} else {
			header( "Location: " . $redireccion );
		}
	}

//} else {
	//session_destroy();
	// require_once('header.php'); ?>
	
    <!-- No deberías de estar aquí. Si llegaste por error, te sugerimos que regreses al <a href="<?php echo $GLOBALS['url_principal']; ?>">inicio de nuestro sitio web</a> -->

<!-- }  -->
?>