<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>

	<section class="u-contenedor">

		<?php if ( have_posts() ) : ?>

	        <section class="Articulos">            
				
				<?php
					/* Queue the first post, that way we know what author we're dealing with (if that is the case).
					 * We reset this later so we can run the loop properly with a call to rewind_posts().  */
					the_post();
				?>

				<h1 class="Articulos-titulo"><?php printf( __( 'Archivo del autor: %s', 'shbase' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>

				<?php
					/* Since we called the_post() above, we need to rewind the loop back to the beginning that way
					 * we can run the loop properly, in full. */
					rewind_posts();
				?>		

				<?php
				// If a user has filled out their description, show a bio on their entries.
				if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'shbase_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( __( 'Sobre %s', 'shbase' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
						</div><!-- #author-description	-->
					</div><!-- #author-info -->
				<?php endif; ?>
	
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