<?php

/**
 * The main plugin file.
 * 
 * @package     Block Plugin WP Scripts
 * @author      Erick Danzer
 * @license     GPL2+
 *
 * @wordpress-plugin
 * Plugin Name:       Block Plugin WP Scripts
 * Plugin URI:        www.erickdanzer.com
 * Description:       Simple block plugin based on @wordpress/wp-scripts package. 
 * Version:           1.0.0
 * Author:            Erick Danzer
 * Author URI:        www.erickdanzer.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bpws
 * Domain Path:       /languages
 */

/*
 * Exit if accessed directly.
 */
defined( 'ABSPATH' ) || exit;

/**
 * Main plugin class
 */
final class Block_Plugin_WP_Scripts {

    public function __construct() {
        add_action( 'init', [$this, 'register_block'] );
    }

    public function register_block() {
        // Automatically load dependencies and version
        $asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');
     
        // Register block js
        wp_register_script(
            'bpws-js',
            plugins_url( 'build/index.js', __FILE__ ),
            $asset_file[ 'dependencies' ],
            $asset_file[ 'version' ]
        );
     
        // Register the block
        register_block_type( 'bpws/test-block', array(
            'api_version'       => 2,
            'editor_script'     => 'bpws-js',
        ) );
    }

}

/*
 * Initialize
 */
new Block_Plugin_WP_Scripts();