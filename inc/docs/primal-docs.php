<?php
/**
 * DOCUMENTOS
 *
 *
 *
 *
 */
?>

<!-- DOCUMENTOS -->
<section class="documentos u-contenedor">
    <h2>primalDocs</h2>
    <?php while ( have_rows('documento', 'option') ) : the_row(); ?>
        <div class="bloque-documento">
			<?php // elige el icono para el tipo de documento 
            $doc_type = get_sub_field('tipo', 'option'); 
            switch ($doc_type) { 
                case 'word': $tipo = 'fa fa-file-word-o'; break;
                case 'excel': $tipo = 'fa fa-file-excel-o'; break;
                case 'powerpoint': $tipo = 'fa fa-file-powerpoint-o'; break;
                case 'pdf': $tipo = 'fa fa-file-pdf-o'; break;
                case 'audio': $tipo = 'fa fa-file-audio-o'; break;
                case 'imagen': $tipo = 'fa fa-file-image-o'; break;
                case 'video': $tipo = 'fa fa-file-video-o'; break;
                case 'texto': $tipo = 'fa fa-file-text-o'; break;
                default: $tipo = 'fa-file';
            } ?>
            <h2> <i class="fa <?php echo $tipo; ?>"></i>
            	<?php the_sub_field('titulo', 'option'); ?>                	
            </h2>
            <p class="descripcion-documento">
              	<?php the_sub_field('descripcion', 'option'); ?>
            </p>
            <a class="descargar-documento" target="_blank" href="<?php the_sub_field('file', 'option'); ?>" rel="<?php the_sub_field('titulo', 'option'); ?>">
              	<i class="fa fa-cloud-download fa-1x"></i> descargar
            </a>
        </div>
    <?php endwhile; ?>
</section>		
