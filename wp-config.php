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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-lodicoins' );

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
define( 'AUTH_KEY',         'Y*hDMV[=Yic!&?.:=v(tmE uLSiz#8H~]7@b=uJJrM3bhSd*jU:@^;-@Ui`5KrbG' );
define( 'SECURE_AUTH_KEY',  'Nkmixs)_D&shzGHE8}l9QhM)t1,6gAvHT)?]!BTmO3<ekF@hLLcj<t?T,Uv`u=]U' );
define( 'LOGGED_IN_KEY',    'jDKTAP_B0]rob)-(&5Fh]inkYi!Gi70T@!Kfxf`%y1OL(Q5[ySw*v93brpV9D}^O' );
define( 'NONCE_KEY',        'k~:bmW(|Fp#$mYz[v<$#2?PC`p,EIWqv1 #X$I}5j] 9)N)a^NL(n$TQ7~EkATv|' );
define( 'AUTH_SALT',        '>z`]ASlKYKgwHM.Lt)2I1v$rU18bi<,!j~6PM(RKENLpeDOl;opyeJb40Q-x,oQU' );
define( 'SECURE_AUTH_SALT', '}[2nj}skZ8>X8gpB=n+AigCm,gl*VEc1R~Z{}~s*[81~22:F:_7w1#e8Ma9>=} h' );
define( 'LOGGED_IN_SALT',   't6A^yKy<n]geK/M_R%Ig #31jXO2W~#RL4d{v=&Hx=/bKwVsG$%U.O!3]OIUq#08' );
define( 'NONCE_SALT',       'dN,X1?!CqeU%jG5jcOa?9?HaOv4v8iKl9iNnl-XyypXO~XG&L6jV?K;oNXN:>yXt' );

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
