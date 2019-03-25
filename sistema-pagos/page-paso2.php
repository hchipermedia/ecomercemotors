<?php
/**
 * Template Name: Paso 2
 */

get_header(); ?>

   <section class="SistemaPagos u-contenedor">
      <ul class="SistemaPagos-breadcrumbs">
         <li><a href="#">Paso 1 - Ingresa tus datos</a></li>
         <li><a class="active"  href="#">Paso 2 - Revisión de compra</a></li>
         <li><a href="#">Paso 3 - Realiza tu pago</a></li>
         <li><a href="#">Paso 4 - Finalizar</a></li>
      </ul>
      <h1 class="SistemaPagos-title">Paso 2 - Verifica la información</h1>
      <?php //Se rompe el corazón de los crackers
      // if ($_SESSION['security_code_2j7hFmd9']) {
      //Se reciben y asignan variables

      if ( isset($_POST['boton']) ) {
         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $correo = $_POST['correo'];
         $concepto = $_POST['concepto'];
         $formapago = $_POST['formapago'];
         if ($formapago == 'contado') {
            $tipopago = 'contado';
            $importe = $_POST['importe'];
            $descripcionformapago = $_POST['descripcionformapago'];
         } else {
            $tipopago = 'suscripcion';
            $formapago = unserialize( $_POST['formapago'] );
            $periodicidad = $formapago['periodicidad'];
            $periodicidad2 = $formapago['periodicidad2'];
            $parcialidades = $formapago['parcialidades'];
            $importeparcialidad = $formapago['importeparcialidad'];
            $descripcionformapagoparcial = $formapago['descripcionformapagoparcial'];
         }
      } 
      ?>

      <form action="<?php echo home_url(); ?>/pago/paso3" method="POST" class="SistemaPagos-form">
         <div class="SistemaPagos-formColumn">
            <h2 class="SistemaPagos-formColumn-title">Tus datos</h2>
            <fieldset>
               <p>Nombre(s): <strong><?php echo $nombre; ?></strong></p>
               <p>Apellido: <strong><?php echo $apellido; ?></strong></p>
               <p>Tu correo: <strong><?php echo $correo; ?></strong></p>
            </fieldset>
         </div>
         
         <div class="SistemaPagos-formColumn">
            <h2 class="SistemaPagos-formColumn-title">Detalles de tu pedido</h2>
            <fieldset>
               <p>Concepto a pagar: <strong><?php echo $concepto; ?></strong></p>
               <?php if ($tipopago == 'contado') { ?>                  
                  <p><strong>Tu pagó será de contado</strong></p>
                  <p>Importe:<strong> $<?php echo $importe; ?> MNX</strong></p>
                  <p class="help">Nota: <?php echo $descripcionformapago; ?></p>              
               <?php }; ?>        
               <?php if ($tipopago == 'suscripcion') { ?>
                  <p><strong>Pagarás en periodicidades</strong></p>
                  <p>Detalles: <strong><?php echo $parcialidades; ?> pagos en total de $<?php echo $importeparcialidad; ?> MXN cada <?php echo $periodicidad . ' ' . $periodicidad2; ?></strong></p>
                  <p class="psh-descripcion">Nota: <?php echo $descripcionformapagoparcial; ?></p>
                  Total: $<?php echo $importeparcialidad * $parcialidades; ?> MXN</p>          
               <?php }; ?>
            </fieldset>

            <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
            <input type="hidden" name="apellido" value="<?php echo $apellido; ?>">
            <input type="hidden" name="correo" value="<?php echo $correo; ?>">
            <input type="hidden" name="concepto" value="<?php echo $concepto; ?>">
            <input type="hidden" name="tipopago" value="<?php echo $tipopago; ?>">

            <?php if ($formapago == 'contado') { ?>
               <input type="hidden" name="importe" value="<?php echo $importe; ?>">
               <input type="hidden" name="descripcionformapago" value="<?php echo $descripcionformapago; ?>">
            <?php } else { ?>
               <input type="hidden" name="importe" value="<?php echo $importeparcialidad; ?>">
               <input type="hidden" name="descripcionformapago" value="<?php echo $descripcionformapagoparcial; ?>">
               <input type="hidden" name="periodicidad" value="<?php echo $periodicidad; ?>">
               <input type="hidden" name="periodicidad2" value="<?php echo $periodicidad2; ?>">
               <input type="hidden" name="parcialidades" value="<?php echo $parcialidades; ?>">
            <?php } ?>
         </div>
         
         <div class="spacer"></div><!-- división -->
         
         <?php if ($tipopago == 'contado') { ?>
            <h2 class="SistemaPagos-formColumn-title">Elige la forma de pago</h2>
            <div class="SistemaPagos-formColumn">        
               <input type="submit" name="boton" value="Depósito en efectivo">
            </div>
            <div class="SistemaPagos-formColumn">
               <input type="submit" name="boton" value="Pagar en línea">
            </div>
         <?php } else { ?>
            <input type="submit" name="boton" value="Realizar pago">
         <?php } ?>
      </form>
   </section>
<?php get_footer(); ?>
