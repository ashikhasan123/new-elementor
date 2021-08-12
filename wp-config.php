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
define( 'DB_NAME', 'practice-site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#1&HWQI/s:`f1lHx#ttb}Q*oP^kKmf{Cx*[$CYysm:F<{;s0H/6{P5*6n:ssz>3U' );
define( 'SECURE_AUTH_KEY',  'aL=a@E/ ~;iMT)rZ R@lucFh5}K#f&tDe8&Fx*5BcXc2zxban1%9!}3y&{8rjsr@' );
define( 'LOGGED_IN_KEY',    'H+%;nPCRTD vUdWz]A{[Bo32ZV8N=q8=NW] !)CF7u>Zdl=j]!e1AHtKd$^bPP}(' );
define( 'NONCE_KEY',        'qu<aKd],kbdbT`9;*ktLv$<=N)=Inj*+SL%HK!_=Cf[$SP4!*%hSep3XaS@sKgL{' );
define( 'AUTH_SALT',        'hxs?fVb2/4ZcXWL>7@K=dtuL>5rF{M(Gu6&Y_@ DFNAZ$>rKG/f3,l:V*0+0~`/@' );
define( 'SECURE_AUTH_SALT', 'ce932S&)(9*PFl:CBKEE{5@iNvt`9C3blZszCJ>&2W?@v}3Z4JsJ-9iG1Q_yXFur' );
define( 'LOGGED_IN_SALT',   's3|v0Rgd$Q?mz0~Z:=~pc]+7;s=AF)0gMZx~&ziF.m3ky-qDQ=F>b>)~lfV_M3~U' );
define( 'NONCE_SALT',       '|B|85neTuY(==~l)G-V`6F)*eCJ2Kd/mKkxA~dXdm/^mVM}Q.S!!%h8bepYc2m=_' );

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
