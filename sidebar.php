<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<aside class="Sidebar" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<div id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archivos', 'shbase' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</div>
				
			<?php endif; // end sidebar widget area ?>
		</aside><!-- #sidebar .widget-area -->
<?php endif; ?>