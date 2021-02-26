<?php
if( !defined('WPMU_PLUGIN_DIR') ) define( 'WPMU_PLUGIN_DIR', dirname(__FILE__).'/wp-content/wp-safe-mode' ); //WP Safe Mode
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
define( 'DB_NAME', 'mas' );

/** MySQL database username */
define( 'DB_USER', 'frank' );

/** MySQL database password */
define( 'DB_PASSWORD', 'frank123' );

/** MySQL hostname */
define( 'DB_HOST', '172.16.222.200' );

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
define( 'AUTH_KEY',         'Yf>L@p+Nzj~]5B=*8h$D^V:#@)?^,$8]jl3hflq0Mt[Z+^HQu!!`B*FLxgXTX2#&' );
define( 'SECURE_AUTH_KEY',  'rK}<,$Ex[8<6OJxcv/3F:f;3BkJ8StbxNe$5@<l26;>qiePIP%ZrBO!LfV)!v2lD' );
define( 'LOGGED_IN_KEY',    '2&hmEo7bPDhjOi^KmRIdlTg$Gn[E|Q3y>_Qid/I[hsuvd9$W*^0Mm!~Q|bZKW_<u' );
define( 'NONCE_KEY',        'bt}]YHoIV/.F@X_8G%|I=Z3`(,Y 3|(.b._kE1E13g} r^lmrxPFayftD]K=/E6i' );
define( 'AUTH_SALT',        's^#|y]QZ+y=S9HhO>=^A.W:}Rny$EnmJk,G9}CvD:.jd6)/-#Syd`_u3-Dug=/f<' );
define( 'SECURE_AUTH_SALT', 'Q]6oFI Pid<s(Bd{{,C!IT2/G/^2-SDKOR8!:f}dee6xs3r(PsI$~iy8zI))+ELs' );
define( 'LOGGED_IN_SALT',   '3,k^;;Tuw|Pn)[a!F.)(./<m7qc,+Y^$s{X6j$/i-W_Pt/]$OFIUg/q-[DxH6  *' );
define( 'NONCE_SALT',       'I{-HYb@uuv?@9+x`:2qv+&Vr3xU~BL6<%ws1^I0wYhsr6C3n>yL`;j(n,/T)GQ2(' );

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

define('FS_METHOD','direct');

