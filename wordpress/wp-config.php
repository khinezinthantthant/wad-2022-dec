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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'kzt' );

/** Database password */
define( 'DB_PASSWORD', 'khinezin' );

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
define( 'AUTH_KEY',         '$V|J+h7+_soKui3kub!f+[5RJ(UC^m8M^@T(M7bXk4KqMZ7Z300YiD7tu1p9SNC+' );
define( 'SECURE_AUTH_KEY',  ' &Z)G)%%AXFH&iXhehpN>fd&#aX4Ne#&GskQth);!~Yjt57 7.g];cfPS^w?`zgL' );
define( 'LOGGED_IN_KEY',    'cE976o~d1!!eChqIh|`!^TbO+u8F {[GKb9#?+k7^|h;/%dl-O6{k)g=uLs#f6iJ' );
define( 'NONCE_KEY',        'Z8D2_Q=k{61/LwL kjMMuFU^M<A8IW|_E{>1XqDTvL1WeM(@_%^DP/+?`~}JiH0I' );
define( 'AUTH_SALT',        'E.Xc`,UTPY8!MZ>$i<h5)5=.6LaXX,1NY&buRdSde.7&}#l?Lj&HN+h>u[1HS]4,' );
define( 'SECURE_AUTH_SALT', ')F!NzH<$=%p9}0Gi]3c~P9qXj+]p&fr{dnh0fIlG>rxyhPOfQ*Di.D/^dL2]g|@>' );
define( 'LOGGED_IN_SALT',   'exj3]/M>UP1mgOAW8kTAUybd&:L*X8nWpJv]Z:uakR,IDpF RyzMPTy@AKPXNSxw' );
define( 'NONCE_SALT',       '`ou<%n|F,*Ef_EH!weE^9~=_]gpzeti+S#ZJMbQOpF.zm<|k]Kjtqa!if$twXj(s' );

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
