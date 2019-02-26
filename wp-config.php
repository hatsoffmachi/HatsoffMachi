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
define( 'DB_NAME', 'hatsoffmachi_db' );

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
define( 'AUTH_KEY',         '@MoGxoICp7FaKI61/nlJydTe*`jE}k[T~9+DA3r8$JcCV1GRqS>cji@$Nhlv9}^d' );
define( 'SECURE_AUTH_KEY',  'BcNr;aE 1C8!3kU^g<-!.q$HPR+/LcoHS}V-Esq*pvqmJQtBvZ0w&swAUl?B7fQ9' );
define( 'LOGGED_IN_KEY',    '&RSd7Ri`hG9T{M+vy,){wukD(1fHNRTtv^t$R%K.i|LQ^3MrcC9kNjA^;8{TNMzW' );
define( 'NONCE_KEY',        'a/el4#u=e4Vb,r&:D<SXzI/RgA<}.r*6[>q+fDp)IJ|CRzG&6`iN_TJMPR^FW w4' );
define( 'AUTH_SALT',        'uND{wwp.V;z]<C:-2kV$=I7m-@F?io[ZiPDD<CxQUpu$qS}ppAEG -J(#21h`hxg' );
define( 'SECURE_AUTH_SALT', 'kI3KV>=+y@Fg%RZFhQ&lPhlP>M~hj%sM<s?b,G$kzC4[+u(&*@,7nuO@Cm7t`p9F' );
define( 'LOGGED_IN_SALT',   'kv6;9`>Z9M @ZsOEjN5UWkR0I^3Ad9,6>|yCmt}];+]:if2s9.3>qb87=g:$bR+C' );
define( 'NONCE_SALT',       '- gj&uk$(X0%DDeQ%$Yt>B)FNKuSpilJ/Q2QP`bBps#|Xfh[lb&#U>}m7,PU+urp' );

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
