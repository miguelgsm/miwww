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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'miguel123' );

/** Database username */
define( 'DB_USER', 'miguel123' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'b[c&:Q>thsI=O7;~t _VIs]MsMu-Zq<C`2sy&nB,w[KJO7.^nUib<fQ`5Sx@YNC7' );
define( 'SECURE_AUTH_KEY',  '2c2I{;o-EslmRO0 QwX;:;a;6PDtc?2YpBj7HGb)m3^6=apJ_*2)<.&@0 :3OC(e' );
define( 'LOGGED_IN_KEY',    'plmgVT,BB2s*{vHb)b1Wft>h:W Ws9$w/#_jVir9e<P3Nq%K ?P6!0Oml:Jy=wff' );
define( 'NONCE_KEY',        'j`w}?bof^!4C1N^ZFCg9!~%;:0DC]P R%Xo^K2^18_#9t{yaH+|S:j8Lr$!rY+Kj' );
define( 'AUTH_SALT',        'jay!UNJTvoAKYJq/R7)+b8wBR>=~{r%utZ*$jfPP@um#$sBk6lD>5z{:=6!1E3qZ' );
define( 'SECURE_AUTH_SALT', '-PMhxq>pL!KM%JAfdvMv,T9/CR=mft;Uib@MnlP36i:nN0qIl;A}Z[Wulp1z.ww5' );
define( 'LOGGED_IN_SALT',   'Gz3gG2W%v6jj4.7c/{QSgcr;%Ff9ltcU;!kxlNr0MqF`|gf$F=oYO(fCu#Wj`H/U' );
define( 'NONCE_SALT',       'y>E5nXg`HNjMTpP&wzP]du/%kixma,[5eH$0ycp*JSY/NI8M:#w[WeoDn?{XQBf5' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
