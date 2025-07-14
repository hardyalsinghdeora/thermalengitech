<?php
/**
 * WordPress configuration.
 *
 * Credentials are NOT stored in this repository. Every secret below is read
 * from the environment. Set them on the host (or in a local .env that is
 * git-ignored) before serving the site.
 *
 * Required environment variables:
 *   TE_DB_NAME, TE_DB_USER, TE_DB_PASSWORD, TE_DB_HOST
 *   TE_AUTH_KEY, TE_SECURE_AUTH_KEY, TE_LOGGED_IN_KEY, TE_NONCE_KEY
 *   TE_AUTH_SALT, TE_SECURE_AUTH_SALT, TE_LOGGED_IN_SALT, TE_NONCE_SALT
 *
 * Generate fresh keys and salts at:
 *   https://api.wordpress.org/secret-key/1.1/salt/
 */

/** Read a required setting from the environment. */
function site_env( $name, $default = '' ) {
	$value = getenv( $name );
	return ( false === $value || '' === $value ) ? $default : $value;
}

// ** Database settings ** //
define( 'DB_NAME',     site_env( 'TE_DB_NAME' ) );
define( 'DB_USER',     site_env( 'TE_DB_USER' ) );
define( 'DB_PASSWORD', site_env( 'TE_DB_PASSWORD' ) );
define( 'DB_HOST',     site_env( 'TE_DB_HOST', 'localhost' ) );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );

// ** Authentication unique keys and salts ** //
define( 'AUTH_KEY',         site_env( 'TE_AUTH_KEY' ) );
define( 'SECURE_AUTH_KEY',  site_env( 'TE_SECURE_AUTH_KEY' ) );
define( 'LOGGED_IN_KEY',    site_env( 'TE_LOGGED_IN_KEY' ) );
define( 'NONCE_KEY',        site_env( 'TE_NONCE_KEY' ) );
define( 'AUTH_SALT',        site_env( 'TE_AUTH_SALT' ) );
define( 'SECURE_AUTH_SALT', site_env( 'TE_SECURE_AUTH_SALT' ) );
define( 'LOGGED_IN_SALT',   site_env( 'TE_LOGGED_IN_SALT' ) );
define( 'NONCE_SALT',       site_env( 'TE_NONCE_SALT' ) );

// ** Database table prefix ** //
$table_prefix = 'wp7x_';

// ** Debugging ** //
define( 'WP_DEBUG',         false );
define( 'WP_DEBUG_LOG',     false );
define( 'WP_DEBUG_DISPLAY', false );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
