
<section class="contacto u-contenedor">
    <article class="contenido-contacto">
        <!-- Datos de contacto -->  
        <div class="datos">
            <h3><i class="fa fa-map-marker"></i>Dirección</h3>
            <p><?php the_field('direccionContacto', 'option'); ?></p>
            <h3><i class="fa fa-mobile"></i>Celular</h3>
            <p><?php the_field('movilContacto', 'option'); ?></p>
            <h3><i class="fa fa-phone"></i>Teléfono</h3>
            <p><?php the_field('telefonoContacto', 'option'); ?></p>
            <h3><i class="fa fa-envelope"></i>Email</h3>
            <p><?php the_field('correoContacto', 'option'); ?></p>
            <!-- Facebook -->
            <a href="<?php the_field('facebookContacto', 'option'); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
            <!-- Twitter -->
            <a href="<?php the_field('twitterContacto', 'option'); ?>" title="Twitter" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>
            <!-- Youtube -->
            <a href="<?php the_field('googleContacto', 'option'); ?>"title="Youtube" target="_blank"><i class="fa fa-youtube-square fa-3x"></i></a>
            <!-- Google Plus -->
            <a href="<?php the_field('youtubeContacto', 'option'); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a>
        </div><!-- #social-contacto --> 
                
        <div class="formulario">
            <h2 class="escribenos">
                completeContact
            </h2>
            <?php echo do_shortcode('[contact-form-7 id="73" title="Default CF"]'); ?>
        </div><!-- .entry-content -->  
        
        <aside class="mapa"> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.231565114685!2d-96.89147209999997!3d19.531669500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85db32270aade5ef%3A0x7a7a804a52710b4e!2sChopin%2C+Indeco+Animas%2C+91190+Xalapa+Enr%C3%ADquez%2C+Ver.!5e0!3m2!1ses-419!2smx!4v1443036826093" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                                              
        </aside>  
        <?php anliSocialShare(); ?>
    </article><!-- .default-page ?> -->
</section>