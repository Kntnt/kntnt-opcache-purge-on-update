<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt's OPcache purge on update.
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Purges OPcache after plugin or theme has been updated.
 * Version:           1.0.1
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


defined( 'ABSPATH' ) || die;

add_action( 'upgrader_process_complete', function () {
    opcache_reset();
    set_transient( 'kntnt-opcache-purge-on-update', 1 );
}, 9999, 2 );

add_action( 'admin_notices', function () {
    if ( get_transient( 'kntnt-opcache-purge-on-update' ) ) {
        $message = __( 'OPcache purged after update', 'kntnt-opcache-purge-on-update' );
        echo "<div class=\"updated notice is-dismissable\"><p>$message</p></div>";
        delete_transient( 'kntnt-opcache-purge-on-update' );
    }
} );