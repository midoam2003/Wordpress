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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         '<5. ]c<_v^TZa1h_ (eSp7qcb>83T3lQEY=%g5gmcl[kHVX9{[W_h6Hc5-<`GodX' );
define( 'SECURE_AUTH_KEY',  'MC:9+d$mgm-2B-/2#7{p7(%Rn-![SPUh&}W~ e[JOHE(k0q43~J857)wMl%PGF(m' );
define( 'LOGGED_IN_KEY',    'KV&Mp_J4w8Ey;FSIB2e)T(|X4(/+e]zt{c.XXQ>jLE4Pb1h=R)&43{pC{B2y;f[^' );
define( 'NONCE_KEY',        '?V!%1:(Z0)}=RwG7kJ# pI[dlWQn7)ji=wK$#9V<Z dhzf_|Jn8W]!~OZy7@N?:>' );
define( 'AUTH_SALT',        'K)E/k?>T.6Wjxk?gBPXX=kqdzn[bz Dc/u8)8Y/)c_5-t[>VT?kc_.q? hv -`>A' );
define( 'SECURE_AUTH_SALT', 'QCYq7r&j*?c;-4RW.|/^APRp6;oT3=oMXs*<0e_yT.Ie{Rv|n0q$;q>qkr>gM6#E' );
define( 'LOGGED_IN_SALT',   '&0wu;yFl}CM=t$laGf&y`!736:d*~qxjA<&==:d%Fp/GAf~5?lS`/MlIQj5OJ c=' );
define( 'NONCE_SALT',       '#vkGg]p`)3^(OylG9JGhvn@|l@{HXN+[h|WdJt_iU/lwDP2?<rqc,]?t&zQ$6UkR' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
