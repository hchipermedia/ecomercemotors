<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>
<div class="HomeCover" style="background-image: url('<?php echo get_plantilla_url(''); ?>/images/ktm.jpg');">
    <div class="HomeCover-content u-contenedor">
        <div class="HomeCover-contentTextos">
            <h3>Lorem ipsum dolor.</h3>
            <h2>Lorem ipsum dolor sit amet.</h2>
        </div>
        <div class="HomeCover-contentBotones">
            <button class="btn btn-primary">Botón</button>
            <button class="btn btn-primary">Botón</button>
        </div>
    </div>
</div>
<?php get_footer(); ?>
