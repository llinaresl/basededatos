<?php
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '7dc51363fe2ce81d7053c3399fd1b2897f43bc93bcbf6384' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^isK^nB>!mB11;~>i/_D26SgBciCgJ!_tZ,!{Y]2=j7^^l8SBt-}_P!=H)23jYJq' );
define( 'SECURE_AUTH_KEY',  '?jb<)95&ISU^RX6%&O+s;ug?!^`#X~F$7{nI%d2r-C5%$G0sN>Z[<<M8p:0,h^sd' );
define( 'LOGGED_IN_KEY',    '3`)ttI7w~`hpt!Iwj>#w@(UBU^HsSRZp-aHYCkr8w}DR2u~6^w(h?}JbLl`}tD>O' );
define( 'NONCE_KEY',        'MeLeL&fEqvvQ>WKAM%aYl>o8XNMHyC=#o~G*PkzT]b3(2Ii(a5w&?%?*|_(OU[K^' );
define( 'AUTH_SALT',        'xC2R)LKFaA<9kf4:x${v|;)o6*!Env0Sl(V]]fh$I3X2)TvxlBIgx)C(0tvQJ zM' );
define( 'SECURE_AUTH_SALT', '~96Hm*^^vypav~1[=!Fyw7FDbzzu7wE$5DI<<MkN9ymYN*[595!W|>)YQ9Vpo0(c' );
define( 'LOGGED_IN_SALT',   ',F|ZR,cyR{#!~As;8,X<~D)W&_wYOy@HvTh^1|<fo:)Z{duT7`{=f)R8{HW3>nyu' );
define( 'NONCE_SALT',       '}g]%$3KkiU3RwIcB17_R`w/=tcX}>NBQXUc!(djFcpAUUw,hg:@rZ,k1}l/G`V^A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
