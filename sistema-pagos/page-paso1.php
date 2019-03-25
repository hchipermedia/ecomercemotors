<?php
/**
 * Template Name: Paso 1
 */

get_header(); ?>

   <?php //Se reciben y asignan variables
   
   if ( isset($_POST['boton']) ) {
      $boton = true;
      $concepto = $_POST['concepto'];
      $importe = $_POST['importe'];
      $descripcionformapago = $_POST['descripcionformapago'];
      $parcialidades = '';
      
      if ( isset( $_POST['parcialidades_guardadas'] ) ) {
         $parcialidades_guardadas = unserialize( $_POST['parcialidades_guardadas'] );
      }
   }
   
   if ( isset($_GET['boton']) ) {
      $boton = true;
      $concepto = $_GET['concepto'];
      $importe = $_GET['importe'];
      $descripcionformapago = $_GET['descripcionformapago'];
      $parcialidades = '';

      if ( isset( $_GET['parcialidades_guardadas'] ) ) {
         $parcialidades_guardadas = unserialize( rawurldecode( $_GET['parcialidades_guardadas'] ) );
      }
   }

   // if ( $boton ) {
      //Bloque de seguridad (en progreso)
      // $_SESSION['security_code_2j7hFmd9']  = true;
   ?>

   <section class="SistemaPagos u-contenedor">
      <ul class="SistemaPagos-breadcrumbs">
         <li><a class="active" href="#">Paso 1 - Ingresa tus datos</a></li>
         <li><a href="#">Paso 2 - Revisión de compra</a></li>
         <li><a href="#">Paso 3 - Realiza tu pago</a></li>
         <li><a href="#">Paso 4 - Finalizar</a></li>
      </ul>
      <h1 class="SistemaPagos-title">Paso 1 - Ingresa tus datos</h1>
      <form action="<?php echo home_url(); ?>/pago/paso2" method="POST" class="SistemaPagos-form">
         <div class="SistemaPagos-formColumn">
            <h2 class="SistemaPagos-formColumn-title">Detalles de tu pedido</h2>
            <fieldset>
               <p>Concepto a pagar: <strong><?php echo $concepto; ?></strong></p>
               <?php if ( !isset( $_POST['parcialidades_guardadas'] ) OR !isset( $_GET['parcialidades_guardadas'] ) ) { ?>
                  <p>Importe: <strong>$<?php echo $importe; ?> MXN </strong></p>
                  <p class="help"><?php echo $descripcionformapago; ?></p>
               <?php }?>
           </fieldset> 
         </div>
         <div class="SistemaPagos-formColumn">
            <h2 class="SistemaPagos-formColumn-title">Ingresa tus datos</h2>
            <label for="nombre">Nombre(s)</label>
            <input type="text" name="nombre" placeholder="Escribe tu nombre" value="" required />
            <label for="apellido">Apellido(s)</label>
            <input type="text" name="apellido" placeholder="Escribe tu apellido" value="" required/>
            <label for="correo">Correo electrónico</label>
            <input type="email" name="correo" placeholder="ejemplo@ejemplo.com" value="" required/>
         </div>
         <?php if ( isset( $_POST['parcialidades_guardadas'] ) OR isset( $_GET['parcialidades_guardadas'] )) { ?>
            <div class="spacer"></div><!-- división -->
               <h2 class="seccion-name">¿Cómo te gustaría pagar?</h2>
               <label>
                  <input type="radio" name="formapago" value="contado" required /><strong>De contado: $<?php echo $importe; ?></strong>
               </label>
               <p class="psh-descripcion"><?php echo $descripcionformapago; ?></p>
               <h3>Pago en parcialidades</h3>
               <?php $contador = 1 ; ?>
               <?php foreach ( $parcialidades_guardadas as $parcialidad) { ?>
                  <?php $parcialidadserializada = serialize( $parcialidad ); ?>
                  <label>
                      <input type="radio" name="formapago" value='<?php echo $parcialidadserializada; ?>' /><?php echo $parcialidad['parcialidades']; ?><strong> pagos de $<?php echo $parcialidad['importeparcialidad']; ?></strong>
                  </label>
                  <p class="psh-descripcion">
                     <?php echo $parcialidad['parcialidades']; ?> pagos de $<?php echo $parcialidad['importeparcialidad']; ?> MXN cada <?php echo $parcialidad['periodicidad'] . ' ' . $parcialidad['periodicidad2']; ?><br />
                     <?php echo $parcialidad['descripcionformapagoparcial']; ?>
                  </p>
               <?php } ?>
         <?php } ?>
         <!--El número de transacción ayudará a asegurar el proceso de pago guardandolo en una sesión y comparandolo en siguiente paso con el valor recuperado del post-->
         <input type="hidden" name="concepto" value="<?php echo $concepto; ?>">
         <input type="hidden" name="importe" value="<?php echo $importe; ?>">
         <input type="hidden" name="descripcionformapago" value="<?php echo $descripcionformapago; ?>">
         <?php if ( !isset( $_POST['parcialidades_guardadas'] ) && !isset( $_GET['parcialidades_guardadas'] ) ) { ?>
            <input type="hidden" name="formapago" value="contado">
         <?php } ?>
         <input type="hidden" name="transaccion" value="">
         <div class="spacer"></div><!-- división -->
         <input type="submit" name="boton" value="Continuar">
      </form>
   </section>
<?php get_footer(); ?>
