<?php
/* Footer
 ----------------------------------*/
?>

</main>

 <footer class="Footer">	
    <div class="footer-container">
    	<div class="row-footer">
    		<div class="footer-columna">
                <h3>Suscribete</h3>
                <form action="" method="POST">
                    <input type="email" placeholder="Escriba su correo" name="correo">
                    <input type="submit" value="Suscribirse" name="suscribirse" id="button">      
                    <!--<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'activo', 'menu_id' => 'header-menu') ); ?>-->
                </form>
    		</div>
    		<div class="footer-columna">
                <h3>Dirección</h3>
                <p>
                    <span class="fa fa-map-marker"></span> 
                    Xalapa veracruz.
                </p>
                <p>
                   <span class="fa fa-phone"></span>
                   2351044070 
                </p>
                <p>
                    <span class="fa fa-envelope"></span>
                    hola@hipermedia.in
                </p>
                
            </div>
            <div class="footer-columna">
                <h3>Sobre Nosotros</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet ligula justo, at vulputate odio malesuada et.</p>
            </div>
    	</div>
    	<aside class="Footer-creditos">
    		<a class="Footer-firmaSH" href="http://www.solucioneshipermedia.com/">Soluciones Hipermedia | Motociclismo</a>
    	</aside>
    </div>     
</footer>

<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>

<!-- JS personalizados del tema -->
<?php waypoints(); // Librería que detecta puntos en el scroll de pantalla ?>
<?php bootstrap(); // framework Bootsrap ?>
<?php themejs(); // Los scripts personalizados del tema ?>


<?php  
//Check subscriber count for the list/compruebe el numero de suscriptores para la lista
if (isset($_POST['suscribirse'])) {
$postdata = http_build_query(  //
    array(
        'api_key' => 'cev5oSyerfHQqbGvYcfQ',
        'email' => $_POST['correo'],
        'list_id' => 'qzZSHNyvYQBW892wkXpAxNdDg'
    )
);
$opts = array('http' => array('method'  => 'POST', 'header'  => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
$context  = stream_context_create($opts);
$result = file_get_contents('http://sobrevilla.mx/sendy/api/subscribers/subscription-status.php', false, $context);

if($result=='Subscribed') { //si respode que esta suscrito 
    $postdata2 = http_build_query(
        array(
            'api_key' => 'cev5oSyerfHQqbGvYcfQ',
            'email' => $_POST['correo'],
            'list_id' => 'zZSHNyvYQBW892wkXpAxNdDg',
            'boolean' => 'true'
        )
    );
    $opts = array('http' => array('method'  => 'POST', 'header'  => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata2));
    $context  = stream_context_create($opts);
    $result = file_get_contents('http://sobrevilla.mx/sendy/api/subscribers/delete.php', false, $context);
    if($result==1) {
                //Subscribe
                $postdata = http_build_query(
                array(
                    'email' => $_POST['correo'],
                    'list' => 'zZSHNyvYQBW892wkXpAxNdDg',
                    'boolean' => 'true'
                )
                );
                $opts = array('http' => array('method'  => 'POST', 'header'  => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
                $context  = stream_context_create($opts);
                $result = file_get_contents('http://sobrevilla.mx/sendy/subscribe', false, $context);
            }
            
        } else {

            //Subscribe
            $postdata = http_build_query(
            array(
                'email' => $_POST['correo'],
                'list' => 'zZSHNyvYQBW892wkXpAxNdDg',
                'boolean' => 'true'
                )
            );
            $opts = array('http' => array('method'  => 'POST', 'header'  => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
            $context  = stream_context_create($opts);
            $result = file_get_contents('http://sobrevilla.mx/sendy/subscribe', false, $context);
}
}
?>

<!-- WP Footer -->
<?php wp_footer(); ?>
</body>
</html>