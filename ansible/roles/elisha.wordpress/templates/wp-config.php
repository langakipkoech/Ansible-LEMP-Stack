<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'bananas' );

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
define( 'AUTH_KEY',         '<K7Qp-Bj8v)=L8i{kIStrJgWliQswOnE?bz4{MjDjw63c |7e%Cp./v!rHTXBW(P' );
define( 'SECURE_AUTH_KEY',  't~oKG|/=X|gm[~InjN]6q7|Z=Zxa2AP:)5K%`P.X%G{~<;D_?X~PqfgQ^:J#_O-m' );
define( 'LOGGED_IN_KEY',    'HU[}8DJF4.Ny=<WMTe~_VkKJe/I*w1x,07z$$;9Ob,5;s/z`k,SPBcR,=NO9~}Fz' );
define( 'NONCE_KEY',        'n?Yea*?g?*=XsRC|*IGmz?~%J6aU/TM#D)@Y(|g<kI@s%|e<2V3dL;9;3X9>A4IE' );
define( 'AUTH_SALT',        'Z.wyQ2=>8t=E)NV_S|Nq}Hx:eA8%R:`-%-(Uq5CzN{:CRZn>YMHwWhF5!vPG9]F4' );
define( 'SECURE_AUTH_SALT', 'R?G$}Og BGa=]-y~?6noy`z(&2is*r ]L.{KA8 |Po[&oFS@VjCTYdKK9$r;*PJG' );
define( 'LOGGED_IN_SALT',   'jkwil!^ >rxeA77R!8;+u-,dQt,[ddiWPqQYBU]^m>r4U:%Mw,G]pc7+w}_#L)r{' );
define( 'NONCE_SALT',       '_xMuk|xRHP<A&2_9~-bEQ|Aba<mS.;S7<4/&;ZgkJ2sMynMgWQ}7>6ABT/`n SSc' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
