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
                <input type="email" placeholder="Escriba su correo">
                <input type="submit" value="Suscribirse">      
                <!--<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'activo', 'menu_id' => 'header-menu') ); ?>-->
    		</div>
    		<div class="footer-columna">
                <h3>Direccion</h3>
                <span class="fa fa-map-marker"><p>Xalapa Ver.</p></span>
                <span class="fa fa-phone"><p>2281225645</p></span>
                <span class="fa fa-envelope"><p>hola@hipermedia.in</p></span>
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

<!-- WP Footer -->
<?php wp_footer(); ?>
</body>
</html>