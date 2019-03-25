<?php
/**
 * The template for displaying Category Archive pages.
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
	                 <?php echo single_cat_title( '', false );?>
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

	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>
