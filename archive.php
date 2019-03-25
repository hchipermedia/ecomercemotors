<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>

<section class="u-contenedor">

	<?php if ( have_posts() ) : ?>

        <section class="Articulos">            

            <!-- Título -->
            <h1 class="Articulos-titulo">
                <?php if ( is_day() ) : ?>
                    <?php printf( __( 'Archivo del día: %s', 'shbase' ), '<span>' . get_the_date() . '</span>' ); ?>
                <?php elseif ( is_month() ) : ?>
                    <?php printf( __( 'Archivo del mes: %s', 'shbase' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'shbase' ) ) . '</span>' ); ?>
                <?php elseif ( is_year() ) : ?>
                    <?php printf( __( 'Archivo del año: %s', 'shbase' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'shbase' ) ) . '</span>' ); ?>
                <?php else : ?>
                    <?php _e( 'Archivo', 'shbase' ); ?>
                <?php endif; ?>
            </h1>		
    		<!-- Artículos -->
            <?php while ( have_posts() ) : the_post(); ?>
                
                <?php get_template_part( 'content', get_post_format() ); ?>
      
            <?php endwhile; ?>
      
       	    <?php the_numbered_nav(); ?>

        </section>

    <?php else : ?>
        
        <article class="u-contenido error404"> 
            
            <h1 class="Articulos-titulo">Página no encontrada</h1>            
            <p>Parece que la página que búscas no existe. ¿Por qué no pruebas usar el buscador que aprece a continuación para encontrar el contenido que deseas? <strong>¡Suerte!</strong></p>
            <?php get_search_form(); ?>
        
        </article>
  
    <?php endif; ?>
    
    <?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>