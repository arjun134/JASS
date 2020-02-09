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
define( 'AUTH_KEY',         '*}VdZ<eY!?#{bKD9J$]Ms!z[htk^gZGKEVs|M6Ik@[?#xznMAtg fb?q9ek~wNry' );
define( 'SECURE_AUTH_KEY',  'AgPZ-{Hz-m_0j)R`&:/atJE|uQ9eVD[79K}8_07U])%q-24v~n|&2k<G)UTYM3ch' );
define( 'LOGGED_IN_KEY',    ' ?Cv.z/E3Ux?D}UTO7B=y_w|,lwjTyhplCi@YFFv5r_I;W)Q{9+92d;eZ{OYs0K-' );
define( 'NONCE_KEY',        '>XW`^jxc]{`BtpC,)h<MK2Vf?>dl~#5ah3,4[ `NzT kCi1^L!?Sm/s%b/p!:|Mh' );
define( 'AUTH_SALT',        'pU@Y?s2M!NIvA(0V<>zc<wFZtVlO$SME1A)%uZw`B_,qKpGR<1K48G%@C|*eJAW;' );
define( 'SECURE_AUTH_SALT', '=fgo?[,ynP$Y1ZwWms+K&c:/iCg -xqGJsR9,wRIfn]R[X$zOG3p}jgd}*<jlR(q' );
define( 'LOGGED_IN_SALT',   '1K;As(II4&IL=v/D@;:0<I*`HGu^awT8 #lX9h~%r!-:s2-IW}Y y1a>(W<?$K~[' );
define( 'NONCE_SALT',       ' <{Ys$OK(8~ZtyMPdp^sW-.Mp[3LU8Wj*q@{cUG!{JAF~0Snv$y?R/kPC+cDZ>fT' );

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
define('WP_ALLOW_REPAIR', true);
