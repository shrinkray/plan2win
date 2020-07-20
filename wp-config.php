<?php
define('WP_CACHE', true); // Added by WP Rocket
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', 'root' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+omfEOyYleT+qKxX2qDIPnfEBpAetnirZYEpa1P34a6hh/MCnBD2pNJlMLI0H268aCGynRhv8ZixRYCvYvCNqw==');
define('SECURE_AUTH_KEY',  'bT66nfS+iKvUaa2vWfSyvF7VMd35IzwYHuQDKnytwU2/CkAAkFA/69YuYb086zl6sBrZqKmz3tGcFH2ChmVkiw==');
define('LOGGED_IN_KEY',    'QiGI5peU7rhWRdR0vg0bzaSgzeD4lW85prd3oyrNF9tYGMfzCWh22I1LaSJzsVy6He0brgX6tXSA+9cDLukobg==');
define('NONCE_KEY',        '/IIdXGqlzvbgacu0J5m6FsPltBAeKZiLCCe2L0erfF0NeaYF6HCEvidXQGypG8ULnE4YN3CzHkSuDZ1qNybLNQ==');
define('AUTH_SALT',        '4NJ363t2hdcmcwtlohowpYiSLEMar2ux7QAMEg/TCLzFifnvGOHu+hZnOQBHHg+Z8xEjag6agpWdBplER6iDWg==');
define('SECURE_AUTH_SALT', 'Sk4oaEX8d+cjxEx9XThZKG+6ubGTVfNc+BJi06emlfMCKibQNFAci/pS72EF0bXgABK9Ta/zSEqJNUAe29v4+g==');
define('LOGGED_IN_SALT',   'mDqRQoZWqy77VwGmrX0Ltntu/+kqKiG7+BxlbccT/XViT+2T+XfNU5jiurHkvIu2MnU69Dst+LjLV2Nal+u/+w==');
define('NONCE_SALT',       'vJp3sCgh70Hm7k3vBGIWheFZ6EHUu2DWhZqj2orABGVvM8HPo/RNT7w1fSMN4do4hvmikWcTXMX2+kcJFRzN1g==');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
