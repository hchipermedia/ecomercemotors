<?php
/**
 * Template Name: Landing
 */

get_header(); ?>

   <?php primalText(); //  Bloques de contenido primordiales ?>

   <div class="u-contenedor elegirnos">
      <h2 class="elegirnos-titulo sectionTitle">Título</h2>
      <div class="elegirnos-columnas">
            <div class="elegirnos-columna">
               <!-- <a href="<?php the_sub_field('enlace'); ?>"> -->
                  <figure>
                     <img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
                  </figure>
                  <h2>Título</h2>
                  <h3>Subtítulo</h3>
               <!-- </a> -->
            </div>
            <div class="elegirnos-columna">
               <!-- <a href="<?php the_sub_field('enlace'); ?>"> -->
                  <figure>
                     <img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
                  </figure>
                  <h2>Título</h2>
                  <h3>Subtítulo</h3>
               <!-- </a> -->
            </div>
            <div class="elegirnos-columna">
               <!-- <a href="<?php the_sub_field('enlace'); ?>"> -->
                  <figure>
                     <img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
                  </figure>
                  <h2>Título</h2>
                  <h3>Subtítulo</h3>
               <!-- </a> -->
            </div>
      </div>
   </div>

   <div class="u-contenedor elegirnosPequenio">
      <h2 class="elegirnos-titulo sectionTitle">Título</h2>
      <div class="elegirnosPequenio-columnas">
         <div class="elegirnos-columna">
            <!-- <a href="<?php the_sub_field('enlace'); ?>"> -->
               <h2>Título</h2>
               <figure>
                  <img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
                  <figcaption>
                     <p>Lorem ipsum dolor sit amet.</p>
                  </figcaption>
               </figure>
            <!-- </a> -->
         </div>
         <div class="elegirnos-columna">
            <!-- <a href="<?php the_sub_field('enlace'); ?>"> -->
               <h2>Título</h2>
               <figure>
                  <img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
                  <figcaption>
                     <p>Lorem ipsum dolor sit amet.</p>
                  </figcaption>
               </figure>
            <!-- </a> -->
         </div>
         <div class="elegirnos-columna">
            <!-- <a href="<?php the_sub_field('enlace'); ?>"> -->
               <h2>Título</h2>
               <figure>
                  <img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
                  <figcaption>
                     <p>Lorem ipsum dolor sit amet.</p>
                  </figcaption>
               </figure>
            <!-- </a> -->
         </div>
      </div>
   </div>

   <?php primalTabs(); ?>

   <?php starchiQuote(); ?>
   
<?php get_footer(); ?>
