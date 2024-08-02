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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'yxmZ)zOBV|Y96[0TT&>T%AqBnNo`r2ztCRYpKNT;yZAaJ0x!..fcjg=LRZ4_|Hg&' );
define( 'SECURE_AUTH_KEY',   'e#9<$CDX7>#>dyItN6t@*I! F>K^>GQ>F?=!~9@6S,t}f>wy:a8]qJ02djO14#L|' );
define( 'LOGGED_IN_KEY',     '0JD4|SL9B}0cfS(ZVYeejIdII^volS?BHIdLhkr8lkv|5+N7eZ%sr74KS8%1TH%%' );
define( 'NONCE_KEY',         '^l_]C79,*QgDLEp2gj2U|PLK>u+4WqCWq|JYyr ;[D2&y(G TH*|> r|Xa`-!b5_' );
define( 'AUTH_SALT',         'OjM.=  ;>|88~_s/N$~,w!S&ZU!0$wHKa!)H^S0p},9-KIKO+o4OG8@~Yj&hbu[g' );
define( 'SECURE_AUTH_SALT',  'dmj5^rB(+)A01{Yp%{3*[>uBh WTLc!hF<3t@Nw_%kQCu%[dOQ`S,5o6b801 [^+' );
define( 'LOGGED_IN_SALT',    'GXC7xBW-ipgChdu+!s,88VF#]b{/^lq&)-/Bi/l!|gcb|<@`4+_8fi%NEM](f4yf' );
define( 'NONCE_SALT',        'nI&-u}Eu@|ZJKXs1%uwH]a4!Mg5BlLiiS^O-R}5c{`MdnP3j$qtt_ O]HPoguHJb' );
define( 'WP_CACHE_KEY_SALT', 'M&dNHG{K^/4w43gt`P0.r;U--?skz*qP9VHJ8%T.IjS1(@?r+%xVL0mW!opJCk#a' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
