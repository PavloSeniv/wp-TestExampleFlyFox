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
define( 'DB_NAME', 'TestExampleFlyFox' );

/** MySQL database username */
define( 'DB_USER', 'TestExampleFlyFox' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HgneMBF@LrT3$wg' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'U(#`{K;&Zb(5h34AMw-ez@r_RGou#h>YO=dT>+0cS}c@}yG9u{YVmemRisMmimRW' );
define( 'SECURE_AUTH_KEY',  'H{(ktL3!4lq7W^ImBD|F%:BOi%gC/J/*GuT2l@fMs~Bc){|w-m8k/SQb#~R#&WK;' );
define( 'LOGGED_IN_KEY',    'w 2?#rMwEnUyTZb=f?E39`jzoy5X=P+Tt!>ncyiU:AIpSn.~&*XrdGxl(PD?I??V' );
define( 'NONCE_KEY',        'YOsGHY@$O#lW|9fGd_CQc^,l7;c2.;T+tC;EFz&T< |2*JRYf_hu*p;7iME>lk#(' );
define( 'AUTH_SALT',        'L!!!+aQGV`Ohjz>E^YyEu(0_1 ccra?b;R`74.mZzgp{KDwy*mHXYF#]4.r<viK2' );
define( 'SECURE_AUTH_SALT', '$%3!3Bt0@%wzwN->lo{RPIW7s+-wH.ZO<E)X9rP:_yNXZ:>6UW9;{b#rja8|~ya#' );
define( 'LOGGED_IN_SALT',   ':uP|1:Dg-uWHrY(4aj13W;vA|B]iN-/1PMTf|Bf71d%^nHgxij0.;3S ({%XL;wZ' );
define( 'NONCE_SALT',       'J0`Fg8KW2=7 G$)oo:Q9y@c^H;.Tsa~6kbO3OM{OGiv=#k|*p.K!5Vw?Wu~]B.]z' );

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
