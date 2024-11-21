<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uvindu' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cBVq3o3d4XWy`;+[)dId*CmZQ!n_h=(tiKRzp.O&%I&1~kW=K.2Epk,K+xhP/LEk' );
define( 'SECURE_AUTH_KEY',  '0i9HQS%Dtd+2f:[xrHy5/[7ciJ45j>b7LOP@97Qj-js6CVkGwfer1Dpl?F,W-3Ap' );
define( 'LOGGED_IN_KEY',    'Seqc#-izy,k!g&} G|, vGGQ-5?NXeZ2n#F4`#L[eDhmje%],H|`=e4i)e(PBWt8' );
define( 'NONCE_KEY',        'Eqoa8dhWus8+gk(10O(:KW)#m&^CJ$+L:Jwb~m.mH3qv(gb[_c#TjFJ1q,^<KZKy' );
define( 'AUTH_SALT',        'Xm9M4yi=|ahCXike;%N&mhV; [32W6=%A88r7%J]MHvB8^EI)QDw0;tZjXBMfj=!' );
define( 'SECURE_AUTH_SALT', 'b&_Xtd4Vd=RIq-aY9D7S0h$ja&[JYMuY!zg(HY.X3yaal8GhYl{;::FJ;Qg::W-,' );
define( 'LOGGED_IN_SALT',   'Zh+-K/V;bfQ.tjqK3u+9<f,)4K5;6Fwgc!u.T:I~{#^3?R+4|e~rvnp1nA%#gWyq' );
define( 'NONCE_SALT',       '#w7WboG{xg.3s[]uB]@31BjRMQbABj.3Xek(FI:V8Oi:8UV~ruJ5ax;E*n4Ya~jk' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
