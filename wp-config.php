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
define( 'DB_NAME', 'store' );

/** MySQL database username */
define( 'DB_USER', 'ali' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'r)jV<113)W*T@:ldGosg2b rs>fWrpLAXl+T48;H?QN,W&E)jpU?:2M1)zOYQ!og' );
define( 'SECURE_AUTH_KEY',  'aQo?W24~c}M4pGf>Ms|6pt4(<@O{NJ59v[x^CU*Nu5#$TGM$I7rV9ehiA{)Qe#-}' );
define( 'LOGGED_IN_KEY',    'Ea;4b,.GV?%bZXse@CbmcXo&RsDy:|Bz}Ie8v)IpI}+]H[Rt|}C23K#bN5SO2YTa' );
define( 'NONCE_KEY',        '?Zu`98:0Nr:*z%jUvIfY/{Y{8g/ -|-Bn_@A3V*7/1ld:pc{= RVl0s `SocY)Y@' );
define( 'AUTH_SALT',        'j@I_bBUl!:d1M|Apu^4;`GFa?[<pJYK$rUW_d)8xv.-grHjz`%{sMj%^v6f<?tBc' );
define( 'SECURE_AUTH_SALT', 'uF_Mgq(Z}mwzPPn[*VgAH&r>t2MHqk*btiXU*-&E+^cjU:4FJ}G3df8-5~3^3y|L' );
define( 'LOGGED_IN_SALT',   ';84m0U45]i;}Z+~QXt)5DX/d>~CkQi}mWY0!o~yev`#H`5e@JVR]GJNVs_13}w84' );
define( 'NONCE_SALT',       'Bjf>%2X68`10s1WpT1#J[VgVRG$8?Y2E un&R,>O:}W{6fK0-nZodWr|q{ OhO/[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
