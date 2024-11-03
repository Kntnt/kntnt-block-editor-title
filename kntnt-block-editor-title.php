<?php

/**
 * Plugin Name:       Kntnt Block Editor Title
 * Plugin URI:        https://github.com/Kntnt/kntnt-block-editor-title
 * Description:       Hides the title field above the block editor. The title appears under the Post tab in the Settings panel on the right. Click on the kebab menu and select Rename to change the title. It's recommended to use this plugin along with Kntnt Block Editor Defaults.
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

declare( strict_types=1 );

namespace Kntnt\Block_Editor_Title;

defined( 'ABSPATH' ) && new Plugin;

class Plugin {

	public function __construct() {
		add_action( 'enqueue_block_editor_assets', $this->add_editor_styles( ... ) );
	}

	public function add_editor_styles(): void {

		// Register a dummy style to which we can attach inline CSS.
		wp_register_style( 'kntnt-block-editor-title-base', false );
		wp_enqueue_style( 'kntnt-block-editor-title-base' );

		// Attach inline CSS to the dummy style.
		wp_add_inline_style( 'kntnt-block-editor-title-base', '.wp-block-post-title { display: none; }' );

	}

}