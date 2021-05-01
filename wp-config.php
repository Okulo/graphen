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
define( 'DB_NAME', 'graphen' );

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
define( 'AUTH_KEY',         'Yh[eaHOJ!F&pm<9Y,FFQk!~M=>*m=Cv${0~G[9Y_cVV$U*P/8byv}U$;Ab(o)V[9' );
define( 'SECURE_AUTH_KEY',  'TU+[Ia~XE0kf=.Dmv4DU~_Dk(LoccM&^F7uYNP{+LAXp9sZ6FYend]#8|Ai_R<VR' );
define( 'LOGGED_IN_KEY',    'j+X9dEvi9Z#`h`*XoBI],]`1n;c-gV6cm05jdK>/`h?;a15[=gW|IDCWH(F.rq@o' );
define( 'NONCE_KEY',        ':7vM#Js*}xD;^8YS(B)gHmV8N%1Upl8sIAcS4*x6aY4L?bSc=`jmKliwzhl@DHCC' );
define( 'AUTH_SALT',        'P}6W6a!5?>_|wQ3.#|K@cuNgG}nxM<bIWZ%v sdg=9& N>9V]$%Yb jfJ~U^~h]i' );
define( 'SECURE_AUTH_SALT', '^Qa+dfBoNbK9dt$FBF= ZM0/g_/maB?O_L{~J0=wsTTj~00<RjP:7hN/enb%oi9v' );
define( 'LOGGED_IN_SALT',   'tou3q,euuK~gkM{f>4pByvB/)6gSk:i~WIM^Z}H>O67O8_:/jY(aeIy@@b0 #2E<' );
define( 'NONCE_SALT',       'I,M`hK.Jw>SVXJn&Ul6C)Fq~f aSUe|A|kehzEi2p{Il@%bq[n-mnn^zP]AXql!H' );

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
