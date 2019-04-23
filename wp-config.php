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
define( 'DB_NAME', 'wptheme' );

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
define( 'AUTH_KEY',         '[JolAXrW,DHoxq&4=ap32;:N>r.n%Ye]vQq<vND]YuF.ue,iSyn/pvvU:{5z8j!N' );
define( 'SECURE_AUTH_KEY',  '?P8O0si[ LlGRP:v3_2l?f_u[$|lR?c&R~D%X@Q.:@@BIKnAGM b6|,SDPK_aC2T' );
define( 'LOGGED_IN_KEY',    'r8B}F8 v3&j@BRN3aw7DWAfJcF7i*FR-oaScUGUZ(~bq3A2l3>$QCg3yHGejnycd' );
define( 'NONCE_KEY',        'NM$ZDNx%)~^!z10L| 5?h= UXDlBGN[/@U:+TH+LczM Jh`BZVd*W(xq?2,-A/7c' );
define( 'AUTH_SALT',        'R6JyXTyD@KDcl+$ZzlCM_x42`PT*qYH[fE-r}P3YuQswcP)c=TTW+M}:^,M04pe`' );
define( 'SECURE_AUTH_SALT', '?$uymYb=UzDQ72~bi{u`qP:<OXBW|oQ#4{I{(/FCXC?Vx5bvWpKx.jN+I%3NCU,F' );
define( 'LOGGED_IN_SALT',   'hl!H&+?<wjTNFlxmE17FIeN[L A>`@$.L&Xl)I6j!mQVY,emWfGo!ES~%;Tglkg1' );
define( 'NONCE_SALT',       'm6)V9LuMx-[2M9+|~ i(M( ,P!^fV3u%Q&3~sTl[|[FH@A@03uO= <|>NI8}C53T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_theme';

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
