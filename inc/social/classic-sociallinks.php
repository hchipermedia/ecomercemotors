<?php 
/** Botones de compartir en redes sociales. Estilo CLASSIC.
------------------------------------------------------------------- */ 
?>

<div id="header-social" class="social">
    <!-- Facebook -->
    <?php if (get_ot('fb_url') != '') { ?>
        <a href="<?php print_ot('fb_url', ''); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
    <?php }  ?>
    <!-- Twitter -->
    <?php if (get_ot('tw_url') != '') { ?>
        <a href="<?php print_ot('tw_url', ''); ?>"title="Twitter" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>
    <?php }  ?>
    <!-- Youtube -->
    <?php if (get_ot('yt_url') != '') { ?>
        <a href="<?php print_ot('yt_url', ''); ?>" title="Youtube" target="_blank"><i class="fa fa-youtube-square fa-3x"></i></a>
    <?php }  ?>
    <!-- Google Plus -->
    <?php if (get_ot('gp_url') != '') { ?>
        <a href="<?php print_ot('gp_url', ''); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a>
    <?php }  ?>      
</div><!-- #social -->