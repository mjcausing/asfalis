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

// ** test MySQL settings - You can get this info from your web host ** //

if(file_exists(dirname(__FILE__) . './local.php')){
	//local database settings
	define( 'DB_NAME', 'asfalis' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' ); 
} else {
	//live database settings
	define( 'DB_NAME', 'micha859_asfalisData' );
	define( 'DB_USER', 'micha859_wp993' );
	define( 'DB_PASSWORD', 'R@dical5863' );
	define( 'DB_HOST', 'localhost' );
}



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
define( 'AUTH_KEY',         '#_QFKx?v]Z.4V)V>=$`q[xGdc]G}KWh*p.qRL~f0B(?O}jz{PFyzq@9O`y~>Z}H#' );
define( 'SECURE_AUTH_KEY',  'D=6Pv=aK4vs$(uhU3dwx8ST}e(Iq)lR/)&TY.x@HAg#PzZ>JdS=k||J-{/j[P={(' );
define( 'LOGGED_IN_KEY',    'nn6YHhsxq<g)Qp3i!-XKag#/wE<xhPKN%E3<4_Lqa2Nq>=~n^_,6?n@F#:B3>0vM' );
define( 'NONCE_KEY',        'z61Gko:WLb?aXal%64#@QEWgJVo-Jed QhBS$.Dr5$r1nraDsU}P?mRF[4cn=0Ub' );
define( 'AUTH_SALT',        'RI<IM_*q=SYT($-=D,d+)*Jft>F^eXa[c{Wp(DVm^.nGnVv(C0/#L}b-Q[hRYF8K' );
define( 'SECURE_AUTH_SALT', 'B7 p8Ar%]m#nqafF31x.,&wY%P~5FI}B6jHo%2|7>&M$edF(95{f!JgLW4:$ njm' );
define( 'LOGGED_IN_SALT',   'u(NKl_XB0;c]Td7dFSKrbe{=Z[),<Uh%}0Qv{Ne^0USN%-#e0>b2ISe.8wNAflu`' );
define( 'NONCE_SALT',       'Va)jBX.oXcP9Zu{I+w2+QBOL%.3H_NLz6LjD`^JaE~^X5tpNlS>-CG:IGh$oF5>R' );

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
