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
define( 'DB_NAME', 'db_jtc' );

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
define( 'AUTH_KEY',         '-M_c=cg.&|b`b+94YOGt@$Klna.j]/i&_TQV>,kiV3$RS]>d,~a${_b|S&~!lvcH' );
define( 'SECURE_AUTH_KEY',  '*t00l:e@fK&VP8W8bEyJ2wt@GL};$%sjNn}x.cPJ9x!fUpb`=!4;h&NP)%$nOWbo' );
define( 'LOGGED_IN_KEY',    '[lC3_0<&~z+ghO;2}_s|Gk_Uj!C?[bGZ(4&$t(B1TlktE]2`,Xdu*GW?g07fY:r[' );
define( 'NONCE_KEY',        'pMh=a5R?,`J`/HhJ=&WB&J_RQ2=]^mr,l^)r@1s7nBz2@CAfW:pt*2,Y&.Yzqw(p' );
define( 'AUTH_SALT',        'UULYw?^MVlo+zY ]hhWtCC11) IoZM09r;jCS%(iLRM%jE<N-+qgrOQt[dt ,XyA' );
define( 'SECURE_AUTH_SALT', 'w:=Ge&}u=pK{BxAH 4Ki-2`{o_kaX2(%yw6u#fx8~T:7?FWQ@VE,9D,XZFH07;C!' );
define( 'LOGGED_IN_SALT',   '{G^e+WpL50P>g$~h#V=<&nFnbXVwyTm UMj-A/)e:mwwh^p4I|LPc>t*?!d03 =+' );
define( 'NONCE_SALT',       '*YX6#?}|@UUO@#*V|<9F||b&/U4%Gq:)3.o/V1k azG`d+Lzdjf@_OLT(>k+G`eV' );

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
