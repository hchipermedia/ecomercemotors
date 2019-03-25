<?php
/* Footer
 ----------------------------------*/
?>

</main>

<footer class="Footer">	
    
    <section class="u-contenedor">
    	
    	<aside class="Footer-creditos">
    		<a class="Footer-firmaSH" href="http://www.solucioneshipermedia.com/">Soluciones Hipermedia | Desarrollo web</a>
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