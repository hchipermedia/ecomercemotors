<?php
/**
 * Template Name: demo
 */

get_header(); ?>

   <?php primalText(); //  Bloques de contenido primordiales ?>
   
   <?php primalSlider(); // Slider tradicional ?>
   
   <?php primalBlocks(); //  Bloques de contenido primordiales ?>
   
   <?php primalAccordion(); ?>

   <?php primalTabs(); // Bloque de pestañas ?>
   

   <!-- Cover -->
   <?php primalCover(); // Cover con imagen de fondo, imagen principal y títulos ?>
   
   <!-- Bloques comunes -->
   
   
   <?php sauteBlocks(); //  Bloques de contenido salteados ?>


   <?php starchiQuote(); // Bloque a fullwidth para frase con imagen de fondo parallax ?>


   <!-- Sliders -->
   <?php newsSlider(); // Slider con formato para mostrar nosticias ?>

   <?php videoSlider(); // Rotatorio de videos ?>

   <?php filmstripSlider(); // Slider en formato filmstrip ?>

   <?php textSlider(); // Slider básico de texto ?>


   <?php gallerySlider(); // Slider para galerías ?>
   

   <!-- Testimonios -->
   <?php cardsTestimony(); // Bloque de testimonios con efecto rollover ?>

   <?php primalTestimony(); //  Bloques de contenido primordiales ?>


   <!-- Galerías -->
   <?php primalGallery(); // Bloque para galerías ?>


   <!-- Bloques para contacto -->
   <?php meteoroContact(); // Bloque de contacto con mapa de fondo ?>
   
   <?php primalContact(); // Bloque de contacto con imagen de fondo ?>

   <?php completeContact(); // Bloque de contacto con todos los datos, formulario y mapa ?>

   
   <!-- Bloques misceláneos -->
   <?php primalDocs(); // Bloque para presentar documentos ?>

   <?php primalPricing(); // Bloques de precios ?>

   <?php //backgroundVideo(); // Bloque con video de fondo ?>


   <!-- Footer en columnas -->
   <?php primalFooter(); // Footer con formato en columnas ?>

   
<?php get_footer(); ?>
