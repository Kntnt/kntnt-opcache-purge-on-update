<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt's Opcache reset on upgrade mu-plugin
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Resets opcache when the upgrade process is completed.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


defined( 'ABSPATH' ) || die;

add_action( 'upgrader_process_complete', function () {
	opcache_reset();
}, 9999, 2 );
