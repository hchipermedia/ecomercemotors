<section class="MeteoroContact u-contenedor-completo">
    <div class="MeteoroContact-mapa"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7520.222885610886!2d-96.89151129999999!3d19.5368285!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2ses!4v1443484580086" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>  
    
    <div class="MeteoroContact-contenido u-contenedor">
        <div class="MeteoroContact-formulario">
            <?php echo do_shortcode('[contact-form-7 id="73" title="Default CF"]'); ?>
        </div>  
        
        <div class="MeteoroContact-datos">
            <h2>meteoroContact</h2>
            <p><i class="fa fa-map-marker"></i><?php the_field('direccionContacto', 'option'); ?></p>
            <p><i class="fa fa-mobile"></i><?php the_field('movilContacto', 'option'); ?></p>
            <p><i class="fa fa-phone"></i><?php the_field('telefonoContacto', 'option'); ?></p>
            <p><i class="fa fa-envelope"></i><?php the_field('correoContacto', 'option'); ?></p>
        </div>
    </div>
</section>