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
define( 'DB_NAME', 'midterm2' );

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
define( 'AUTH_KEY',         'RCo0C,4`a+hW1sxU}StrHi(24[mnfqZ!g%&%*YREV7<:}$?##e|r{>^;R;#*O=@3' );
define( 'SECURE_AUTH_KEY',  '[Sh&o7]t]z<hAXb`SRwLDT#Ih2(Yj]fF6feH}U{qtJ!HFG$UE&/b:<~NNaa2441{' );
define( 'LOGGED_IN_KEY',    'F2HiBG|9|^jsAO@|/6v9YJSll[r2|jGWNMr1NT(O3hp0LnQuuXnSD.W8U3m-T6[q' );
define( 'NONCE_KEY',        '8sXgnT]vw@ss&8f@sH)n}tQK5ye:[q;xsq%,1r*)vfZyr|i(FxClV=|W+|)j}V[6' );
define( 'AUTH_SALT',        '9M7zF!(q6iGjkbE@Roy/xm3KTuwZ})V&@ E]mJ?KdJXvRdaLh),5x~ %$x:Dd*+c' );
define( 'SECURE_AUTH_SALT', 'v%m+WEPmE__T*)ku|R)i]W+zdRBQo}2YV!:! CIG<xnebx76oSDMK[&<071F{JuK' );
define( 'LOGGED_IN_SALT',   'a:{iOQ d_xK{Sc|ly#^i9,0{@gak6==YTEY)+a7<6mO[QpM;r8hsZkO%L7fe}<q~' );
define( 'NONCE_SALT',       'rq(}.+V<IKYTf:.+-#ET<{vovp-CJhc*Q uX9p;^ =g5nU(Q qzbmbeMS^4sA)~8' );

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
@ini_set('upload_max_size' , '256M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
define( 'WP_MEMORY_LIMIT', '96M' );

define( 'WP_MAX_MEMORY_LIMIT', '256M' );
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
