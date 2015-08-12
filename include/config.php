<?php
/**
 * Remember plugin path & URL
 */
define( 'MUCD_PATH', plugin_basename( realpath( dirname( __FILE__ ).'/..' ) ) );
define( 'MUCD_COMPLETE_PATH', WP_PLUGIN_DIR.'/'.MUCD_PATH );
define( 'MUCD_URL', WP_PLUGIN_URL.'/'.MUCD_PATH );

/**
 * Domaine
 */
define( 'MUCD_DOMAIN', 'multisite-clone-duplicator' );

/**
 * Slugs
 */
define( 'MUCD_SLUG_NETWORK_ACTION', 'multisite-clone-duplicator' );
define( 'MUCD_SLUG_NETWORK_ACTION_CLONE_OVER', 'multisite-clone-duplicator-clone-over' );
define( 'MUCD_SLUG_ACTION_DUPLICATE', 'duplicate-site' );
define( 'MUCD_SLUG_ACTION_DUPLICATE_OVER_PRIMARY', 'duplicate-site-over-primary' );
define( 'MUCD_SLUG_ACTION_SETTINGS', '_mucdsettings' );

/**
 * Environment constants
 */
define( 'MUCD_PRIMARY_SITE_ID', 1 );
