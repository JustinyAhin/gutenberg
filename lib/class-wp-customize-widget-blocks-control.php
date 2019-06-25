<?php
/**
 * Start: Include for phase 2
 *
 * @package gutenberg
 * @since 6.0.0
 */

/**
 * Class that renders the Customizer control for editing widgets with Gutenberg.
 *
 * @since 6.0.0
 */
class WP_Customize_Widget_Blocks_Control extends WP_Customize_Control {
	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @since 6.0.0
	 */
	public function enqueue() {
		gutenberg_widgets_init( 'gutenberg_customizer' );
	}

	/**
	 * Render the control's content.
	 *
	 * @since 6.0.0
	 */
	public function render_content() {
		the_gutenberg_widgets();
	}
}
