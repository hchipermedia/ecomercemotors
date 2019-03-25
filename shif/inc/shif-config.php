<?php

/***** BOLETINES *****/

$shifNewsletterService = 'sendy';

/* CONFIGURACIÓN DE MAILCHIMP */
$shiftMailchimpConfig = array(
							// API key de MailChimp
							'mailchimp-api-key' => '169f42d73a9113a45ea23a8969f5718e-us11',
							// ID de la lista
							'mailchimp-list-id' => '3f88bb332c',
							// Campos de la lista
							'mailchimp-list-fields' => array(
															'email_address' => $_POST['shif-email'],
															'status'        => 'subscribed',
															'merge_fields'  => array(
																					'FNAME'     => $_POST['shif-name'],
																					'PHONE'     => $_POST['shif-phone']
																					)
															)
							);
/* FIN CONFIGURACIÓN DE MAILCHIMP */

/* CONFIGURACIÓN DE SENDY */
$shifSendyConfig = array(
						// Ruta de instalación de Sendy
						'sendy-installation-url' => 'http://www.solucioneshipermedia.com/sendy',
						// Campos de la lista
						'sendy-list-fields' => array(
								    				'name' => $_POST['shif-name'],
								    				'email' => $_POST['shif-email'],
								    				'Phone' => $_POST['shif-phone'],
								    				'list' => '763owtIofYCNS9K4763CFOiF5A',
								    				'boolean' => 'true'
								    				)
						);
/* FIN CONFIGURACIÓN DE SENDY */

/***** FIN BOLETINES *****/



/***** SERVICIO ENVÍO DE CORREO *****/

/* Asigna a la variable $emailService 'server' o 'ses' para enviar correos vía servidor o AWS */
$shifEmailService = 'ses';

/* CONFIGURACIÓN DE AMAZON SES */
$shifSESConfig = array(
					'ses-email-from' => 'contacto@guillermorivera.com.mx',
					'ses-name-from' => 'Guillermo Rivera',
					'ses-user' => 'AKIAJSH2SYLQ65XDUEHQ',
					'ses-psw' => 'AkvrX4FesSaLVIRPPCBQjG75KonoF9YH7gIesCGNcjL8',
					'ses-host' => 'email-smtp.us-east-1.amazonaws.com'
					);
/* FIN CONFIGURACIÓN DE AMAZON SES */

/* CONFIGURACIÓN DE ENVÍO SERVIDOR */
$shifServerConfig = array(
					'server-email-from' => 'hola@shipermedia.in',
					'server-name-from' => 'Soluciones Hipermedia',
					);
/* FIN CONFIGURACIÓN DE AMAZON SES */

/* FIN CONFIGURACIÓN DE ENVÍO SERVIDOR */



/***** CONFIGURACIÓN CORREO SALIENTE *****/

// Correo que se envía al administrador
$shifOwnerEmailConfig = array(
							'subjet' => 'Mensaje de prueba Shift a propietario',
							'message' => 'owner-default.php',
							'recipients-info' => array(
												    array('monitoreohipermedia@gmail.com', 'Monitoreo Soluciones Hipermedia'),
												    array('ctohipermedia@gmail.com' , 'Carlos Ochoa'),
												)
							);

// Correo que se envía al cliente (usuario)
$shifUserEmailConfig = array(
							'subjet' => 'Mensaje de prueba Shift a usuario',
							'message' => 'user-default.php',
							'recipient-address' => $_POST['shif-email'],
							'recipient-name' => $_POST['shif-name']
							// 'reply-to' => ''
							);

// Configuración global
$shifEmailGlobalInfo = array(
							'title' => 'Plantilla default de correo electrónico',
							'address' => 'Dirección del negocio/empresa',
							'phone' => 'Número de teléfono',
							'email' => 'Correo de contacto',
							'website' => 'Sitio web',
							);


/***** FIN CONFIGURACIÓN CORREO SALIENTE *****/


