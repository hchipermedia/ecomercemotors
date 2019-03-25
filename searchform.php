<?php
/**
 * The template for displaying search forms in SH Base
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( '', 'shbase' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'buscar', 'shbase' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Buscar', 'shbase' ); ?>" />
	</form>
