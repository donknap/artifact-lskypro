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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'mysql.local' );

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
define( 'AUTH_KEY',         '4 r!zy7%Up~Y dqx V`3sE60>$S;ZLidJb$?;Kq0tctl4&>xD|r+)+<:6f,VVyyy' );
define( 'SECURE_AUTH_KEY',  '0.]1i#>6--7-y%7k4h8flDoIP|OJr;w{;.``wCAZ@2~EZVBVmpWL-DM*!B10Ngr0' );
define( 'LOGGED_IN_KEY',    '=#`Q>(HxDqS{;Dq6%g#ui3oBA3qLuwwV1O*&*w~SWkz0;iigkG.dRTD/*]ng7z6u' );
define( 'NONCE_KEY',        'LBL5^9|JEdZfu7F&=3:+5fShSlDmIoj50}.}:)H;y ,veaVQgta^_Vi={h:}H ($' );
define( 'AUTH_SALT',        ',Gm5!r-wvh$xwfy/wS0Vy)rM?bBizLj2TGPex XrzU,vBsLGRgr_`SfX2# o^WiR' );
define( 'SECURE_AUTH_SALT', 'K+<H%LZ.-[Z_J?!d<zu&!G8KXKGA@Mf8?a0L66orMLP>`e3I$1]ww|U@Nh(jFKJB' );
define( 'LOGGED_IN_SALT',   'VG|vGNkd]kvfzy:VI7N7sT)WklO+@-j_/s*0vs3F%x/peC2v+~;p&x~^?*NR?;G}' );
define( 'NONCE_SALT',       'kFW7 {@6gQe/cBYM.dPo?MB(MvkID#S&$S$6e7.f]dj&zly|{yY7f_k[VxR>N.K=' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
