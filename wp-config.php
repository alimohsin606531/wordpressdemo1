<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdemo1' );

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
define( 'AUTH_KEY',         '8/iIp.R3H4vd0sR^| JHKty)x_C=,&3au46q,cz<C@wFhl4|e/>>)T6h5fLj]j[r' );
define( 'SECURE_AUTH_KEY',  'GW{9:X1OB5c~cLBHfjwm9g;Fh>,MSDXZ#o~CU>8-Lr5lFa[E&Ri372qtNn&8RnJI' );
define( 'LOGGED_IN_KEY',    '`$)r@SGZBXTTW{4D<VETY;0RGRKM-$Z~.NT==BK50w(.Fo.b%X#=ne4wt<($!fi ' );
define( 'NONCE_KEY',        ')XegE&Y?<yY4cnr~F}K4ZXK%A%9!T)83=~?y6cSt[^V&zlyd`-I#t~W`Am2wOx~F' );
define( 'AUTH_SALT',        '0+8rf5(G}d{Vh]UC!S{]<=/:RD?LmCi)KxD2I|IBNwm6FJ~Fz!wn0^qKLWVALO(F' );
define( 'SECURE_AUTH_SALT', 'MYh,Ba!%54,3c&la:E>6G^uB*cR%c+9t0S-Tqo9#t{T}g)ARRTH8bcL5V0zI225L' );
define( 'LOGGED_IN_SALT',   'FxuSK.{4G=7|M RcI310t`!iikaRt,D#iictn}eU)?bD/`(l&G e.Tj,_(,f1sq%' );
define( 'NONCE_SALT',       '<5J0K-a!6<$wQZL*!bElu`}z{WGZ9@Im{#FHf0qMw |iLRrz%C:lec8p[zO/Gdc&' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
