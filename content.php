<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */
?>

<article class="ArticuloH">
    
    <!-- Imagen -->
    <?php $tamañoContenedor = "is-full"; ?>
    <?php if ( has_post_thumbnail() ) { ?>
        <figure class="ArticuloH-thumbnail">
            <?php the_post_thumbnail('thumbnail'); ?>
        </figure>
        <?php $tamañoContenedor = "is-shared" ?>
    <?php } ?>
    <!-- Contenido -->
    <div class="ArticuloH-contenido <?php print($tamañoContenedor); ?>">
        <header>
            <h1 class="ArticuloH-titulo">
                <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a>
            </h1>
        </header>
        
        <aside class="ArticuloH-meta">
           <?php the_custom_meta(); ?>
        </aside>       

        <?php the_excerpt(); ?>            

    </div>

    
</article>