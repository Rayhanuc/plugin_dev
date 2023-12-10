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
define( 'DB_NAME', 'plugindevelopment' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'd_`un*/!`kKIJ&p;pj)utPc1W6&Z~c]~?pTAMWfu&OGxFVlg,[te<!GTl1hAbh!d' );
define( 'SECURE_AUTH_KEY',  'L&VEeNz<f];b6/8t=8p Rz,|RE`6Zys8i%$e^-z;8Xp: (?9czO7h4D*zk%4.1|q' );
define( 'LOGGED_IN_KEY',    'XfPKkcTx9mn{S;dp5ZMz6nhFEW8@W~TWqB*K(2AVcQ!~(Ui[?p/OsD?Jg%.jowzl' );
define( 'NONCE_KEY',        '&NazhVyo<?j6=59K||yE~Ag4Pr] n+h(7R@v!}8weq?Ir)BUdh@rG?T4n)Cf`bm$' );
define( 'AUTH_SALT',        '%h~s8Z<}EILV>#>]22(sUj%12;jP U8Zj%wmQr/M@N.g,LxAsZUDBO!5QU?LB%zj' );
define( 'SECURE_AUTH_SALT', '~3-CHM8GU^J:`?^Tg4H0vC,Q@q~t7JP5}YOh~NT#[+ufdJD:Xc|Xw#$}m%AvOAQF' );
define( 'LOGGED_IN_SALT',   'mHM{v05o~:c|j.6u1|Vr#5f>xok0Ag|s4t[? Ijbg^-2LV:MNhrIT3 &A#l.I)=0' );
define( 'NONCE_SALT',       's3}N,,KIAD5qG<}we7B>)~*GcAyj.Kl,8K?qO1Zqcu3@s)-nnw{vWZ/3yhSX^DEh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pldev_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
