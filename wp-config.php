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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'K$UNsLstK)Eac-(EQ+@Lla;Ch=6[6oA;/IvarGzwkBZxxA5c}~G(z*nH@YkO6u?{' );
define( 'SECURE_AUTH_KEY',   'R}=^LpgBrs:zO=W>IR|j3)NfrSjoBgx>y^~%bv65@]7I4l51p]iJ]by>-*1NZGv9' );
define( 'LOGGED_IN_KEY',     '*.<<m9X|`9c!NjK;lZI_xDnoo!p!lX$P3zlDrxJ-Puue`WdoxS?aFp/g(dq_D[T1' );
define( 'NONCE_KEY',         '<XmO|j5pUgqx;HWEpd>U;FpLv(feu2j%tT})viA~zpYd3?N(:MQqlH~,n`hKr+:k' );
define( 'AUTH_SALT',         ',^+rs2l61{4?ct-x9g93_>{Ut&q(xrejbSF8s9e:aRuE7xEvdd,JJ|4zIf*G}?.r' );
define( 'SECURE_AUTH_SALT',  'HHdsU,Pzq]f+RzcyHNL/W?!;QeWR!:|m:yWE +gu8J-W%T;EQwCkd`YQ;4R$?+$#' );
define( 'LOGGED_IN_SALT',    ':u/bpG@/u#[b@%x:Wqy~d,@9*DV (<CN52&zXpDIT Hq|c_S^6ay:a?$y&{1<fx^' );
define( 'NONCE_SALT',        'I]#%&fTq0g+gA5<yEiV0f%2gy5aRqA>*=bwhe8}z(]uEtgQg[ftbJ3T@jrvbahIT' );
define( 'WP_CACHE_KEY_SALT', '6+,kJ$[cpktX?/s^2ALx,gXkZTy]wc3!oKY{@P2D8WZxK[^@yZ,eZwO%l3IFh7T/' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
