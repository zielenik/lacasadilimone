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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'casadilimone_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'f9>u~o>}Z nvc^vSm0P]OkoIRW0,g8L8_G!:7:(f;&jA-H(}2VLYAI,Eu[I(RFJQ' );
define( 'SECURE_AUTH_KEY',  '6=FkgSE${ew[TiAO_X?mn6v_PsLWq6PV]}uBwCo&(w!sN){%pc1tDmPAu yKMa;z' );
define( 'LOGGED_IN_KEY',    '@*v-&B8<fdR9;Q[n_@0Or*1++;ICWH2`/y!JPvBS[g`~Sf0u0`K6Jwd.$:Fx`lkf' );
define( 'NONCE_KEY',        'TNE=Vw(77[B)=$K^h^mSr`UN0*M0J(C8ik(Z-o`VAc!+ /OQps1c?,[+84JT1(?H' );
define( 'AUTH_SALT',        'z/@Qe_^!lLzaoHW[&DjpE.j9`:~6J+Jpbw4@kH vZBPRyrE t^giLS)02V!7 Tiy' );
define( 'SECURE_AUTH_SALT', 'P) u`eXYYZbkU9OTuoEnprFa]t25J<!QR-%u6b^ ~ZBI;gz&h>Qz%}/%Aj ,!O?w' );
define( 'LOGGED_IN_SALT',   'P|m{XsXL>)6_5&Dbm)- TUdp|ng(k?ZgnN~6#./M6YiNgm-Hcg1b*BC)Z]V.(fuS' );
define( 'NONCE_SALT',       ':K8hvHm.Mj sq@_I8QdX2DzP?jP2J!nI{CI~Q|+ZAo?k!k:jiKZjz@>/J&>TI9dE' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
