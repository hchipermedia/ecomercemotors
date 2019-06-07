<?php
/* Footer
 ----------------------------------*/
?>

</main>
<hr color="white" size=1 width="999">
 <footer class="Footer">	
    
    <section class="u-contenedor">
    	<div class="row-footer">
    		<div class="col">
                
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'activo', 'menu_id' => 'header-menu') ); ?>
    			
    		</div>
    		<div class="col-2"><?php primalSocialShare(); ?></div>
    	</div>
    	<aside class="Footer-creditos">
    		<a class="Footer-firmaSH" href="http://www.solucioneshipermedia.com/">Soluciones Hipermedia | Motociclismo</a>
    	</aside>
    </section>     

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