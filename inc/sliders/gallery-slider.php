<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>
  <section class="GallerySlider u-contenedor"> 
    <div id="slider-gallery" class="flexslider">
        <ul class="slides">
            <li class="GallerySlider-slide">
              <a class="GallerySlider-slideImage" href="<?php the_field('imagenFondoPortada', 'option'); ?>" rel="lightbox">
                <img src="<?php the_field('imagenFondoPortada', 'option'); ?>" alt="">
                <span class="bg-aux">
                  <i class="fa fa-search-plus"></i>
                </span>
              </a>
              <div class="GallerySlider-slideCaption">
                gallerySlider Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur minus beatae ipsa non culpa eaque aperiam consequuntur impedit sunt debitis?
              </div>
            </li>

            <li class="GallerySlider-slide">
              <a class="GallerySlider-slideImage" href="<?php the_field('imagenFondoPortada', 'option'); ?>" rel="lightbox">
                <img src="<?php the_field('imagenFondoPortada', 'option'); ?>" alt="">
                <span class="bg-aux">
                  <i class="fa fa-search-plus"></i>
                </span>
              </a>
              <div class="GallerySlider-slideCaption">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sed dicta porro soluta voluptate rerum dolores earum quae, eaque! Architecto.
              </div>
            </li>

            <li class="GallerySlider-slide">
              <a class="GallerySlider-slideImage" href="<?php the_field('imagenFondoPortada', 'option'); ?>" rel="lightbox">
                <img src="<?php the_field('imagenFondoPortada', 'option'); ?>" alt="">
                <span class="bg-aux">
                  <i class="fa fa-search-plus"></i>
                </span>
              </a>
              <div class="GallerySlider-slideCaption">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad veritatis officia alias tempora, obcaecati sed optio ab laborum minus ullam!
              </div>
            </li>
        </ul>
    </div>
  
    <div id="slider-gallery-thumbnav" class="flexslider carousel">
        <ul class="slides">
            <li class="GallerySlider-slide">
              <img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
            </li>
            <li class="GallerySlider-slide">
              <img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
            </li>
            <li class="GallerySlider-slide">
              <img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
            </li>
        </ul>
    </div>
  </section>
