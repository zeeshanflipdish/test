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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db5hb2ubguihq9' );

/** Database username */
define( 'DB_USER', 'u3rhgfscamkne' );

/** Database password */
define( 'DB_PASSWORD', '6mqorugmeln0' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '6v;|;A^PWWgTJ@aX79Q3S~>*2)sn)RqM1zm]YHQ<1&GPpNy-5SQmr.4Z6|I1Ff0o' );
define( 'SECURE_AUTH_KEY',   'VS4>gy)a!ZZqqWE<x.nVA)wcw@RrCjL^<vbZMd=v*i)^0<I?Q*g;cs#/(eZMKo9E' );
define( 'LOGGED_IN_KEY',     'h;%DmQeP}uIRD{MPBeIM|{[AhC]raT?%<HB4OG%RREtx_*}AnOfp;:Lj;,Rl.(At' );
define( 'NONCE_KEY',         'AM#`{rCMc{_k[rhrYFJ;g9V?xs<x}QqlN>]5vRElSo0`vIqbl7%+0P*21ujpm`<y' );
define( 'AUTH_SALT',         '~Q*k[)E$V2Bc-NAb`4Q#~<th$T6AZ:Dw5}0_Y<~1w}vT*x8B.8H2Wf(/chqD>V}A' );
define( 'SECURE_AUTH_SALT',  'z<KkUk^@Ur&OSxB3O`V_1G_s+{vL(]fsp16{CVFU]fV.6IHv!u4Y`B|Y o~2WEMx' );
define( 'LOGGED_IN_SALT',    'V_-H=Ng(D(aUr{<8exOd|3I^^ cUyvD#FX1:+mQtM# d}?P:J4%gP^je^a*3<Z`B' );
define( 'NONCE_SALT',        '1B!+=?a3[Ac~Gc+o5AS>F=[=6S$B#Is9()4iczQU=)/gX7)JZ()Q,UoOJjT_EN*[' );
define( 'WP_CACHE_KEY_SALT', 'L4/s?upSZ798tUz|.<}HS&TDsh~uKVFk<`)3IF4%irwnhCY3 %4.4NHar.Y8v*hN' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rjp_';

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
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
