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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_vshowcase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'EJ>~F]i%:q0|NWknISTFO~Jm_CY&3Zw]:;tfW?BEt,cm4{C_5>+G+GeX9kzn=]/(' );
define( 'SECURE_AUTH_KEY',  '`$GxIV_a[I1C(4Cs< tYPeeEG;/%f^INT1v#MQp2ky7I0!TSi-7P $A 4q2@c]SW' );
define( 'LOGGED_IN_KEY',    '6$69-+#[{zuR@<dOctHZp3$ssQ$kM:O6]zc!-`2hi{sol3z{wywgu (p!OVul6;!' );
define( 'NONCE_KEY',        '9uZ(CHmyx$P=X3w!/l9x.[?M;M&NG:b1`snq.6@q~ig2q{I}%l4ayBOhTk1d[kbI' );
define( 'AUTH_SALT',        '>pn0dzt9Q8BzTJx|Skb*f08[~Qu=K:B;%|U!GqKI%j3fg_,oQb+dCrSxz!AxY-6F' );
define( 'SECURE_AUTH_SALT', ' k:hd0 5/+,JW&vNM5w`y[lm^TbDp$*T3wbVI2X0]X(zf<qA _gF.?ce)Ju!Aed`' );
define( 'LOGGED_IN_SALT',   'E}5HU/:r.L.m~dpP{@tqj0:UlBA{M<V4OM4.aPv}b:K&N4}W01IrXKlmR#4Wx=$k' );
define( 'NONCE_SALT',       ')045P<d^7H-EuSJ`G-MJw-!I_7jHOM/L.yT-] y-1jz],G.%wN$uH=f eNAjsBv<' );

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
