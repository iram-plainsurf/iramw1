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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '<X@8.7k`Ak68[Z50.fc$SeRL4M_;rqk3w^7*jK8=_.[&z0ZO~$&xuC}Ks:AUn9)-' );
define( 'SECURE_AUTH_KEY',  'HAYMM+|YrhVXUUwWMDLu `&XKOq{/s$2jZZG(p`9CNBg~z*Samy)GhP@jX^rI4UE' );
define( 'LOGGED_IN_KEY',    '.r+*$r2(]zj^a:O+]Ha:wn FoU,^M2Lqfm:;IZgsg](x_JCW~@Y0/%[$Secdp#E^' );
define( 'NONCE_KEY',        'nSUG7KL#x,0fM MrR4BL@`>BzS<]0G2pk|&$`9QVl-a*);DUaK]-XP22G:G<qI`o' );
define( 'AUTH_SALT',        '/V61[U5(>Gv8@{S(mTJS:%c1H`t#~5_-kERJsEQY[7Zefo5X.gm1[|M]ax(G;dGm' );
define( 'SECURE_AUTH_SALT', 'eE*@j6rypkxxxoF]gW|wF O1#-to^Ax/jUY}g`PC+Rsn6&}UwO&+KDL,3}|RX>1I' );
define( 'LOGGED_IN_SALT',   '&4wYDfdaK8S5o&tu6UDYvQx }~ChSp`k4N|A!?L3-hF4Kc1W{YYjv4s$?K0blKCQ' );
define( 'NONCE_SALT',       'Qc2KS~H)!NIqK/LmZZzjiC;m(}t2K`6ud%(Oo!c:pb 0(y6Vy*L<k|jluiouu+:I' );

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
