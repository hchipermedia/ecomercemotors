<?php
/**
 * Template Name: Depósito
 */

get_header(); ?>

  <section class="SistemaPagos u-contenedor">

    <script>
    function target_popup(form) {
        window.open('', 'formpopup', 'width=500,height=600,resizeable,scrollbars');
        form.target = 'formpopup';
    }
    </script>

     <ul class="SistemaPagos-breadcrumbs">
        <li><a href="#">Paso 1 - Ingresa tus datos</a></li>
        <li><a href="#">Paso 2 - Revisión de compra</a></li>
        <li><a class="active" href="#">Paso 3 - Realiza tu pago</a></li>
        <li><a href="#">Paso 4 - Finalizar</a></li>
     </ul>

     <h1 class="SistemaPagos-title">Paso 3 - Realiza tu depósito</h1>

     <?php //Se rompe el corazón de los crackers

     // if ($_SESSION['security_code_2j7hFmd9']) {

        //Se reciben y asignan variables

        if ( isset($_GET) ) {
           $concepto = $_GET['concepto'];
           $importe = $_GET['importe'];
           $descripcionformapago = $_GET['descripcionformapago'];
           $id_compra = $_GET['idcompra'];
        } ?>

     <form onsubmit="target_popup(this)" action="<?php echo home_url('/pago/ficha-deposito'); ?>" method="POST" class="SistemaPagos-form">
     <div class="SistemaPagos-formColumn">
        <h2 class="SistemaPagos-formColumn-title">Datos de depósito</h2>
        <fieldset>
           <p>BANCO: <strong><?php echo $banco; ?></strong></p>
           <p>CUENTA: <strong><?php echo $cuenta; ?></strong></p>
           <p>CLABE: <strong><?php echo $clabe; ?></strong></p>
           <p>TITULAR: <strong><?php echo $titular; ?></strong></p>
        </fieldset>
         </div>
        <div class="SistemaPagos-formColumn">
        <h2 class="SistemaPagos-formColumn-title">Detalles de tu pedido</h2>
        <fieldset>
            <p>Concepto a pagar: <strong><?php echo $concepto; ?></strong></p>
            <input type="hidden" name="concepto" value="<?php echo $concepto; ?>">
            <p>ID de compra: <strong><?php echo $id_compra; ?></strong></p>
            <p><strong>Tu pagó será de contado</strong></p>
             <p>Importe:<strong> $<?php echo $importe; ?> MNX</strong></p>
            <input type="hidden" name="importe" value="<?php echo $importe; ?>">
             <p class="help">Nota: <?php echo $descripcionformapago; ?></p>
            <input type="hidden" name="descripcion" value="<?php echo $descripcionformapago; ?>">
        </fieldset>
         </div>

        <div>
           <input type="submit" name="imprimir_ficha_deposito" value="Imprimir ficha de depósito">
        </div>
     </form>
  </section>

<?php get_footer(); ?>
