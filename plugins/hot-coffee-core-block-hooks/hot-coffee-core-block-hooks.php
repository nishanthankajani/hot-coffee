<?php
/** 
 * Plugin Name: Hot Coffee core block hooks
 */

 function hot_coffee_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'hot-coffee-core-block-hooks',
        plugins_url( 'plugin.js', __FILE__ ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( plugin_dir_path( __FILE__ ) . '/plugin.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'hot_coffee_enqueue_block_editor_assets' );
