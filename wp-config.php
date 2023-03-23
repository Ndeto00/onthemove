<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'onthemove' );

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
define( 'AUTH_KEY',         '25k 7cl55{]1{#5@=m,+,ndWNp:WE+5z vXMB~Qx?ltCa tQH+B:_&XWf]?HL^4M' );
define( 'SECURE_AUTH_KEY',  'J]w4mIpz{_HMoi#+<K)-u{q%4y!;?d$qA]>tE>r1$O&qb~&gIg2SPUt,v{YnSSRv' );
define( 'LOGGED_IN_KEY',    'n}OT;qU^rhH0]M:%n_8hs{(ptS_#4TSfU-L|SyS45PwSPT+A1lsG=V?d1t&P96NJ' );
define( 'NONCE_KEY',        'M^=E@J$3Ql|fv7(r(>eCo_Vs J1)/n:zsI(h9xC?H2v<6SGur0}!9#K0x@zu[va`' );
define( 'AUTH_SALT',        '+*r;1v%N!jr,az;P(`jPXZOyojnhzk[N$>4En[mJ~kcALm+AAlrF~ ;kyfuJO2`A' );
define( 'SECURE_AUTH_SALT', 'B-Q{(>Ep?0N6/`fq22(&*{W9jPo~qd2fiX}74rr1I-a50|-]=$f*DC[4%+.w ]< ' );
define( 'LOGGED_IN_SALT',   '@0at{3vvf+o{`L32vTtwhbwd!(-}[qxs=-0KA}g FW&*dH~Ea[(pipWlb^^:(5+~' );
define( 'NONCE_SALT',       'h#L]z7l#8LfV4&gvM8/I^w-8hW#tAWi< qK;`K/{b58a&lYZM>AtWRj5y}XXb12n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'om_';

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
