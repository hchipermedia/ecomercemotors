<?php 
/** Menu de navegación clásico de WP
------------------------------------------------------------------- */ 
?>
<nav id="header-main-nav" class="mainNav" role="navigation">
    <!-- Icono de menú para versión adaptativa -->
    <!-- <a class="toggle-nav" href="#">MENU DE NAVEGACIÓN</a> -->
    <!-- Menu WordPress -->
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'activo', 'menu_id' => 'header-menu') ); ?>

	<span class="menuResponsive" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

</nav>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'activo', 'menu_id' => 'header-menu') ); ?>
  </div>
</div>